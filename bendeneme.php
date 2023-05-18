<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SAKARYA ÜNİVERSİTESİ PROJE</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="tasarim.css">
	  <link rel='stylesheet' href='logindogrulama.css' type='text/css' />
		<script src="logindogrulama.js"></script>
  
</head>


<?php
$kadi ="b211210091@sakarya.edu.tr";
$şifre="b211210091";

if (($_POST['email']==$kadi) and ($_POST['sifre']==$şifre) ){
    echo "HOŞGELDİN B211210091 SENİ ANA SAYFAYA YÖNLENDİRİYORUM.";

    header("refresh:7;anasayfa.html");
}
else {


    (header('location: yanlış.php'));
}



?>