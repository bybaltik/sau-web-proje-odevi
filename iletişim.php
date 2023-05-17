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
	  <link rel='stylesheet' href='formdogrulama.css' type='text/css' />
		<script src="formdogrulama.js"></script>
  
</head>

  <?php 
 
if(isset($_POST['submit'])){
    $v1=$_POST ['kadi'];
    $boşluk="\n";
    echo "kullanıcı adınız:.". $v1; 
    echo"<br> ";
echo $boşluk;
$v2=$_POST ['sifre'];
echo"şifreniz: ". $v2;
echo"<br> ";
echo $boşluk;
 $v3=$_POST ['isim'];
echo "isminiz: ". $v3;
echo"<br> ";
echo $boşluk;
$v4=$_POST ['adres'];
 echo "adresiniz: ".$v4;
 echo"<br> ";
echo $boşluk;
$v5=$_POST ['ulke'];
 echo "ulkeniz: ". $v5;
 echo"<br> ";
echo $boşluk;
$v6=$_POST ['pk'];
echo"pk :". $v6;
echo"<br> ";
 echo $boşluk;
$v7=$_POST ['email'];
 echo"emailiniz :". $v7;
 echo"<br> ";
echo $boşluk;
$v8=$_POST ['ecinsiyet'];
echo "cinsiyetiniz: ".$v8;
echo"<br> ";
echo $boşluk;
$v9=$_POST ['tr'];
echo"dil:". $v9;
echo"<br> ";
echo $boşluk;
$v10=$_POST ['diger'];
echo"yazmak istedikleriniz:". $v10;
echo"<br> ";
echo $boşluk;

}



?>






      
