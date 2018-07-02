<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class sendmailController extends Controller
{
    //
    public function index(Request $request)
    {


      $name = $request->FirstName;
      $from = $request->Email;
      $pesan = $request->Message;


      Mail::raw("$pesan.
      Email dari : $from
      Nama : $name", function ($message)
      {
        $message->to('admin@vincar-tours.com')
                ->subject('Support Question Vincartours');
      });




      return view('/contacts');
    }
}
