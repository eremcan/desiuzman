</div></div></div></div><footer>
  <div id="container">
    <div class="row">
      <div class="footerleft ">
        <h6 class="heading7">DESİ UZMAN</h6>

        <p><i class="fa fa-map-marker"></i> Mehterçeşme Mahallesi 1880 Sk. Beylikdüzü/İstanbul</p>
        <p><i class="fa fa-phone"></i> Telefon: 0(534) 033 1212</p>
        <p><i class="fa fa-phone"></i> Destek Hattı: 0(212) 853 9596</p>
        <p><i class="fa fa-envelope"></i> E-mail : info@desiuzman.com</p>

      </div>
      <div class="footerleft">
        <h6 class="heading7">MENÜ</h6>
        <ul class="footer-ul">
          <li><a href="http://www.desiuzman.com/"> Anasayfa</a></li>
          <li><a href="http://www.desiuzman.com/kurumsal/hakkimizda"> Kurumsal</a></li>
          <li><a href="http://www.desiuzman.com/Referanslar"> Referanslar</a></li>
          <li><a href="http://www.desiuzman.com/urun"> Ürünler</a></li>
          <li><a href="http://www.desiuzman.com/kurumsal/iletisim"> İletişim</a></li>

        </ul>
      </div>
      <div class="footerleft">
        <h6 class="heading7">KURUMSAL</h6>
        <div class="post">
		<p><a href="servis-noktalari">Servis Noktaları</a><span></span></p>
		<?
$menux=mysql_query("select * FROM kurumsal order by baslik ASC");
  	while($menuu=mysql_fetch_array($menux))
	{
	?>
          <p><a href="<?=$sorgu[base]?>kurumsal/<?=$menuu[sef]?>"><?=$menuu[baslik]?></a><span></span></p>
	<? } ?>
        </div>
      </div>
      <div class="footerleft">
	          <h6 class="heading7">BİZİ TAKİP EDİN</h6>

       <a class="sosyal" target="_blank" href="https://www.facebook.com/desiuzman/">Facebook</a>
	     <a class="sosyal" target="_blank" href="<?=$sorgu[tww]?>">İnstagram</a>
	     <a class="sosyal" target="_blank" href="<?=$sorgu[inss]?>">Twitter</a>
      </div>

    </div>
  </div>
</footer>
