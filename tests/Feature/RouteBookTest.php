<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteBookTest extends TestCase
{
  public function testRouteBook()
  {
      $response = $this->get('/panel/books');
      $response->assertStatus(200);
  }
}
