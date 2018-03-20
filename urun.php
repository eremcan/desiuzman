<? 
include('ayar.php');
  $katid= $_GET['sef'];
 	$kat=mysql_fetch_array(mysql_query("select * from urunler where seo='$katid' limit 1"));
 	$ust=mysql_fetch_array(mysql_query("select * from kategori where id='$kat[cat]' limit 1"));
 	$upust=mysql_fetch_array(mysql_query("select * from kategori where id='$kat[anacat]' limit 1"));

?><head>
<title><? echo $kat[baslik]; ?>  - <?=$sorgu[title]?></title>
 <meta charset="UTF-8">
<meta name="keywords" content="<? echo $kat[baslik]; ?>, desi alarm, desi uzman, alarm sistem, desi,ücretsiz keşif alarm, kamera sistemleri, alarm güvenlik ">
<meta name="description" content="<? echo $kat[baslik]; ?> , güvenlik sistemleri , yangın algılayıcı , kamera sistemleri gibi ev ve iş yeri için çözümler">

 <? include('header.php')?>


<div id="kurumsalust">	
		
		
	</div>

<div id="container">
<div id="urundetaycont">
<div id="urundetaysol">
<img src="<? echo $kat[resim]; ?>"/>
</div>

<div id="urundetaysag">
<div id="urundtsust">
<div id="urundtsustsol"><img src="images/urundetay.png"/>
</div>
<div id="urundtsustsag">
<div id="urundetaykategori"><? echo '<a href="kategori/'.$upust[sef].'">'.$upust[baslik].'</a>'; ?> > <? echo '<a href="kategori/'.$upust[sef].'/'.$ust[sef].'">'.$ust[baslik].'</a>'; ?></div>

<div id="urundetaybaslik"><h1><? echo $kat[baslik]; ?></h1></div>

<div id="urundetayresim"><a href="http://www.desiuzman.com/kurumsal/iletisim"><img style="    margin-right: 7px;"src="images/teklifal.png"/> </div><a/>



</div>
</div>



<div id="urundtsalt">
<div id="urundtsaltsol"><img src="images/urunaciklama.png"/>
</div>
<div id="urundtsaltsag">
<div id="urundetayaciklama">
<? echo $kat[aciklama]; ?>	
</div>
</div>

</div>

</div>


</div></div>



    <? include('footer.php')?>

 </body>