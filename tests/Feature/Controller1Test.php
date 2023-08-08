<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\Controller1;

class Controller1Test extends TestCase
{
    /**
     * Test method1 in Controller1.
     *
     * @return void
     */
    public function test_method1()
    {
        $controller = new Controller1();
        $response = $controller->method1();

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * Test method2 in Controller1.
     *
     * @return void
     */
    public function test_method2()
    {
        $controller = new Controller1();
        $response = $controller->method2();

        $this->assertEquals(200, $response->getStatusCode());
    }

    // Add more test methods as needed for each public method in Controller1
}