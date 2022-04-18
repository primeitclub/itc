<?php

namespace Tests\Feature\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogCategoryManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_all_blog_categories()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->get(route('admin.blog-categories.index'));

        $response->assertSuccessful();

        $response->assertViewIs('admin.blog-categories.index');
    }

    public function test_can_view_create_new_blog_category_page()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->get(route('admin.blog-categories.create'));

        $response->assertSuccessful();
        $response->assertViewIs('admin.blog-categories.create');
    }

    public function test_can_create_new_blog_category()
    {
        $admin = User::factory()->create();

        $this->actingAs($admin)
            ->post(
                route('admin.blog-categories.store'),
                $this->data()
            );

        $this->assertCount(1, BlogCategory::all());
    }

    public function test_title_is_required()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(
                route('admin.blog-categories.store'),
                array_merge($this->data(), ['title' => ''])
            );

        $response->assertSessionHasErrors([
            'title' => 'The title field is required.'
        ]);
    }

    public function test_title_hasnt_been_taken_already()
    {
        $admin = User::factory()->create();

        $this->actingAs($admin)
            ->post(
                route('admin.blog-categories.store'),
                $this->data()
            );

        $response = $this->actingAs($admin)
            ->post(
                route('admin.blog-categories.store'),
                array_merge(
                    $this->data(),
                    ['title' => 'Blog Category']
                )
            );

        $response->assertSessionHasErrors([
            'title' => 'The title has already been taken.'
        ]);
    }

    public function test_slug_is_required()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(
                route('admin.blog-categories.store'),
                array_merge($this->data(), ['slug' => ''])
            );

        $response->assertSessionHasErrors([
            'slug' => 'The slug field is required.'
        ]);
    }

    public function test_slug_hasnt_been_taken_already()
    {
        $admin = User::factory()->create();

        $this->actingAs($admin)
            ->post(
                route('admin.blog-categories.store'),
                $this->data()
            );

        $response = $this->actingAs($admin)
            ->post(
                route('admin.blog-categories.store'),
                array_merge(
                    $this->data(),
                    ['slug' => 'blog-category']
                )
            );

        $response->assertSessionHasErrors([
            'slug' => 'The slug has already been taken.'
        ]);
    }

    public function test_can_update_blog_category()
    {
        $admin = User::factory()->create();


        $this->actingAs($admin)
            ->post(route('admin.blog-categories.store'), $this->data());

        $blogCategory = BlogCategory::where('id', 1)->first();

        $this->actingAs($admin)
            ->patch(route('admin.blog-categories.update', $blogCategory), [
                'title' => 'New Title',
                'slug' => 'new-title',
            ]);

        $blogCategory->refresh();

        $this->assertEquals('New Title', $blogCategory->title);
        $this->assertEquals('new-title', $blogCategory->slug);
    }

    public function test_can_not_delete_default_blog_category()
    {
        $admin = User::factory()->create();

        $this->actingAs($admin)
            ->post(route('admin.blog-categories.store'), [
                'title' => 'Uncategorized',
                'slug' => 'uncategorized'
            ]);

        $blogCategory = BlogCategory::where('id', 1)->first();

        $response = $this->actingAs($admin)
            ->delete(route('admin.blog-categories.destroy', $blogCategory));

        $response->assertSessionHas([
            'error' => 'You can not delete default category!'
        ]);

        $this->assertCount(1, BlogCategory::all());
    }

    public function test_can_delete_blog_category()
    {
        $admin = User::factory()->create();

        $this->actingAs($admin)
            ->post(route('admin.blog-categories.store'), [
                'title' => 'Uncategorized',
                'slug' => 'uncategorized'
            ]);

        $this->actingAs($admin)
            ->post(route('admin.blog-categories.store'), $this->data());

        $this->assertCount(2, BlogCategory::all());

        $blogCategory = BlogCategory::where('id', 2)->first();

        $this->actingAs($admin)
            ->delete(route('admin.blog-categories.destroy', $blogCategory));

        $this->assertCount(1, BlogCategory::all());
    }

    public function test_category_has_many_blogs_relationship()
    {

        $blogCategory = BlogCategory::factory()->create();

        $blog = Blog::factory()->create([
            'blog_category_id' => $blogCategory->id
        ]);

        $this->assertEquals($blogCategory->id, $blog->blog_category_id);

        $this->assertEquals(1, $blogCategory->blogs->count());

        $this->assertInstanceOf(HasMany::class, $blogCategory->blogs());

        $this->assertInstanceOf(Collection::class, $blogCategory->blogs);

        $this->assertInstanceOf(Blog::class, $blogCategory->blogs->random());
    }

    protected function data()
    {
        return [
            'title' => 'Blog Category',
            'slug' => 'blog-category'
        ];
    }
}
