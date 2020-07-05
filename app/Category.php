<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
    'name', 'description', 'status',
  ];

  public static function available_categories() 
  {
    $categories = Category::where('status', '=', 1)
      ->get();
    return $categories;
  }

  public function categoriesRelatedToBooks()
  {
    return $this->hasMany('App\Book');
  }
}
