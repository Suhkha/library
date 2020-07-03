<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use App\Author;
use Carbon\Carbon;

class BookController extends Controller
{
  public function index()
  {
    $books = Book::with(['category', 'author'])->get();
    return view('panel.books.index')
      ->with('books', $books);
  }

  public function create()
  {
    $available_categories = Category::available_categories();
    $available_authors    = Author::available_authors();

    return view('panel.books.new')
      ->with('available_categories', $available_categories)
      ->with('available_authors', $available_authors);
  }

  public function store()
  {
    $this->validate(request(), [
      'name' => 'required|string',
      'category_id' => 'required',
      'author_id' => 'required',
      'published_date' => 'required'
    ]);

    $book                 = new Book;
    $book->name           = request('name');
    $book->category_id    = request('category_id');
    $book->author_id      = request('author_id');
    $book->published_date = Carbon::parse(request('published_date'))->format('Y-m-d');
    $book->status         = 1;
    $book->save();
    
    
    return redirect()
      ->route('panel.books.index')
      ->with("success", "Book added successfully");
  }

  public function edit($id) 
  {
    $book                 = Book::find($id);
    $current_category     = Category::find($book->category_id);
    $current_author       = Author::find($book->author_id);
    $available_categories = Category::available_categories();
    $available_authors    = Author::available_authors();

    return view('panel.books.edit')
      ->with('book', $book)
      ->with('current_category', $current_category)
      ->with('current_author', $current_author)
      ->with('available_categories', $available_categories)
      ->with('available_authors', $available_authors);
  }

  public function update($id)
  {
    $this->validate(request(), [
      'name' => 'required|string',
      'category_id' => 'required',
      'author_id' => 'required',
      'published_date' => 'required'
    ]);

    $book                 = Book::find($id);
    $book->name           = request('name');
    $book->category_id    = request('category_id');
    $book->author_id      = request('author_id');
    $book->published_date = Carbon::parse(request('published_date'))->format('Y-m-d');
    $book->status         = 1;
    $book->save();
    
    
    return redirect()
      ->route('panel.books.index')
      ->with("success", "Book updated successfully");
  }

  public function delete($id)
  {
    $book = Book::find($id);
    $book->delete();

    return redirect()
      ->route('panel.books.index')
      ->with("error", "Book deleted successfully");
  }
}