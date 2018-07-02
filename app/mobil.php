<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    //
    protected $table = 'mobils';

    public function book()
      {
          return $this->hasMany('App\book');
      }
}
