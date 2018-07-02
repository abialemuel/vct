
    <?php
    include_once 'php/allsource.html';
    require_once 'php/connect.php';
    ?>
    <!-- \\ scripts \\ -->

    <div class='pop-destinations'>
  		<header class='fly-in page-lbl'>
  			<b>Kami menawarkan rute terbaik</b>
  			<p>Nikmati tour bersama teman dan keluarga anda dengan menggunakan mobil vintage</p>
  		</header>
  		<div class='mp-popular-row popular-flat'>
  			<!-- // -->



        <?php



        $sql = 'SELECT p.pimage,p.pname,l.lname,p.pprice,p.duration,p.id_place FROM location l, place p  where p.id_loc=l.id_loc';

        $data = query($sql);

        while (($row=mysqli_fetch_row($data))!='')
        {
          echo  "<div class='fly-in offer-slider-i'>
            <a class='offer-slider-img'  href=rute/$row[5]>
              <img alt='' src='$row[0]' />
              <span class='offer-slider-overlay'>
                <span class='offer-slider-btn'>view details</span>
              </span>
            </a>
            <div class='offer-slider-txt'>
              <div class='offer-slider-link'><a href='#'><font size='+0.3'>$row[1]</font></a></div>
              <div class='offer-slider-l'>
                <div class='offer-slider-location'>#keterangan</div>
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
              <div class='offer-slider-r align-right'>
                <b>Rp $row[3]k</b>
                <span><font size='+0.2'>± $row[4] menit</font></span>
              </div>
              <div class='clear'></div>
            </div>
          </div>";

      }
      ?>
  			<!-- \\ -->
  		</div>
  		<div class='clear'></div>
    </div>
