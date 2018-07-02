<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vincartours | Contacts </title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta charset="utf-8" /><link rel="icon" href="favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/jquery.formstyler.css">
  <link rel="stylesheet" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaiG5NxknsuZ2CLrV8b0MFV_267bHflkY  &callback=initMap"
  type="text/javascript"></script>
	<script type="text/javascript">
		google.maps.event.addDomListener(window, 'load', init);

		function init() {
			var mylat = '-7.2857191';
			var mylong ='112.6314497';
			var mapOptions = {
				zoom: 13,
				disableDefaultUI: true,
				zoomControl: true,
				zoomControlOptions: {
				  style: google.maps.ZoomControlStyle.LARGE,
				  position: google.maps.ControlPosition.LEFT_CENTER
				},
				scrollwheel: false,
				center: new google.maps.LatLng(mylat, mylong), // New York
		  };
			var mapElement = document.getElementById('map');
			var map = new google.maps.Map(mapElement, mapOptions);
			google.maps.event.addDomListener(window, 'resize', init);

		google.maps.event.addListenerOnce(map, 'idle', function(){
		setTimeout( function() {
			var place = new google.maps.LatLng(-7.2857191, 112.6314497);
			var image = new google.maps.MarkerImage('img/map.png',
					new google.maps.Size(19, 29),
					new google.maps.Point(0,0),
					new google.maps.Point(0, 32));
			var marker = new google.maps.Marker({
				map:map,
				icon: image,
				draggable:false,
				animation: google.maps.Animation.DROP,
				position: place
			});
			$('.map-contacts').each(function(index){
				$(this).delay(141*index).fadeIn();
			});
		} , 500);
		});
		}
    </script>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.form.js"></script>
</head>
<body>
<!-- // authorize // -->

@extends('header')



<!-- main-cont -->
<div class="main-cont">
 	<div class="contacts-map">
 		<div id="map"></div>
 	</div>

 	<div class="contacts-page-holder">
 	<div class="contacts-page">
		<header class="page-lbl">
			<div class="offer-slider-lbl">hubungi kami</div>
			<p></p>
		</header>

		<div class="contacts-colls">
			<div class="contacts-colls-l">
				<div class="contact-colls-lbl">OUR OFFICE</div>
				<div class="contacts-colls-txt">
					<p>Address: Ciputra, Surabaya </p>
					<p>Telephones: +62823 2928 5381</p>
					<p>E-mail: admin@vincar-tours.com</p>
					<p>Skype: sparrow</p>
					<div class="side-social">

        				<a class="side-social-facebook" href="https://www.facebook.com/vctsurabaya/" target="_blank"></a>


        				<a class="side-social-instagram"href="https://www.instagram.com/vintagecartour_surabaya/"  target="_blank"></a>



      				</div>
				</div>
			</div>
			<div class="contacts-colls-r">
  				<div class="contacts-colls-rb">
					<div class="contact-colls-lbl">Contact Us</div>
					<div class="booking-form">
						<form  action="/sendmail" method="post">
              {{ csrf_field() }}
							<div class="booking-form-i">
								<label>First Name:</label>
								<div class="input"><input type="text" name="FirstName" value="" /></div>
							</div>

							<div class="booking-form-i">
								<label>Email Adress:</label>
								<div class="input"><input type="text" name="Email" value="" /></div>
							</div>

							<div class="booking-form-i textarea">
								<label>Message:</label>
								<div class="textarea-wrapper">
									<textarea name="Message"></textarea>
								</div>
							</div>
							<div class="clear"></div>
							<button class="contacts-send">Send message</button>
						</form>

					</div>
  				</div>
  			<div class="clear"></div>
			</div>
			</div>
		<div class="clear"></div>
 	</div>
 	</div>

</div>
<!-- /main-cont -->


	@extends('footer')

<!-- // scripts // -->
  <script src="js/jqeury.appear.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bxSlider.js"></script>
  <script src="js/jquery.formstyler.js"></script>
  <script src="js/custom.select.js"></script>
  <script type="text/javascript" src="js/twitterfeed.js"></script>
  <script src="js/script.js"></script>
  <script>
  	$(document).ready(function(){
		'use strict';
		(function($) {
			$(function() {
				$('.checkbox input').styler({
					selectSearch: true
				});
			});
		})(jQuery);
  	});
  </script>
<!-- \\ scripts \\ -->

</body>
</html>
