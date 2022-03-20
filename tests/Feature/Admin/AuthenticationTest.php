<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_login_page()
    {
        $response = $this->get(route('admin.login-form'));

        $response->assertSuccessful();
        $response->assertViewIs('admin.auth.login');
    }

    public function test_email_is_required()
    {
        $response = $this->post(route('admin.login'), [
            'email' => '',
            'password' => 'password'
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_password_is_required()
    {
        $user = User::factory()->create();

        $response = $this->post(route('admin.login'), [
            'email' => $user->email,
            'password' => ''
        ]);

        $response->assertSessionHasErrors('password');
    }

    public function test_login_attempt_with_incorrect_credentials_shows_an_error_message()
    {
        $user = User::factory()->create();

        $response = $this->post(route('admin.login'), [
            'email' => $user->email,
            'password' => 'incorrect-password'
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    public function test_can_login_with_correct_credentials()
    {
        $user = User::factory()->create();

        $response = $this->post(route('admin.login'), [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertRedirect(RouteServiceProvider::ADMIN_HOME);
        $this->assertAuthenticatedAs($user);
    }

    public function test_authenticated_user_can_not_view_login_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get(route('admin.login-form'));

        $response->assertRedirect(RouteServiceProvider::ADMIN_HOME);
    }

    public function test_authenticated_user_can_log_out()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post(route('admin.logout'));

        $response->assertRedirect(route('admin.login-form'));
        $this->assertGuest();
    }
}
