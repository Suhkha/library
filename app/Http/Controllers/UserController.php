<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index() 
  {
    $users = User::where('type', 0)
      ->with(['book'])
      ->get();

    return view('panel.users.index')
          ->with('users', $users);
  }
}
