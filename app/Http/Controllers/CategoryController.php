<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    return view('panel.categories.index')
          ->with('categories', $categories);
  }

  public function create()
  {
    return view('panel.categories.new');
  }

  public function store(Request $request)
  {
    $this->validate(request(), [
      'name' => 'required|string',
      'description' => 'required|string',
      'status' => 'boolean'          
    ]);

    $category               = new Category;
    $category->name         = request('name');
    $category->description  = request('description');
    $category->status       = is_null(request('status')) ? 0 : 1;
    $category->save();

    return redirect()
      ->route('panel.categories.index')
      ->with("status", "Category added successfully");
  }

  public function edit($id)
  {

  }

  public function update($id)
  {

  }

  public function delete($id)
  {

  }
}
