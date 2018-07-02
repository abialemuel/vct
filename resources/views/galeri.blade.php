<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vincartours | Galeri</title>
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
<body class="inner-body">
@extends('header');
<!-- // authorize // -->



<!-- main-cont -->
<div class="main-cont">

	<div class="inner-page">
		<div class="inner-breadcrumbs">
			<div class="content-wrapper">
				<div class="page-title">Galeri</div>
				<div class="breadcrumbs">
        			<a href="#">Home</a> / <span>Galeri</span>
      			</div>
      			<div class="clear"></div>
      		</div>
		</div>

		<div class="content-wrapper">
		<div class="portfolio-filters">
			<nav>
				<ul>
					<li class="active"><a data-sort="all" href="#">All</a></li>
					<li><a data-sort="Rute" href="#">Rute</a></li>
					<li><a data-sort="Mobil" href="#">Mobil</a></li>
					<li><a data-sort="Lain-lain" href="#">Lain-lain</a></li>
				</ul>
			</nav>
		</div>
		</div>
    @include('portfolio');

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
  <script src="js/isotope.js"></script>
  <script src="source/jquery.fancybox.js"></script>
  <script type="text/javascript" src="js/twitterfeed.js"></script>
  <script src="js/script.js"></script>
  <script>
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
<!-- \\ scripts \\ -->

</body>
</html>
