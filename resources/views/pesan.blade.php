<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vincartours - Pesan</title>
  <meta name="description"
  content="Tour Agency, Nikmati perjalanan anda dengan menggunakan mobil vintage. Daftar Gratis! Vincar-tours.com" />
  <meta name="keywords" content="" />
  <meta charset="utf-8" /><link rel="icon" href="favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="source/jquery.fancybox.css">
  <link rel="stylesheet" href="css/jquery.formstyler.css">
  <link rel="stylesheet" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

</head>
<?php

	require "php/connect.php";


 ?>
<body class="inner-body">
@extends('header');
<!-- // authorize // -->



<!-- main-cont -->
<div class="main-cont">

	<div class="inner-page">
		<div class="inner-breadcrumbs">
			<div class="content-wrapper">
				<div class="page-title">Tanggal = <?php echo "$tanggal"; ?></div>
				<div class="breadcrumbs">
        			<a href="#">Home</a> / <span>Pesan</span>
      	</div>
      	<div class="clear"></div>
      </div>
		</div>
    <?php
    include_once 'php/allsource.html';
    require_once 'php/connect.php';


    ?>



    <!-- \\ pilih rute \\ -->

    <div class='pop-destinations'>
        <form class="" action="done" method="post">
          {{ csrf_field() }}
      <header class='fly-in page-lbl'>
        <b>Plih rute yang anda inginkan</b>
        <h2 style="display:inline">Rute terpilih = </h2> <h2 style="display:inline" id=ruteterpilih> </h2>

      </header>
      <div class='mp-popular-row popular-flat'>
        <!-- // -->





        <?php foreach ($rute_list as $rute): ?>
          <div class="fly-in offer-slider-i">


            <a class="offer-slider-img" onclick="getrute('{{ $rute->pname }}','{{ $rute->ID_place }}')" >
              <img alt="" src="{{ $rute->pimage }}" />

              <input type="hidden" name="tgl" value=<?php echo "$tanggal" ?> >
              <span name="submit" id="submit" type="submit" value="Submit" class="offer-slider-overlay">

                <span class="offer-slider-btn">Pilih</span>

              </span>
            </a>

            <div class="offer-slider-txt">
              <div class="offer-slider-link"><a href="#"><font size="+0.3">{{ $rute->pname }}</font></a></div>
              <div class="offer-slider-l">
                <div class="offer-slider-location">#keterangan</div>
                <nav class="stars">
                  <ul>
                    <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                    <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                    <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                    <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                    <li><a href="#"><img alt="" src="img/star-a.png" /></a></li>
                  </ul>
                  <div class="clear"></div>
                </nav>
              </div>
              <div class="offer-slider-r align-right">
                <b>Rp {{ $rute->pprice }}k</b>
                <span><font size="+0.2">± {{ $rute->duration }} menit</font></span>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        <?php endforeach  ?>


        <!-- \\ -->
      </div>
      <div class='clear'></div>
    </div>

  <!-- \Pilih mobil\ -->
  <div class='pop-destinations'>
    <header class='fly-in page-lbl'>
      <b>Plih mobil yang anda inginkan</b>
      <h2 style="display:inline">Mobil terpilih = </h2> <h2 style="display:inline" id=mobilterpilih> </h2>

    </header>

    <div class='mp-popular-row popular-flat'>
      <!-- // -->



      <?php foreach ($mobil_list as $mobil): ?>
        <div class="fly-in offer-slider-i">


          <a class="offer-slider-img" onclick="getmobil('{{ $mobil->name }}','{{ $mobil->id }}')" >
            <img alt="" src="{{ $mobil->image }}" />

            <input type="hidden" name="tgl" value=<?php echo "$tanggal" ?> >
            <span name="submit" id="submit" type="submit" value="Submit" class="offer-slider-overlay">

              <span class="offer-slider-btn">Pilih</span>

            </span>
          </a>

          <div class="offer-slider-txt">
            <div class="offer-slider-link"><a href="#"><font size="+0.3">{{ $mobil->name }}</font></a></div>
            <div class="offer-slider-l">
              <div class="offer-slider-location">Kapasitas {{ $mobil->capacity }} orang</div>
              <nav class="stars">
                <ul>
                  <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                  <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                  <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                  <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                  <li><a href="#"><img alt="" src="img/star-a.png" /></a></li>
                </ul>
                <div class="clear"></div>
              </nav>
            </div>

            <div class="clear"></div>
          </div>
        </div>

      <?php endforeach  ?>


      <!-- \\ -->
    </div>
  <input type="hidden" name="pilihanrute" id="ruteterpilihid" value="">
  <input type="hidden" name="pilihanmobil" id="mobilterpilihid" value="" >
  <input type="hidden" name="userid" id="mobilterpilihid" value="{{ Auth::user()->id }}" >

    <div class='clear'></div>

    <button style="width:100%" type="submit" class="book-btn">

      <span  class="book-btn-r" >book now</span>
      <div class="clear"></div>


  </button>
</form>

    </div>







	</div>
</div>
<script type="text/javascript">


function getrute(rute,id) {
  document.getElementById("ruteterpilih").innerHTML = rute;
    document.getElementById("ruteterpilihid").value = id;
  //document.getElementById("ruteterpilihid").value = id;
}
function getmobil(mobil,id) {
  document.getElementById("mobilterpilih").innerHTML = mobil;
  document.getElementById("mobilterpilihid").value = id;
  //document.getElementById("mobilterpilihid").value = id;
}

$(document).ready(function(){
   'use strict';
      var $container = $('.portfolio-three-colls');
      $container.isotope({
          itemSelector: '.portfolio-i',
          columnWidth: 520,
          rowHeight: 220
      });
      $(".fancybox").fancybox({
        helpers:  {
          overlay : {
          locked : false
        },
        title : { type : 'over' }
        },
        beforeShow : function() {
          this.title = (this.title ? '' + this.title + '' : '')  + (this.index + 1) + ' of ' + this.group.length;
        }
      });

    $('.portfolio-filters li a').on('click', function(){
      var $sort = $(this).data('sort');
      if ($sort=='all') {
        var $sort = '*';
        $container.isotope({ filter: $sort });
      } else {
        $container.isotope({ filter: '.'+$sort });
      }
      $('.portfolio-filters li').removeClass('active');
      $(this).closest('li').addClass('active');
      return false;
    });
});

</script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jqeury.appear.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bxSlider.js"></script>
<script src="js/custom.select.js"></script>
<script src="js/isotope.js"></script>
<script src="source/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/twitterfeed.js"></script>
<script src="js/script.js"></script>
<!-- /main-cont -->

@extends('footer')

<!-- // scripts // -->


<!-- \\ scripts \\ -->

</body>
</html>
