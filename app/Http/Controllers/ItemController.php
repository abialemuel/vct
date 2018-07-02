<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ItemController extends Controller
{
    //
    public function item($iditem)
    {
    return view('rute',compact('iditem'));
    }
  

}
