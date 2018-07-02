
    <?php
    include_once 'php/allsource.html';
    require_once 'php/connect.php';
    ?>
    <!-- \\ scripts \\ -->


    <div class='mp-pop'>
  		<div class='wrapper-padding-a'>
  			<div class='popular-slider'>
  				<header class='fly-in page-lbl'>
  					<b>Kami menawarkan rute terbaik</b>
  					<p>Tour dengan menggunakan mobil vintage<br />Dapatkan penawaran terbaik dari kami</p>
  				</header>
  				<div class='fly-in offer-slider-c' >
  					<div id='offers' class='owl-slider'>
  					<!-- // -->
            <?php

            $sql = 'SELECT p.pimage,p.pname,l.lname,p.pprice,p.duration FROM location l, place p  where p.id_loc=l.id_loc';

            $data = query($sql);

            while (($row=mysqli_fetch_row($data))!='')
            {
              echo  "<div class='offer-slider-i'>
            <a class='offer-slider-img' href='#'>
              <img alt='' src= '$row[0]' />
              <span class='offer-slider-overlay'>
                <span  class='offer-slider-btn'>view details</span>
              </span>
            </a>
              <div class='offer-slider-txt'>
              <div class='offer-slider-link'><a>$row[1]</a></div>
              <div class='offer-slider-l'>
              <div class='offer-slider-location'>location: $row[2]</div>
            <nav class='stars'>
              <ul>
              <li><a href='#'><img alt='' src='img/star-b.png' /></a></li>
              <li><a href='#'><img alt='' src='img/star-b.png' /></a></li>
              <li><a href='#'><img alt='' src='img/star-b.png' /></a></li>
              <li><a href='#'><img alt='' src='img/star-b.png' /></a></li>
              <li><a href='#'><img alt='' src='img/star-a.png' /></a></li>
              </ul>
              <div class='clear'></div>
            </nav>
            </div>
    <div class='offer-slider-r'>
      <b>$row[3]k</b>
      <span>± $row[4] menit</span>
    </div>
    <div class='offer-slider-devider'></div>
    <div class='clear'></div>
  </div>
</div>";

}
?>
  					<!-- \\ -->
  					</div>
  				</div>
  			</div>
