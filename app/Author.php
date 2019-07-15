<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  public $guarded = [];
  public $timestamps=false;

public function books(){
  return $this->hasMany('App\Book', 'author_id');
}









}
