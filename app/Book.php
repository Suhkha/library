<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
    'name', 'category_id', 'author_id', 'published_date'
  ];

  public function category()
  {
    return $this->belongsTo('App\Category');
  }

  public function author()
  {
    return $this->belongsTo('App\Author');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
