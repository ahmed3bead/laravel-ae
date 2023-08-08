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

    /**
     * Test custom methods on the User model.
     */
    public function test_custom_methods(): void
    {
        // Create a user
        $user = User::factory()->create();
    
        // Call the custom method and assert the expected outcome
        $this->assertTrue($user->customMethod());
    }
    
    /**
     * Test custom scopes on the User model.
     */
    public function test_custom_scopes(): void
    {
        // Create a user
        $user = User::factory()->create();
    
        // Call the custom scope and assert the expected outcome
        $this->assertEquals(1, User::customScope()->count());
    }
}