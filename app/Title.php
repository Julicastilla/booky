<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
  public $guarded=[];
  public $timestamps=false;

public function books(){
  return $this->hasMany('App\Book', 'title_id');
}





}
