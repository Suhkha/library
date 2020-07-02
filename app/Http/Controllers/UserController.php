<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function index() 
  {
    $users = User::where('type', 0)->get();
    return view('panel.users.index')
          ->with('users', $users);
  }
}
