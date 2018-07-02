<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\book;
use App\Mail\BookNotif;
use App\Mail\BookInfo;

class bookController extends Controller
{
    //

    public function store(Request $request)
    {
      $pilmobil=$request->pilihanmobil;
      $pilrute=$request->pilihanrute;
      $tanggal=$request->tgl;
      $uid=$request->userid;
      $tanggal = date('Y-m-d', strtotime($tanggal));
      $book=book::create([
        'id_users'=>$uid,
        'id_mobil'=>$pilmobil,
        'id_rute'=>  $pilrute,
        'tgl_book'=> $tanggal,

      ]);

      $emails=['abiadarmalemuel@yahoo.co.id','adarma@student.ciputra.ac.id','abiadarmalemuel@gmail.com'];
      Mail::to($emails)->send(new BookNotif($book));
      Mail::to($book->user->email)->send(new BookInfo($book));
      return view('booking_complete');
    }



}
