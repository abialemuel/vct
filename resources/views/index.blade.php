<!DOCTYPE html>
<html lang="en">
<head>
	<title>
	Vincartours | Tour Agency, Tour dengan mobil vintage
	</title>
	<meta name="description"
	content="Tour Agency, Nikmati perjalanan anda dengan menggunakan mobil vintage. Daftar Gratis! Vincar-tours.com" />
	<link href="img/" rel="icon"/>
	<!-- // scripts // -->

<?php
	require "php/connect.php";
	include_once 'php/allsource.html';
?>
</head>
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
<body>
<!-- // authorize // -->

@extends('header')


<!-- main-cont -->
<div class="main-cont">
	<div class="mp-slider search-only">
		<!-- // slider // -->
		<div class="mp-slider-row slim-slider">
			<div class="swiper-container">
				<a href="#" class="arrow-left"></a>
				<a href="#" class="arrow-right"></a>
				<div class="swiper-pagination"></div>
  				<div class="swiper-wrapper">
      				<div class="swiper-slide">
						<div class="slide-section" style="background:url(img/vn-01.jpg) center top no-repeat;">
							<div class="mp-slider-lbl">Perjalanan terbaik</div>
							<div class="mp-slider-lbl-a">Nikmati perjalanan bersama dengan kami!</div>
							<div class="mp-slider-btn"><a href="#" class="btn-a">Learn more</a></div>
						</div>
      				</div>
      				<div class="swiper-slide">
						<div class="slide-section slide-b" style="background:url(img/vn-03.jpg) center top no-repeat;">
							<div class="mp-slider-lbl">Rute wisata yang memuaskan</div>
							<div class="mp-slider-lbl-a">Buat perjalananmu menjadi lebih bersensasi dengan menggunakan mobil vintage!</div>
							<div class="mp-slider-btn"><a href="#" class="btn-a">Learn more</a></div>
						</div>
      				</div>
      				<div class="swiper-slide">
						<div class="slide-section slide-b" style="background:url(img/vn-02.jpeg) center top no-repeat;">
							<div class="mp-slider-lbl">Rencanakan perjalanan anda sekarang </div>
							<div class="mp-slider-lbl-a">Hubungi kami dan kami siap membantu perjalanan anda</div>
							<div class="mp-slider-btn"><a href="#" class="btn-a">Learn more</a></div>
						</div>
      				</div>
  				</div>
			</div>
		</div>
		<!-- \\ slider \\ -->
	</div>


	</div	>
	<div class="wrapper-a-holder full-width-search">
	<div class="wrapper-a">

		<!-- // search // -->
		<div class="page-search full-width-search search-type-b">
		  <div class="search-type-padding">
			<nav class="page-search-tabs">
	<div class="search-tab">Tours</div>

	<div class="clear"></div>
</nav>
<div class="page-search-content">

	<!-- // tab content hotels // -->
	<div class="search-tab-content">
		<div class="page-search-p">
		<!-- // -->
			<div class="search-large-i">
			<!-- // -->

			<!-- // -->
			</div>
		<!-- \\ -->
		<!-- // -->
			<div class="search-large-i">
			<!-- // -->
			<div class="srch-tab-line no-margin-bottom">
				<form class="" id="form1"  action="pesan" method="post">
					 {{ csrf_field() }}
				<div class="srch-tab-left">
					<label>Tanggal</label>
					<div class="input-a"><input type="text"  id="tgl" name="tgl" class="date-inpt"  required> <span class="date-icon"></span></div>
				</div>
				<div class="srch-tab-right">
					<div class="srch-tab-3c">

					<div class="select-wrapper">

					</div>
				</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- \\ -->
			</div>
		<!-- \\ -->
		<!-- // -->

		<!-- \\ -->
		<div class="clear"></div>

		<!-- // advanced // -->

		<!-- \\ advanced \\ -->
		</div>


		<footer class="search-footer">
			@if (empty(Auth::user()->name))
					<a id="submit" href="login" class="srch-btn">Pilih</a>
				 @else
					 <button name="submit" id="submit" type="submit" value="Submit" class="srch-btn">Pilih</button>
				 @endif

			<div class="clear"></div>
		</footer>


		</form>
	</div>
</div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
	<div class="travel_experience">
		<div class="wrapper-padding">
			<header class="fly-in page-lbl">
				<b class="offer-slider-lbl">Bagaimana memulainya?</b>


				<p></p>
			</header>
			<div class="t-experience-row fly-in">
				<!-- // -->
				<div class="t-experience-i">
					<div class="t-experience-a"><img alt="" src="img/st-01.png" /></div>
					<div class="t-experience-b"><font size='+1'>1. Pilih tanggal</font></div>
					<div class="t-experience-c">Tanggal keberangkatan tersedia hanya pada hari Sabtu dan Minggu</div>
				</div>
				<!-- \\ -->
				<!-- // -->
				<div class="t-experience-i">
					<div class="t-experience-a"><img alt="" src="img/st-02.jpg" /></div>
					<div class="t-experience-b"><font size='+1'>2. Pilih rute perjalanan</font></div>
					<div class="t-experience-c">Terdapat 3 rute utama yang dapat dipilih. Sabtu sore, Minggu pagi dan Minggu sore </div>
				</div>
				<!-- \\ -->
				<!-- // -->
				<div class="t-experience-i">
					<div class="t-experience-a"><img alt="" src="img/st-03.png" /></div>
					<div class="t-experience-b"><font size='+1'>3. Pilih mobil vintage</font></div>
					<div class="t-experience-c">Kami menyediakan berbagai mobil vintage. Tentukan pilihan anda sendiri</div>
				</div>
				<!-- \\ -->
			</div>
		</div>
	</div>


	@include('gridphoto')




<div class='clear'><br><br><br></div>
	<div class="solutions">
		<div class="content-wrapper">
		<header class="page-lbl fly-in">
			<div class="offer-slider-lbl">Solusi untuk perjalanan anda</div>
			<p> </p>

		</header>
		<div class="solutions-row fly-in">
			<!-- // -->
				<div class="solutions-i">
					<div class="solution-icon-a"></div>
					<div class="solutions-over">
						<div class="solutions-over-a">
							<div class="solutions-over-b">
								<div class="solutions-over-c">
									<i class="solution-icon"></i>
									<div class="solution-lbl">Rencanakan perjalanan anda</div>
								</div>
								<div class="solutions-over-d">
									<i class="solution-icon"></i>
									<div class="solution-txt">Merencanakan tujuan perjalanan adalah hal yang baik saat ingin berpergian ke suatu tempat.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="solutions-img">
						<img alt="" src="img/sl-01.jpg">
					</div>
				</div>
			<!-- \\ -->
			<!-- // -->
				<div class="solutions-i">
					<div class="solution-icon-a"></div>
					<div class="solutions-over">
						<div class="solutions-over-a">
							<div class="solutions-over-b">
								<div class="solutions-over-c">
									<i class="solution-icon"></i>
									<div class="solution-lbl">Pemesanan online</div>
								</div>
								<div class="solutions-over-d">
									<i class="solution-icon"></i>
									<div class="solution-txt">Pemesanan online memudahkan anda dalam melakukan pemesanan</div>
								</div>
							</div>
						</div>
					</div>
					<div class="solutions-img">
						<img alt="" src="img/sl-02.jpg">
					</div>
				</div>
			<!-- \\ -->
			<!-- // -->
				<div class="solutions-i">
					<div class="solution-icon-a"></div>
					<div class="solutions-over">
						<div class="solutions-over-a">
							<div class="solutions-over-b">
								<div class="solutions-over-c">
									<i class="solution-icon"></i>
									<div class="solution-lbl">Kunjungi obyek wisata terbaik</div>
								</div>
								<div class="solutions-over-d">
									<i class="solution-icon"></i>
									<div class="solution-txt">Kami memberikan rute terbaik untuk memuaskan perjalanan anda</div>
								</div>
							</div>
						</div>
					</div>
					<div class="solutions-img">
						<img alt="" src="img/rsb-01.jpg">
					</div>
				</div>
			<!-- \\ -->
		</div>
		<div class="clear"></div>
		</div>
	</div>

</div>
<!-- /main-cont -->



@extends('footer')

</body>

</html>
