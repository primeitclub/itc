<?php

namespace Tests\Feature;

use App\Models\EventCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventCategoryManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_all_event_categories()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->get(route('admin.event-categories.index'));

        $response->assertSuccessful();

        $response->assertViewIs('admin.event-categories.index');
    }

    public function test_can_view_create_new_event_category_page()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->get(route('admin.event-categories.create'));

        $response->assertSuccessful();
        $response->assertViewIs('admin.event-categories.create');
    }

    public function test_can_create_new_event_category()
    {
        $admin = User::factory()->create();

        $this->actingAs($admin)
            ->post(
                route('admin.event-categories.store'),
                $this->data()
            );

        $this->assertCount(1, EventCategory::all());
    }

    public function test_title_is_required()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(
                route('admin.event-categories.store'),
                array_merge($this->data(), ['title' => ''])
            );

        $response->assertSessionHasErrors([
            'title' => 'The title field is required.'
        ]);
    }

    public function test_slug_is_required()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(
                route('admin.event-categories.store'),
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
                route('admin.event-categories.store'),
                $this->data()
            );

        $response = $this->actingAs($admin)
            ->post(
                route('admin.event-categories.store'),
                array_merge(
                    $this->data(),
                    ['slug' => 'event-category']
                )
            );

        $response->assertSessionHasErrors([
            'slug' => 'The slug has already been taken.'
        ]);
    }

    public function test_can_update_event_category()
    {
        $admin = User::factory()->create();


        $this->actingAs($admin)
            ->post(route('admin.event-categories.store'), $this->data());

        $eventCategory = EventCategory::where('id', 1)->first();

        $this->actingAs($admin)
            ->patch(route('admin.event-categories.update', $eventCategory), [
                'title' => 'New Title',
                'slug' => 'new-title',
            ]);

        $eventCategory->refresh();

        $this->assertEquals('New Title', $eventCategory->title);
        $this->assertEquals('new-title', $eventCategory->slug);
    }

    public function test_can_not_delete_default_event_category()
    {
        $admin = User::factory()->create();

        $this->actingAs($admin)
            ->post(route('admin.event-categories.store'), [
                'title' => 'Uncategorized',
                'slug' => 'uncategorized'
            ]);

        $eventCategory = EventCategory::where('id', 1)->first();

        $response = $this->actingAs($admin)
            ->delete(route('admin.event-categories.destroy', $eventCategory));

        $response->assertSessionHas([
            'error' => 'You can not delete default category!'
        ]);

        $this->assertCount(1, EventCategory::all());
    }

    public function test_can_delete_event_category()
    {
        $admin = User::factory()->create();

        $this->actingAs($admin)
            ->post(route('admin.event-categories.store'), [
                'title' => 'Uncategorized',
                'slug' => 'uncategorized'
            ]);

        $this->actingAs($admin)
            ->post(route('admin.event-categories.store'), $this->data());

        $this->assertCount(2, EventCategory::all());

        $eventCategory = EventCategory::where('id', 2)->first();

        $this->actingAs($admin)
            ->delete(route('admin.event-categories.destroy', $eventCategory));

        $this->assertCount(1, EventCategory::all());
    }

    protected function data()
    {
        return [
            'title' => 'Event Category',
            'slug' => 'event-category'
        ];
    }
}
