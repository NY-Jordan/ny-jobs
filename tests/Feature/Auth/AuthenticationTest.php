<?php

namespace Tests\Feature\Auth;

use App\Models\Company;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    

    public function test_users_can_authenticate_using_the_login_screen()
    {
        $this->withoutExceptionHandling();
        $company = Company::factory()->create();

        $response = $this->post('/login', [
            'email' => $company->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = Company::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
