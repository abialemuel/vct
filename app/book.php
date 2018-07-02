<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    protected $table = 'book';
    protected $fillable = [
        'id_users', 'id_mobil', 'tgl_book','id_rute',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_users');
    }
    public function mobil()
    {
        return $this->belongsTo('App\mobil', 'id_mobil');
    }
    public function rute()
    {
        return $this->belongsTo('App\Rute', 'id_rute','ID_place');
    }
}
