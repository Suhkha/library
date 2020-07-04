<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteUserTest extends TestCase
{
  public function testRouteUser()
  {
      $response = $this->get('/panel/users');
      $response->assertStatus(200);
  }
}
