<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
  
  public function index()
  {
    $authors = Author::all();
    return view('panel.authors.index')
      ->with('authors', $authors);
  }

  public function create()
  {
    return view('panel.authors.new');
  }

  public function store()
  {
    $this->validate(request(), [
      'name' => 'required|string',
      'status' => 'boolean'          
    ]);

    $author               = new Author;
    $author->name         = request('name');
    $author->status       = is_null(request('status')) ? 0 : 1;
    $author->save();

    return redirect()
      ->route('panel.authors.index')
      ->with("success", "Author ".$author->name." added successfully");
  }

  public function edit($id)
  {
    $author = Author::find($id);
    return view('panel.authors.edit')
      ->with('author', $author);
  }

  public function update($id)
  {
    $this->validate(request(), [
      'name' => 'required|string',
      'status' => 'boolean'          
    ]);

    $author               = Author::find($id);
    $author->name         = request('name');
    $author->status       = is_null(request('status')) ? 0 : 1;
    $author->save();

    return redirect()
      ->route('panel.authors.index')
      ->with("success", "Author".$author->name." edited successfully");
  }

  public function delete($id)
  {
    $author = Author::find($id);
    $author->delete();

    if($category->authorsRelatedToBooks()->count())
    {
      return redirect()
        ->route('panel.authors.index')
        ->with("error", "You cannot delete this author. You have related books.");

    }

    return redirect()
      ->route('panel.authors.index')
      ->with("success", "Author deleted successfully");
  }
}
