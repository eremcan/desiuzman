<? 
include('ayar.php');
?>
<head>
<title>Servis Noktalarımız  - <?=$sorgu[title]?></title>
 <meta charset="UTF-8">
<meta name="keywords" content="desi alarm, desi uzman, alarm sistem, desi,ücretsiz keşif alarm, kamera sistemleri, alarm güvenlik ">
<meta name="description" content="Desi alarm sistemi ve montajı , güvenlik sistemleri , yangın algılayıcı , kamera sistemleri gibi ev ve iş yeri için çözümler">

 <? include('header.php')?>

<link href="css/lightbox.css" rel="stylesheet">
<script src="js/lightbox.js"></script>
<div id="kurumsalust">	
		
		
	</div>

<div id="container">
<div id="urunlercont">
<div id="urunlerbaslik">Servis Noktalarımız</div>


<?

		$uzmanlar=mysql_query("select * from ilce  where il_id='34'order by ilce_adi ASC ");
  	while($uzmandetay=mysql_fetch_array($uzmanlar)){
	echo '<a href="servis/'.$uzmandetay[slug].'"><div id="bolgex">Desi Uzman '.$uzmandetay[ilce_adi].' </div></a>';
	}
?>



	

</div>

</div>



   <? include('footer.php')?>

 </body>