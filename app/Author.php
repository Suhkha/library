<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  protected $fillable = [
    'name', 'status',
  ];

  public static function available_authors() 
  {
    $authors = Author::where('status', '=', 1)
      ->get();
    return $authors;
  }

  public function authorssRelatedToBooks()
  {
    return $this->hasMany('App\Book');
  }

}
