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

<div id="middledownleft" style="width:100%;">Alarm Sistemleri; Güvenli Bir Yaşam İçin

Güvenlik insanların hayatlarını özgürce yaşayabilmeleri adına yaşam düzenlerini etkileyecek olumsuzluklardan uzak kalabilecekleri ortamları sağlayabilmektir. Şüphesiz her bireyin yaşamını devam ettirebilmesi için yeme, içme kadar barınma ve bu yaşam alanını güvenli hale getirme de zorunlu bir ihtiyaçtır. Gerek evlerinde gerek iş yerlerinde huzurlu bir yaşam sürebilmeleri için güvenliklerinin en üst seviyede olduğunu bilmeleri gerekme, oluşabilecek tehditlere karşı önlemlerinin olduğunu bilmek de ortamdaki huzurlarını sağlamaktadır.

Güvenlik, dışarıdan gelebilecek herhangi bir olumsuzluğa tehdide karşı önlem alınması ve planda olmayan olumsuz koşulların oluşmasının engellenmesi olarak tanımlanabilir. Yaşam koşullarının giderek zorlaştığı günümüzde güvenlik ihtiyacı da üst seviyelere çıkmaktadır. Kendilerinin güvenli bir ortamda yaşamadığını düşünenlerin hayatları hep bir tedirginlik içerisinde geçmektedir. Kendisini her an bir tehdit içinde hisseden kişilerin bunu en az seviyeye çekmesi huzurlu bir hayat için mutlak gereklidir.

Ancak bazen ne kadar özverili olunsa da tahmin edilemeyen bir kaza, olay çabaları alt üst etmeye yetmekte ve hayatı son derece etkileyecek sonuçlara neden olabilmektedir. Evlerde işyerlerinde hesaba katılamayan güvenlik zafiyetleri yaşanabilir. İşte bu gibi durumlarda alarm sistemlerine ihtiyaç doğmaktadır. Oluşabilecek olumsuzlukları en aza indirecek, çok daha çabuk fark edilmesini sağlayacak bu sistemler daha huzurlu hayatlar yaşamamız için bize büyük kolaylık sağlamaktadır.

Alarm sistemleri, kullanıldıkları mekanlarda ,


gibi tüm olaylar için kullanılabilir. Bunun için ilgili mekana en uygun sistemin tercih edilmesi gerkemektedir. Her mekanın güvenlik ihtiyaçları birfirine göre farklılık gösterebilmektedir.

Bazı ev ya da işyerlerinde riskler çok daha fazla olabilmekte olup, durumun analizi doğru yapılmalı ve mekanın kapasitesine en uygun alarm kurulumu yapılmalıdır.
Alarm Sistemleri Hırsızlık Olaylarında Caydırıcı Özelliğe Sahiptir

Son 20 yılda nüfusun hızla arttığı ülkemizde nüfus artışına bağlı olarak göçlerde artmış bunun sonucu suç oranlarının %400 oranında artmasına kadar ulaşmıştır. Suç oranındaki bu hızlı yükseliş ne yazık ki güvenlik açığına da yansımıştır. Bu nedenle daha güvenilir yaşamlar sağlamaya çalışan insanlar kendilerini korumak için daha fazla çaba sarf etmeye başlamışlardır. Bu noktada güvenlik sistemleri tercih sebebi olmaya başlamıştır. Dış etkenlerden korunabilme insanın kendi imkanı ve gücüyle belli bir noktaya kadar sağlanabilmektedir. Bu konuda yardımcı desteklerden olan alarm sistemlerini kullanmak olası tüm tehditlere karşı alınan en önemli tedbirlerin başında gelmektedir.

Ekiplerimiz hırsız alarm sistemleri kurulumunda ilk öncelikle doğru bir keşif yapmaktadırlar. İşin uzmanları tarafından yapılan doğru keşifler sonucunda mekanınızın ihtiyacı olan sistemin nitelikleri belirlenir ve kurulum aşaması başlar.

Bulundukları mekanlarda sağladıkları güvenlik dışında aynı zamanda caydırıcı bir nitelik taşıdıkları için alarm sistemleri olayın gerçekleşmemesini dahi sağlayabilmektedirler. Hırsızlık olaylarına karşı önlem alabilmek adına kurulan sistemler giriş kapısı, balkon kapıları, pencereler, havalandırma boşlukları gibi mekana giriş yapılabilme ihtimali olan alanlara yerleştirilerek hırsızlık girişimlerinde alarm durumu oluştururlar ve maksimum koruma sağlarlar. Bu sistemler devreye girdiklerinde yüksek ses ile sirenler çalarlar. Böylelikle tedirginlik yaratarak olayın olmasını engelleyebildikleri gibi aynı zamanda sistem tarafından Kent Güvenlik merkezine de sinyal gönderilir. Bu sinyaller sizin ve belirlediğiniz kişilerin haberdar olmasını sağlar. Gerekli acil durumlarda polislerinde bilgilendirilmesi ile kısa süre içerisinde olaya ekipler tarafından da müdahale edilir. Bu şekilde can ve mal güvenliği en üst düzeyde koruma altına alınabilir. Olası tüm kayıpların önüne geçilebilir.

Alarm sistemleri denildiğinde genellikle sadece hırsız alarmı olarak akıllarda fikirler oluşmaktadır bu aslında çok doğru değildir. Çünkü sistemlerin kapsama alanları oldukça geniştir. Bu sistemler sadece hırsız alarmları olarak değil yangın, gaz kaçağı, su baskını gibi ev ve işyerlerinizde büyük maddi zararlara neden olacak hatta fark edilmemesi ya da geç fark edilmesi durumunda ölümlere dahi neden olabilecek kazalar içinde kullanılmaktadır. Tüm bu kaza ve talihsiz olayların engellenebilmesinin en önemli yolu kısa sürede bir felakete yol açmadan fark edilebilmeleridir. Alarm sistemleri bu durumlarda kurulu oldukları mekanlarda meydana gelen olayı algılarlar ve aktif hale gelirler. Özellikle gaz kaçağı ve yangın gibi fark edilmesi zaman alabilecek olayların alarm sistemleri bileşenlerinde yer alan algıları sayesinde kısa sürede fark edilmesi ve uyarıların verilmesi olası istenilmeyen sonuçların engellenmesinde önemli rol oynamaktadır. Gaz kaçaklarının insanları uykuda yakalaması maalesef ki birçok ölüme sebep olmuş ve olmaya devam etmektedir. Bu tehlikelerin var olduğu mekanlarda gaz kaçağı için kurulmuş dedektörler sayesinde insanlardan çok daha kısa süre zarfında gaz oranı tespit edilerek ve sistem devreye girecektir. Sıkça yaşanan bu gibi olaylarda da bu sistemlerin önemi bir kez daha ortaya çıkarmaktadır. Hiç beklenilmeyen anlarda oluşabilen olayların önüne geçebilmek tahmin edilen 

</div>

 </div> </div>
    <? include('footer.php')?>

 </body>