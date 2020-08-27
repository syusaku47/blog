<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    // use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    
    public function testHello()
    {
        $this->assertTrue(true);

        $response = $this->get('/index');
        $response->assertStatus(200);
        
        $response = $this->get('/new');
        $response->assertStatus(200);
    } 
}
