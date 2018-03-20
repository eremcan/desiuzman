<?
include('ayar.php');



?>

<head>
<title><?=$sorgu[title]?></title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97860804-1', 'auto');
  ga('send', 'pageview');

</script>
 <meta charset="UTF-8">
<meta name="keywords" content=" desi alarm, neutron kamera, desi uzman, desi, ücretsiz keşif alarm, kamera sistemleri, neutron ">
<meta name="description" content="Desi Alarm Sistemi ve montajı , Neutron Kamera Sistemi ve montajı , yangın algılayıcı gibi ev ve iş yeri için güvenlik çözümleri Desiuzman'da">
<link rel="alternate" hreflang="tr" href="http://www.desiuzman.com/" />
<meta name="google-site-verification" content="HoHZeDR_nyVMieTLc9enYik50SX2t_Ci4XLseQOGXMk" />
 <? include('header.php')?>
<div id="ucretsizkesiftop">
<div id="container">


</div>

</div>
<div id="slider">

			<div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
					<li><a href="/kampanyalar"><img src="images/slider2.jpg" alt="Desi Uzman"/></a></li>
					<li><a href="/kampanyalar"><img src="images/slider1.png" alt="Desi Güvenlik"/></a></li>
					<li><a href="/kampanyalar"><img src="images/slider4.jpg" alt="Desi Alarm"/></a></li>


				</ul>
			</div>

		<script src="js/jquery.cbpFWSlider.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpFWSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease'
				}
				- destroy:
				$( selector ).cbpFWSlider( 'destroy' );
				*/

				$( '#cbp-fwslider' ).cbpFWSlider();

			} );
		</script></div>
<div id="sliderdown">
<div id="container">
<ul>
<li><div id="libaslik">YENİ NESİL ALARM SİSTEMİ</div>
<div id="liaciklama">Kullanımı çok konforlu ve pratik olan Yeni Nesil Akıllı Alarm Sistemleri ile içiniz çok rahat olacak</div></li>
<li><div id="libaslik">PROFESYONEL HİZMET</div>
<div id="liaciklama">Sürekli gelişen teknolojiyi yakından takip eden kadromuzla dünyada kendini kanıtlamış güvenlik markaları ile çözümler sunuyoruz</div></li>
<li><div id="libaslik">7 / 24 DESTEK</div>
<div id="liaciklama">Teknik arıza gibi durumlarda  ve satış sonrası verdiğimiz hizmet ile müşteri memnuniyetini ön planda tutmaktayız.</div></li>
<li class="tabletyoket"><div id="libaslik">GÜVENİLİR GÜVENLİK SİSTEMLERİ</div>
<div id="liaciklama">Dünyada kendini kanıtlamış markalardan mekanınıza uygun güvenlik sistemi ve uygulamada profesyonel çözümler.</div></li>
</ul>
</div>
</div>

<div id="indexurunlist">
<section class="regular slider">


	<?
	$urunler=mysql_query("select * from urunler  order by id ASC limit 15");
  	while($urunx=mysql_fetch_array($urunler)){

echo '<a href="urunler/'.$urunx[seo].'"><div>
      <img src="'.$urunx[resim].'">

	  <div id="urunlistbaslik">'.$urunx[baslik].'</div>
    </div></a>';
	}
	?>




  </section>



  <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5
      });

    });
  </script>
</div>

<div id = "middle">
<div id = "container">

<div id="altblge">
<div id="altblgeres"> <img src="images/d.png"/></div>
<div id="altblgebaslk">CCTV & IP Kamera Sistemleri</div>
<div id="altblgeyaz">Dijital görüntüleme sistemlerinde uygun fiyat ve geniş ürün yelpazemizle hizmetinizdeyiz. Son teknoloji ile üretilmiş,
CCTV kamera, AHD (Analog HD ) kamera , HDCVI (full HD)
kamera ve ip kamera sistemleri stoklarımızda bulunmaktadır.
Alanında uzman teknik ekibimizle sizlere 7×24 destek vermekteyiz. </div>
</div>
<div id="altblge">
<div id="altblgeres"> <img src="images/d1.png"/></div>
<div id="altblgebaslk">Yangın İhbar Sistemleri</div>
<div id="altblgeyaz">Yangın ihbar sistemlerinde iki farklı grup ve geniş ürün yelpazesi mevcuttur. Konvansiyonel ve akıllı adresli olmak üzere tüm ekipmanlar; duman dedektörü, kırbas buton, alev dedektörü, ısı artış dedektörü, paneller, ışın tipi dedektörler. Projeleriniz için uygun fiyatlar ve şartnameleri karşılayan ürünler ..</div>
</div><div id="altblge" class="tabletyoket">
<div id="altblgeres"> <img src="images/d2.png"/></div>
<div id="altblgebaslk">Alarm Sistemleri</div>
<div id="altblgeyaz">Ev ve iş yeri güvenliğinde kalitesini dünyaca kanıtlamış ürün gurupları ve her bütçeye uygun seçenekler ile Alarm Sistemleri. Kolay kurulum kablolu ve kablosuz seçenekleri ile ihtiyaçlarınızı karşılayacak. Pır Detektör, Manyetik Kontak, Beam Detektör ve Siren gibi ekipmanlar ve paket halinde sistemler..</div>



  <? include('footer.php')?>

 </body>
