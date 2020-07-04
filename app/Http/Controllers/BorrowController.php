<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;

class BorrowController extends Controller
{
  public function status($id, $status) 
  {
    $book           = Book::find($id);
    $book->user_id  = null;
    $book->status   = 1;
    $book->save();

    return redirect('/panel/books/available')
      ->with('success', $book->name.' released successfully');
  }

  public function request_book($id) 
  {
    $book   = Book::find($id);
    $users  = User::where('type', '=', 0)->get();

    return view('panel.borrowed.request_book')
      ->with('book', $book)
      ->with('users', $users);
  }

  public function assigned_book($id) 
  {

    $this->validate(request(), [
      'user_id' => 'required',        
    ]);

    $book          = Book::find($id);
    $book->user_id = request('user_id');
    $book->status  = 0;
    $book->save();

    return redirect()
      ->route('panel.books.borrowed')
      ->with("success", $book->name." assigned successfully");
  }
}
