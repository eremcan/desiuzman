<? 
include('ayar.php');
 $kat=mysql_fetch_array(mysql_query("select * from ilce where slug='$_GET[sef]' limit 1"));

?>
<head>
<title><? echo $kat['ilce_adi'];?> Servis  - <?=$sorgu[title]?></title>
 <meta charset="UTF-8">
<meta name="keywords" content="<? echo $kat['ilce_adi'];?>, desi alarm, desi uzman, alarm sistem, desi,ücretsiz keşif alarm, kamera sistemleri, alarm güvenlik ">
<meta name="description" content="Desi alarm sistemi ve montajı , güvenlik sistemleri , yangın algılayıcı , kamera sistemleri gibi ev ve iş yeri için çözümler">

 <? include('header.php')?>

<link href="css/lightbox.css" rel="stylesheet">
<script src="js/lightbox.js"></script>
<div id="kurumsalust">	
		
		
	</div>

<div id="container">
<div id="urunlercont">
<div id="urunlerbaslik"><? echo $kat['ilce_adi'];?> Servis</div>

<div style="    line-height: 29px;">
Kurulduğu günden bu yana faaliyetlerini sürdüren desi alarm ve güvenlik sektörü içerisinde kaliteli hizmet vermeye devam etmektedir. Güvenlik cihazlarımızın tamamının elektronik ve mekanik tasarımını şirketimiz gerçekleştirmektedir. Bunun yanında alarm sistemlerinin üretimini, dağıtımını ve satış sonrası servis hizmetlerini de eksiksiz olarak yapabiliyoruz. Güvenlik konusunda müşterilerimizin ihtiyaçlarını çok iyi analiz edebiliyoruz. Hizmetimiz içerisinde bulunan müşteri odaklılık ilkesi sayesinde, güvenlik ihtiyaçlarını karşılayabilecek ürünler sunabiliyoruz.

<p>Ev ya da şirketlere yönelik sunduğumuz alarm sistemi çözümlerimiz sayesinde İstanbul ilinin her noktasında aktif hizmet verebiliyoruz. Bu hizmetler içerisinde güvenlik durumunun gerektirdiği ev işyeri, ofis, fabrikalar, atölyeler bulunmaktadır. Güvenlik konusunda ulaştırdığı profesyonel çözümlerimiz bir proje mantığı ile ele alınmaktadır. Etkin olarak sunduğumuz güvenlik projeleri sayesinde kendinizi her zaman güvende hissedebileceğiniz alarm güvenlik sistemlerini hizmetinize sunmaktayız. İstanbul genelinde yer alan teknik servis ağımız sayesinde %99luk her ilçeye yüksek kalitede kurulum, ürün bakım ve servis hizmetlerini ulaştırabiliyoruz. Günün her saatinde kesintisiz hizmet sunan firmamız Desi Alarm <? echo $kat['ilce_adi'];?> ilçesine deneyimli ekibimizle hizmet vermektedir.</p></div>




	

</div>

</div>



   <? include('footer.php')?>

 </body>