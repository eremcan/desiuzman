</div></div></div></div><footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter"> Özel Çocuğum</div>
       
        <p><i class="fa fa-map-marker"></i> <?=$sorgu[adres1].' '.$sorgu[adres2]?></p>
        <p><i class="fa fa-phone"></i> Telefon: <?=$sorgu[telefon]?></p>
        <p><i class="fa fa-envelope"></i> E-mail : <?=$sorgu[mail]?></p>
        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">MENÜ</h6>
        <ul class="footer-ul">
          <li><a href="http://www.attd.de/bakici/uzman-bul"> Uzmanlar</a></li>
          <li><a href="http://www.attd.de/bakici/giris-yap"> Üye Girişi</a></li>
          <li><a href="http://www.attd.de/bakici/okul-basvuru"> Okul Giriş ve Başvuru</a></li>
          <li><a href="http://www.attd.de/bakici/uzman-basvuru"> Uzman Giriş ve Başvuru</a></li>
          
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">KURUMSAL</h6>
        <div class="post">
		<? 
$menux=mysql_query("select * FROM kurumsal order by baslik ASC");
  	while($menuu=mysql_fetch_array($menux))
	{ 
	?>
          <p><a href="<?=$sorgu[base]?>kurumsal/<?=$menuu[sef]?>"><?=$menuu[baslik]?></a><span></span></p>
	<? } ?>   
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
       <blockquote><a target="_blank" href="<?=$sorgu[fbb]?>">Facebook</a></blockquote>
	   <blockquote ><a target="_blank" href="<?=$sorgu[tww]?>">İnstagram</a></blockquote>
	   <blockquote><a target="_blank" href="<?=$sorgu[inss]?>">Twitter</a></blockquote>
      </div>
	  
    </div>
  </div>
</footer>