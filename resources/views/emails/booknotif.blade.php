<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<img src="mail.jpg" alt="">
<h2>Ada pemesanan baru atas nama : <br/> {{$book->user->name}} </h2>
<h3>Detail Order</h3>
Tanggal    :  {{$book->tgl_book}}
<br/>
Rute       :  {{$book->rute->pname}}
<br/>
Mobil      :  {{$book->mobil->name}}
<br/>
<h3>Keterangan Detail User</h3>
nama       :  {{$book->user->name}}
<br/>
Email user :  {{$book->user->email}}
<br/>
No HP      :  {{$book->user->tlp}}
</body>

</html>
