<?php
session_start();
include ("ayar.php");

$kullanici = $_POST["kullanici"];
	$parola2 = stripslashes($_POST['parola']); 
$parola = md5($parola2);

$kontrol = mysql_num_rows(mysql_query(" SELECT * FROM ayarlar WHERE  kullanici='".$kullanici."' and parola='".$parola."'  "));
$kontrol2 = mysql_fetch_array(mysql_query(" SELECT * FROM ayarlar WHERE  kullanici='".$kullanici."' and parola='".$parola."'   "));

if($kontrol > 0){
	$_SESSION["durum"]="1";
	$_SESSION["isim"]=$kullanici;
		
	header("Location:../index.php");
	}else{
	header("Location:index.php?sonuc=hata");
	
	};


?>