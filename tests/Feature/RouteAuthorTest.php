<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteAuthorTest extends TestCase
{
  public function testRouteAuthor()
    {
      $response = $this->get('/panel/authors');
      $response->assertStatus(200);
    }
}
