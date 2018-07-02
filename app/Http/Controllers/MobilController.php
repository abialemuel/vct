<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;

class MobilController extends Controller
{
    //
    public function index()
    {
      $halaman = 'mobils';
      $mobil_list = mobil::all();
      return view('/tes',compact('halaman','mobil_list'));
    }
}
