<? 
include('ayar.php');
  $katid= $_GET['sef'];
 	$kat=mysql_fetch_array(mysql_query("select * from kategori where sef='$katid' limit 1"));
	
?><head>
<title><? if(empty($katid)){echo 'Tüm Ürünler';}else {echo $kat[baslik]; }?>  - <?=$sorgu[title]?></title>
 <meta charset="UTF-8">
<meta name="keywords" content="desi alarm, desi uzman, alarm sistem, desi,ücretsiz keşif alarm, kamera sistemleri, alarm güvenlik ">
<meta name="description" content="Desi alarm sistemi ve montajı , güvenlik sistemleri , yangın algılayıcı , kamera sistemleri gibi ev ve iş yeri için çözümler">

 <? include('header.php')?>


<div id="kurumsalust">	
		
		
	</div>

<div id="container">
<div id="urunlersol">
<div class="title-wrapper">
                                    <h1 class="search-results-title" data-id="3008012">
                                     <? if(empty($katid)){echo 'Tüm Ürünler';}else {echo $kat[baslik]; }?> 
                                    </h1>
      

<div id="urunlersolsayi">205 ürün</div>

                                </div>

<div id="altkatcont">

<div id="altkatcontbasl"><? if(empty($katid)){echo 'Tüm Kategoriler';}else {echo 'Alt Kategoriler'; }?> </div>								

<div id="altkatfoot">
<ul>
<?
$uzmanlar=mysql_query("select * from kategori order by baslik ASC ");
  	while($uzmandetay=mysql_fetch_array($uzmanlar)){
		echo '<li>'.$uzmandetay[baslik].' (203)</li>';
	}?>

</ul></div>								


</div>								
								
			
									


</div>


<div id="urunlercont">
<?
$urunler=mysql_query("select * from urunler  order by id DESC ");
  	while($urunx=mysql_fetch_array($urunler)){
		echo '
		<div id="urunlertab">
   <div id="uruntabimg">   <img src="'.$urunx[resim].'">
	  </div>
	  <div id="urunlistbaslik">'.$urunx[baslik].'</div>
	   <div id="urunlistfiyat">'.$urunx[fiyat].' <font size="-1">TL</font></div>
    </div>
	';
	}?>

	

</div>

</div>


<div id = "middlealt">

<div id="container">

<div id="middledownleft" style="width:100%;"><h2><?=$kat['baslik']?></h2>

<?=$kat['yazi']?>
</div>

 </div> </div>
    <? include('footer.php')?>

 </body>