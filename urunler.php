<? 
include('ayar.php');
  $katid= $_GET['sef'];
 	$kat=mysql_fetch_array(mysql_query("select * from kategori where sef='$katid' limit 1"));

?><head>
<title><? if(empty($katid)){echo 'Tüm Ürünler';}else {echo $kat[baslik]; }?>  - <?=$sorgu[title]?></title>
 <meta charset="UTF-8">
<meta name="keywords" content="<? if(empty($katid)){echo 'Desi, Neutron';}else {echo $kat[baslik]; }?>, desi alarm, desi uzman, alarm sistem, desi,ücretsiz keşif alarm, kamera sistemleri, alarm güvenlik ">
<meta name="description" content="<? if(empty($katid)){echo 'Desi alarm sistemi ve montajı';}else {echo $kat[baslik]; }?> , güvenlik sistemleri , yangın algılayıcı , kamera sistemleri gibi ev ve iş yeri için çözümler">

 <? include('header.php')?>


<div id="kurumsalust">	
		
		
	</div>

<div id="container">
<div id="urunlersol">
<div class="title-wrapper">
                                    <h1 class="search-results-title" data-id="3008012">
                                     <? if(empty($katid)){
$urunsayisi =	mysql_num_rows(mysql_query("select * from urunler"));echo 'Tüm Ürünler   </h1>
      

<div id="urunlersolsayi">'.$urunsayisi.' ürün</div>';}
else {$urunsayisi =	mysql_num_rows(mysql_query("select * from urunler where cat='$kat[id]' or anacat='$kat[id]'"));
echo $kat[baslik].'   </h1>
      

<div id="urunlersolsayi">'.$urunsayisi.' ürün</div>'; }?> 
                                 

                                </div>

<div id="altkatcont">

<div id="altkatcontbasl"><? if(empty($katid)){echo 'Tüm Kategoriler';}else {echo 'Alt Kategoriler'; }?> </div>								

<div id="altkatfoot">
<ul>
<? if(empty($katid)){ 
$uzmanlar=mysql_query("select * from kategori where cat='0' order by baslik ASC ");
  	while($uzmandetay=mysql_fetch_array($uzmanlar)){
		echo '<a href="kategori/'.$uzmandetay[sef].'"><li><h2>'.$uzmandetay[baslik].'</h2></li></a>';
	}
}else 
{ 
$uzmanlar=mysql_query("select * from kategori where cat='$kat[id]' order by baslik ASC ");
  	while($uzmandetay=mysql_fetch_array($uzmanlar)){
		echo '<a href="kategori/'.$kat[sef].'/'.$uzmandetay[sef].'"><h2><li>'.$uzmandetay[baslik].'</h2></li></a>';
	}
	
 } ?>

</ul></div>								

<? if(!empty($_GET[sef])){
	if(!empty($kat[yazi])){ echo '<div id="altkatcontyazi">'.$kat[yazi].'</div>
';}
	?>

<div class="title-footer">
<a href="urun"><img src="images/geridon.png" width="20px"/> Tüm Ürünler</a>
</div>
<? } ?>
</div>								
								
			
									


</div>


<div id="urunlercont">
<?
if(!empty($katid)){$ekleme =" where cat='$kat[id]' or anacat='$kat[id]'";  }
$urunler=mysql_query("select * from urunler  $ekleme order by id DESC ");
  	while($urunx=mysql_fetch_array($urunler)){
		echo '
		<a href="urunler/'.$urunx[seo].'"><div id="urunlertab">
   <div id="uruntabimg">   <img src="'.$urunx[resim].'">
	  </div>
	  <div id="urunlistbaslik"><h3>'.$urunx[baslik].'</h3></div>
	 
    </div></a>
	';
	}?>

	

</div>

</div>



    <? include('footer.php')?>

 </body>