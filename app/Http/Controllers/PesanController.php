<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rute;
use App\mobil;

class PesanController extends Controller
{
    //

    public function set(Request $request)
    {
      if (empty($request->tgl)) {
        # code...
        return view('/');
      } else {

        $tanggal = $request->tgl;
        $mobil_list = mobil::all();
        $rute_list = Rute::all();
        return view('/pesan',compact('tanggal','mobil_list','rute_list'));
      }

    }
}
