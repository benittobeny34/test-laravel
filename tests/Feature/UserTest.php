<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function testhomeTest()
    {
        
        $response = $this->get('home');

        $response->assertStatus(302);
    
    }


    public function testShowRouteTest()
    {
        $response = $this->get('show');

        $response->assertStatus(500);
    
    }
    
    public function testaddPostTest()
    {
        $response = $this->post('addpost');

        $response->assertStatus(302);
    
    }

    public function testAnyDataRouteTest()
     {
        $response = $this->get('show');

        $response->assertStatus(500);
    
    }
    
    public function testIndexTest()
    {
        $response = $this->post('index');

        $response->assertStatus(302);
    
    }

    
}
