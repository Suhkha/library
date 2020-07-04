<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteCategoryTest extends TestCase
{
  public function testRouteCategory()
  {
      $response = $this->get('/panel/categories');
      $response->assertStatus(200);
  }
}
