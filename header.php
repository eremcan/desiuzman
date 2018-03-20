


<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<link href="style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/modernizr.custom.js"></script>
 <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
		</head>
		<body>
<script>
	jQuery(document).ready(function(){
	jQuery(window).scroll(function() {
		var scroll = jQuery(window).scrollTop();
		if (scroll >= 40) {
			jQuery("#menu").addClass("solid");

		}
		if (scroll <= 40) {
			jQuery("#menu").removeClass("solid");
		}
	});
		$(function(){
		var a = 0;
		$('.menuAc').click(function(){
			if ( a == 0 ){
				$(this).text('MENÜYÜ GİZLE');
				a++;
			} else {
				$(this).text('MENÜ');
				a = 0;
			}
			$(this).next('ul').slideToggle(500);
		});
	});
	})
</script>
<div class="menumobil">
<div id="mobilheader"> 7/24 destek hattı : 0212 853 9596</div>
<div id="mobillogo"><a href="<?=$sorgu[base]?>"><img src="images/logo.png" /></a></div>
	<div class="menuAc">MENÜ</div>
	<ul>
		<li><a href="http://www.desiuzman.com">Anasayfa</a></li>
		<li><a href="kampanyalar">Kampanyalar</a></li>
		<li><a href="kurumsal/hakkimizda">Kurumsal</a></li>
		<li><a href="urun">Ürünler</a></li>
		<li><a href="Referanslar">Referanslar</a></li>
		<li><a href="kurumsal/iletisim">İletişim</a></li>
	</ul>
</div>
<div id="headertop"><div class="headertopSol"><h1>Desi Alarm</h1> <p>&amp;</p> <h2>Kamera</h2> <h3>&nbsp;Güvenlik Sistemleri</h3></div>
  <div class="headertopSag">  
	<span>Kampanyalar hakkında bilgi için : 0534 033 1212</span>
	<span> 7/24 destek hattı : 0212 853 9596</span>
	</div>
</div>
<div id="header">

<div id="headeralt">
<div id="logo"><a href="<?=$sorgu[base]?>"><img src="images/logo.png" /></a></div>

<div id="menu"><div class='ribbon'>
			<a href='kampanyalar'><span>Kampanyalar</span></a>
			<a href='kurumsal/hakkimizda'><span>Kurumsal</span></a>
			<a href='urun' id="acmenuli" ><span >Ürünler
			</span> </a>
			<div id="menugos"><ul id="acmenuul">
			<?
			$kathead=mysql_query("select * from kategori where cat='0' order by sira ASC limit 6 ");
  	while($katheadx=mysql_fetch_array($kathead)){
	echo '  <li><a href="kategori/'.$katheadx[sef].'"><img src="'.$katheadx[resim].'"/> <div id="headacbasli">'.$katheadx[baslik].'</div></a></li>';
	}

		?>



  </ul> </div>

			<a href='Referanslar'><span>Referanslar</span></a>

			<a href='kurumsal/iletisim'><span>İletişim</span></a>
		</div>

		<div id="menuphone">
		<div id="phonegiz">0212  853 95 96</div>
		<span><img src="images/phoneicon.png"/></span>

		</div>
	<div id="menumail">
		<div id="mailgiz">info@desiuzman.com</div>
		<span><img src="images/mailicon.png"/></span>

		</div>

		</div>
</div>

</div>
