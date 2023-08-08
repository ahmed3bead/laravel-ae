<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test index action.
     */
    public function test_index_action(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // Add more test methods for the other actions in the controllers.
}