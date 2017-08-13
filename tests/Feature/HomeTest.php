<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function display_sections_buttons()
    {
    	$response = $this->get('/');

      $response->assertStatus(200);
      $response->assertSee('Repostería');
      $response->assertSee('Manualidades');
    }
}
