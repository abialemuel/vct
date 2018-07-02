
    <?php
    include_once 'php/allsource.html';
    require_once 'php/connect.php';
    ?>
    <!-- \\ scripts \\ -->


  			<!-- // -->
        <?php

        $sql = "SELECT p.pname,p.pimage,d.img_2,d.img_3,d.penjelasan FROM detail_place d, place p  where p.id_place=d.id_place and p.id_place=$iditem";

        $data = query($sql);

        while (($row=mysqli_fetch_row($data))!='')
        {
          echo  "<div class='main-cont'>

          	<div class='inner-page'>
          		<div class='inner-breadcrumbs'>
          			<div class='content-wrapper'>
          				<div class='page-title'>$row[0]</div>
          				<div class='breadcrumbs'>
                  			<a href='#'>Home</a> / <a href='#'>Rute</a> / <span>$row[0]</span>
                			</div>
                			<div class='clear'></div>
                		</div>
          		</div>

          		<div class='content-wrapper'>
          			<div class='p-item-page'>
          				<div class='p-item-page-l'>
           	 				<div class='p-item-page-lb'>
           	 				<div class='p-item-padding'>
              					<div id='p-item-slider'>
              						<div class='p-item-slide'><img alt='' src='../$row[1]' /></div>
              						<div class='p-item-slide'><img alt='' src='../$row[2]' /></div>
              						<div class='p-item-slide'><img alt='' src='../$row[3]' /></div>
              					</div>
            					</div>
            					</div>
            				<br class='clear' />
          				</div>
          			</div>
          			<div class='p-item-page-r'>
          				<h3>Tour details</h3>
          				<div class='p-item-details'>
          					<div class='p-item-details-i'>
          						<div class='p-item-details-il'>Rute :</div>
          						<div class='p-item-details-ir'>$row[0]</div>
          						<div class='clear'></div>
          					</div>
          					<div class='p-item-details-i'>
          						<div class='p-item-details-il'>Waktu:</div>
          						<div class='p-item-details-ir'>11 March 2015</div>
          						<div class='clear'></div>
          					</div>

          				</div>
          				<h3>Penjelasan Rute</h3>
          				<div class='p-item-more'>$row[4]</div>
          				<div class='p-item-social'>
          					<a class='team-fb' href='#'></a>
          					<a class='team-tw' href='#'></a>
          					<a class='team-gp' href='#'></a>
          					<a class='team-inst' href='#'></a>
          					<a class='team-pint' href='#'></a>
          				</div>

          			</div>
          			<div class='clear'></div>

          			<div class='portfolio-nav no-margin'>
          				<div class='portfolio-nav-l'><a href='#'></a></div>
          				<div class='portfolio-nav-c'><a href='#'></a></div>
          				<div class='portfolio-nav-r'><a href='#'></a></div>
          			</div>

          		</div>
          		</div>
          	</div>";

      }
      ?>
  			<!-- \\ -->
