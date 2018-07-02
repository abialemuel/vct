<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<img src="mail.jpg" alt="">
<h2>Selamat Datang di Vincartours, {{$user['name']}}</h2>
<br/>
Email anda adalah {{$user['email']}} , Klik di bawah ini untuk verifikasi email
<br/>
<a href="{{url('user/verify', $user->verifyUser->token)}}">Verifikasi Akun</a>
</body>

</html>
