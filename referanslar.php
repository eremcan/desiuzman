<? 
include('ayar.php');
?>
<head>
<title>Referanslar  - <?=$sorgu[title]?></title>
 <meta charset="UTF-8">
<meta name="keywords" content="desi alarm,desi referanslar, referanslar, alarm sistem, desi,ücretsiz keşif alarm, kamera sistemleri, alarm güvenlik ">
<meta name="description" content="Desi alarm sistemi ve montajı , güvenlik sistemleri , yangın algılayıcı , kamera sistemleri referanslarımız">

 <? include('header.php')?>

<link href="css/lightbox.css" rel="stylesheet">
<script src="js/lightbox.js"></script>
<div id="kurumsalust">	
		
		
	</div>

<div id="container">
<div id="urunlercont">
<div id="urunlerbaslik"><h1>REFERANSLAR</h1></div>


<?

		$uzmanlar=mysql_query("select * from referanslar order by id DESC ");
  	while($uzmandetay=mysql_fetch_array($uzmanlar)){
	echo '<div id="referanstab">
<div id="reftabimage">
     <a href="'.$uzmandetay[resim].'" data-lightbox="roadtrip"> <img src="'.$uzmandetay[resim].'">
	  </a>
	  </div>
	  <div id="urunlistbaslik"><h2>'.$uzmandetay[baslik].'</h2></div>
	   
    </div>';
	}
?>



	

</div>

</div>



   <? include('footer.php')?>

 </body>