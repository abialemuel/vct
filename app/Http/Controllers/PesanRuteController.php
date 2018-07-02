<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanRuteController extends Controller
{
    //
    public function set(Request $request)
    {
      $tanggal = $request->tgl;
      $rute = $request->pilihanrute;
      return view('pilihrute',compact('tanggal','rute'));
    }
}
