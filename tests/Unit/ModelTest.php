<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test user creation.
     */
    public function test_user_creation(): void
    {
        $user = User::factory()->create();

        $this->assertDatabaseHas('users', ['email' => $user->email]);
    }

    /**
     * Test user update.
     */
    public function test_user_update(): void
    {
        $user = User::factory()->create();
        $user->update(['name' => 'New Name']);

        $this->assertDatabaseHas('users', ['email' => $user->email, 'name' => 'New Name']);
    }

    /**
     * Test user deletion.
     */
    public function test_user_deletion(): void
    {
        $user = User::factory()->create();
        $user->delete();

        $this->assertDatabaseMissing('users', ['email' => $user->email]);
    }

    // Add more test methods for any business logic related to the User model.
}