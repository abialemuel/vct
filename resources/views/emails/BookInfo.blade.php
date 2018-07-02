<!DOCTYPE html>
<html>
<head>
    <title>Booking Information</title>
</head>

<body>
<img src="mail.jpg" alt="">
<h2>Terimakasih telah melakukan pemesanan</h2>
<h3>Detail Order</h3>
Tanggal    :  {{$book->tgl_book}}
<br/>
Rute       :  {{$book->rute->pname}}
<br/>
Mobil      :  {{$book->mobil->name}}
<br/>

</body>

</html>
