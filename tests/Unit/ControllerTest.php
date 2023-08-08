<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ControllerTest extends TestCase
{
    /**
     * Test index action.
     */
    public function test_index_action(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test show action.
     */
    public function test_show_action(): void
    {
        $response = $this->get('/show/1');

        $response->assertStatus(200);
    }

    /**
     * Test create action.
     */
    public function test_create_action(): void
    {
        $response = $this->get('/create');

        $response->assertStatus(200);
    }

    /**
     * Test store action.
     */
    public function test_store_action(): void
    {
        $response = $this->post('/store', [
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(201);
    }

    /**
     * Test edit action.
     */
    public function test_edit_action(): void
    {
        $response = $this->get('/edit/1');

        $response->assertStatus(200);
    }

    /**
     * Test update action.
     */
    public function test_update_action(): void
    {
        $response = $this->put('/update/1', [
            'name' => 'Updated Test',
            'email' => 'updated_test@example.com',
            'password' => 'updated_password',
        ]);

        $response->assertStatus(200);
    }

    /**
     * Test delete action.
     */
    public function test_delete_action(): void
    {
        $response = $this->delete('/delete/1');

        $response->assertStatus(200);
    }
}