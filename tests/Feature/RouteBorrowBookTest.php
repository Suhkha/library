<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteBorrowBookTest extends TestCase
{
  public function testRouteBorrowBook()
  {
      $response = $this->get('/panel/borrowed/request_book/1');
      $response->assertStatus(200);
  }
}
