
<?php

require_once 'php/connect.php';
?>

<div class='portfolio-holder portfolio-holder-three'>
<div class='portfolio-three-colls'>
  <!-- // -->
  <?php



  $sql = 'select nama,kategori,img from galeri';

  $data = query($sql);

  while (($row=mysqli_fetch_row($data))!='')
  {
   echo "<div class='portfolio-i $row[1]'>
    <div class='portfolio-i-img'>
      <div class='portfolio-i-over'>
        <div class='portfolio-i-over-a'>
          <div class='portfolio-i-over-b'>
            <a href='$row[2]' data-fancybox-group='gallery' class='fancybox portfolio-zoom'></a>
            <a href='#' class='portfolio-more'></a>
          </div>
        </div>
      </div>
      <img alt='' src='$row[2]'>
    </div>
    <div class='portfolio-i-text'>
      <b>$row[0]</b>
      <span>$row[1]</span>
    </div>
  </div>";
  }
  ?>
</div>

</div>
