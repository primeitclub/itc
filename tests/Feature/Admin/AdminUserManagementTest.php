<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminUserManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_all_admin_users()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->get(route('admin.users.index'));

        $response->assertSuccessful();
        $response->assertViewIs('admin.users.index');
    }

    public function test_can_view_create_new_admin_user_page()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->get(route('admin.users.create'));

        $response->assertSuccessful();
        $response->assertViewIs('admin.users.create');
    }

    public function test_name_is_required()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(route('admin.users.store'), array_merge($this->data(), [
                'name' => ''
            ]));

        $response->assertSessionHasErrors([
            'name' => 'The name field is required.'
        ]);
    }

    public function test_email_is_required()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(route('admin.users.store'), array_merge($this->data(), [
                'email' => ''
            ]));

        $response->assertSessionHasErrors([
            'email' => 'The email field is required.'
        ]);
    }

    public function test_email_is_valid_email()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(route('admin.users.store'), array_merge($this->data(), [
                'email' => 'text'
            ]));

        $response->assertSessionHasErrors([
            'email' => 'The email must be a valid email address.'
        ]);
    }


    public function test_email_hasnt_been_taken_already()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(route('admin.users.store'), array_merge($this->data(), [
                'email' => $admin->email
            ]));

        $response->assertSessionHasErrors([
            'email' => 'The email has already been taken.'
        ]);
    }

    public function test_password_is_required()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(route('admin.users.store'), array_merge($this->data(), [
                'password' => ''
            ]));

        $response->assertSessionHasErrors([
            'password' => 'The password field is required.'
        ]);
    }

    public function test_password_is_of_minimum_six_characters()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(route('admin.users.store'), array_merge($this->data(), [
                'password' => 'pass'
            ]));

        $response->assertSessionHasErrors([
            'password' => 'The password must be at least 6 characters.'
        ]);
    }

    public function test_password_matches_password_confirmation()
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->post(route('admin.users.store'), array_merge($this->data(), [
                'password_confirmation' => 'incorrect-password'
            ]));

        $response->assertSessionHasErrors([
            'password' => 'The password confirmation does not match.'
        ]);
    }

    public function test_can_create_new_admin_user()
    {
        $admin = User::factory()->create();

        $this->actingAs($admin)
            ->post(route('admin.users.store'), $this->data());

        $this->assertCount(2, User::all());
    }

    public function test_can_update_admin_user()
    {
        $admin = User::factory()->create();


        $this->actingAs($admin)
            ->post(route('admin.users.store'), $this->data());

        $user = User::where('id', 2)->first();

        $this->actingAs($admin)
            ->patch(route('admin.users.update', $user), [
                'name' => 'New Name',
                'email' => 'new@email.com',
                'password' => 'secret',
                'password_confirmation' => 'secret',
                'is_super' => false
            ]);

        $user->refresh();

        $this->assertEquals('New Name', $user->name);
        $this->assertEquals('new@email.com', $user->email);
        $this->assertTrue(Hash::check('secret', $user->password));
        $this->assertEquals(false, $user->is_super);
    }

    public function test_can_delete_admin_user()
    {
        $admin = User::factory()->create();

        $user =  User::create($this->data());

        $this->assertCount(2, User::all());

        $this->actingAs($admin)
            ->delete(route('admin.users.destroy', $user));

        $this->assertCount(1, User::all());
    }


    private function data()
    {
        return [
            'name' => 'John Doe',
            'email' => 'john@email.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'is_super' => true
        ];
    }
}
