<? 
include('ayar.php');
  $katid= $_GET['sef'];
  $ustsef= $_GET['ustsef'];
 	$kat=mysql_fetch_array(mysql_query("select * from kategori where sef='$katid' limit 1"));
 	$ustkat=mysql_fetch_array(mysql_query("select * from kategori where sef='$ustsef' limit 1"));

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
                                     <? 
	 $urunsayisi =	mysql_num_rows(mysql_query("select * from urunler where cat='$kat[id]' or anacat='$kat[id]'"));
echo $kat[baslik].'   </h1>
      

<div id="urunlersolsayi">'.$urunsayisi.' ürün</div>'; ?> 
                                 

                                </div>

<div id="altkatcont">

<?
if(!empty($kat[yazi])){ echo '<div id="altkatcontyazi">'.$kat[yazi].'</div>
';}?>

						


</div>								
								
			
									
<div class="title-footer">
<a href="kategori/<?=$ustkat[sef]?>"><img src="images/geridon.png" width="20px"/> <?=$ustkat[baslik]?></a>
</div>

</div>


<div id="urunlercont">
<?
if(!empty($katid)){$ekleme =" where cat='$kat[id]' or anacat='$kat[id]'";  }
$urunler=mysql_query("select * from urunler  $ekleme order by id DESC ");
  	while($urunx=mysql_fetch_array($urunler)){
		echo '
	<a href="urunler/'.$urunx[seo].'">	<div id="urunlertab">
   <div id="uruntabimg">   <img src="'.$urunx[resim].'">
	  </div>
	  <div id="urunlistbaslik">'.$urunx[baslik].'</div>
	   <div id="urunlistfiyat">'.$urunx[fiyat].' <font size="-1">TL</font></div>
    </div></a>
	';
	}?>

	

</div>

</div>



    <? include('footer.php')?>

 </body>