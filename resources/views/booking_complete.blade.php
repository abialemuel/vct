<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vincartours | Booking Complete </title>
  <meta name="description"
  content="Tour Agency, Nikmati perjalanan anda dengan menggunakan mobil vintage. Daftar Gratis! Vincar-tours.com" />
  <meta name="keywords" content="vintage car tours,vintage, car, surabaya, kenjeran, mobil" />
  <meta charset="utf-8" /><link rel="icon" href="favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/jquery.formstyler.css">
  <link rel="stylesheet" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body class="inner-body">
<!-- // authorize // -->
 @extends('header');


<!-- main-cont -->
<div class="main-cont">

	<div class="inner-page">
		<div class="inner-breadcrumbs">
			<div class="content-wrapper">
				<div class="page-title">Booking Complete</div>
				<div class="breadcrumbs">
        			<a href="#">Home</a> / <span>Booking Complete</span>
      			</div>
      			<div class="clear"></div>
      		</div>
		</div>

		<div class="about-content">
      <div class="content-wrapper">
        <h2>Pemesanan Berhasil</h2>

        <div class="comlete-alert">
          <div class="comlete-alert-a">
            <b>Pemesanan anda telah kami terima. Terimakasih.</b>
            <span>Tim kami akan menghubungi anda dalam waktu dekat</span>
          </div>
        </div>

        <div class="complete-info">
          <h2>Data Anda</h2>
          <div class="complete-info-table">

            <div class="complete-info-i">
              <div class="complete-info-l">Nama:</div>
              <div class="complete-info-r">{{Auth::user()->name}}</div>
              <div class="clear"></div>
            </div>

            <div class="complete-info-i">
              <div class="complete-info-l">E-Mail Adress:</div>
              <div class="complete-info-r">{{Auth::user()->email}}</div>
              <div class="clear"></div>
            </div>

            <div class="complete-info-i">
              <div class="complete-info-l">No HP:</div>
              <div class="complete-info-r">{{Auth::user()->tlp}}</div>
              <div class="clear"></div>
            </div>
          </div>

          <div class="complete-devider"></div>

          <div class="complete-txt">
            <h2>Informasi Pembayaran</h2>
            <p>Segera lakukan pembayaran melalui transfer ke rekening BCA
              <br>Nama : Abia Darma Lemuel
              <br>No   : 8620214940
            </p>

          </div>

          <div class="complete-devider"></div>

      

        </div>

      </div>
    </div>
  </div>

</div>



<!-- /main-cont -->

@extends('footer')

<!-- // scripts // -->
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/jqeury.appear.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bxSlider.js"></script>
  <script src="js/custom.select.js"></script>
  <script src="js/viewport.js"></script>
  <script src="js/numscroller-1.0.js"></script>
  <script type="text/javascript" src="js/twitterfeed.js"></script>
  <script src="js/script.js"></script>
<!-- \\ scripts \\ -->

</body>
</html>
