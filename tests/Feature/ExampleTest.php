<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test the /api/users endpoint.
     */
    public function test_users_endpoint(): void
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'name', 'email']
        ]);
        
        $response->assertJson([
            '*' => ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com']
        ]);
    }

    /**
     * Test the /api/posts endpoint.
     */
    public function test_posts_endpoint(): void
    {
        $response = $this->get('/api/posts');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'title', 'body', 'user_id']
        ]);
        
        $response->assertJson([
            '*' => ['id' => 1, 'title' => 'Post Title', 'body' => 'Post Body', 'user_id' => 1]
        ]);
    }
}