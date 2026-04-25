<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_correcto()
    {
        // ARRANGE
        $user = User::factory()->create([
            'password' => bcrypt('123456')
        ]);

        // ACT
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => '123456'
        ]);

        // ASSERT
        $response->assertRedirect('/dashboard');
    }
}