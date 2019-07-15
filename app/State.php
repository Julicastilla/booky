<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $guarded=[];
    public $timestamps=false;

    public function books(){
      return $this->belongsTo("App\Book",'book_state', "state_id");
    }
}
