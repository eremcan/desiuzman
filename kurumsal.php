<? 
include('ayar.php');
  $kurumsal= $_GET['sef'];
 	$yazidetay=mysql_fetch_array(mysql_query("select * from kurumsal where sef='$kurumsal' limit 1"));
?>
<head>
<title><?=$yazidetay[baslik]?> - <?=$sorgu[title]?></title>
 <meta charset="UTF-8">
<meta name="keywords" content="desi alarm, desi uzman, alarm sistem, desi,ücretsiz keşif alarm, kamera sistemleri, alarm güvenlik ">
<meta name="description" content="Desi alarm sistemi ve montajı , güvenlik sistemleri , yangın algılayıcı , kamera sistemleri gibi ev ve iş yeri için çözümler">
 <? include('header.php')?>


<div id="kurumsalust">	
		
		
	</div>

<div id="container">
<div id="kurumsalsol">
<div id="kurumsalsolbaslik">Kurumsal</div>

<?

		$uzmanlar=mysql_query("select * from kurumsal order by id DESC ");
  	while($uzmandetay=mysql_fetch_array($uzmanlar)){
	echo '<a href="kurumsal/'.$uzmandetay[sef].'"><div id="kurumsalsolli">'.$uzmandetay[baslik].'</div></a>';
	}
?>
</div>
<div id="kurumsalsag">
<h1><?=$yazidetay[baslik]?></h1>
<?=$yazidetay[icerik]?>

</div>
</div>




  <? include('footer.php')?>

 </body>