<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Book;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class SaveBookTest extends TestCase
{
  use WithoutMiddleware;

  public function testSaveBook()
  {
    $book = factory(Book::class)->make([
      'name' => 'Harry',
      'status' => 1,
      'category_id' => 1,
      'user_id' => 1,
      'author_id' => null,
      'published_date' => now(),
    ]);

    $response = $this->post('/panel/books/save', $book->toArray());
    $response->assertStatus(200);
    $this->assertEquals(0, Book::count());
  }  
}
