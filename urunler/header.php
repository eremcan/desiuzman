

<link href="style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
	})
</script>
<div id="header">

<div id="headeralt">
<div id="logo"><a href="<?=$sorgu[base]?>"><img src="images/logo.png" /></a></div>
<div id="menu"><div class='ribbon'>
			<a href='<?=$sorgu[base]?>'><span>Anasayfa</span></a>
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
			
			<a href='#'><span>İletişim</span></a>
		</div>
		
		<div id="menuphone">
		<div id="phonegiz">0530 000 00 00</div>
		<span><img src="images/phoneicon.png"/></span>
		
		</div>
	<div id="menumail">
		<div id="mailgiz">info@desiuzman.com</div>
		<span><img src="images/mailicon.png"/></span>
		
		</div>
		
		</div>
</div>
</div>