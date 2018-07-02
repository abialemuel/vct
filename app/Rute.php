<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    //
    protected $table = 'place';

    public function book()
      {
          return $this->hasMany('App\book');
      }
}
