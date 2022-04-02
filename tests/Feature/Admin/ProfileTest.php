<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_profile_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get(route('admin.profile'));

        $response->assertSuccessful();
        $response->assertViewIs('admin.users.profile');
    }

    public function test_name_is_required()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->patch(route('admin.profile.update'), [
                'name' => '',
                'email' => 'foo@bar.com'
            ]);

        $response->assertSessionHasErrors([
            'name' => 'The name field is required.'
        ]);
    }

    public function test_email_is_required()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->patch(route('admin.profile.update'), [
                'name' => 'foo',
                'email' => ''
            ]);

        $response->assertSessionHasErrors([
            'email' => 'The email field is required.'
        ]);
    }

    public function test_email_is_valid_email()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->patch(route('admin.profile.update'), [
                'name' => 'foo',
                'email' => 'foo-bar'
            ]);

        $response->assertSessionHasErrors([
            'email' => 'The email must be a valid email address.'
        ]);
    }

    public function test_can_update_name_and_email()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->patch(route('admin.profile.update'), [
                'name' => 'foo',
                'email' => 'foo@bar.com'
            ]);

        $user->refresh();

        $this->assertEquals('foo', $user->name);
        $this->assertEquals('foo@bar.com', $user->email);
    }

    public function test_password_must_be_more_than_six_characters()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->patch(route('admin.profile.update'), [
                'name' => 'foo',
                'email' => 'foo@bar.com',
                'password' => 'pass'
            ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'password' => 'The password must be at least 6 characters.'
        ]);
    }

    public function test_password_matches_password_confirmation()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->patch(route('admin.profile.update'), [
                'name' => 'foo',
                'email' => 'foo@bar.com',
                'password' => 'password',
                'password_confirmation' => 'incorrect-password'
            ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'password' => 'The password confirmation does not match.'
        ]);
    }
}
