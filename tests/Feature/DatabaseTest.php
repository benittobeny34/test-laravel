<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;



class DatabaseTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDatabase()
{
    // Make call to application...

    $this->assertDatabaseHas('users', [
        'email' => 'brendonbeni42@gmail.com',
    ]);
}

public function testDatabaseMissing()
{
    // Make call to application...
    $this->assertDatabaseMissing('users', [
      'email' => "dhgoshgd@gmail.com",
    ]);

}

}
