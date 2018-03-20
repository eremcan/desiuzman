<?php session_start();
include ("ayar.php"); 
error_reporting(0);

$durum = $_SESSION["durum"];

	if($durum==""){
	header("Location:login/");
	};
$sorgu = mysql_fetch_array(mysql_query("SELECT * FROM ayarlar"));
 $bas='urunduzenle';
 $kim = $_SESSION['isim'];
 $tarih =  date('d.m.Y H:i:s');
 $id =$_GET["id"];
$urun = mysql_fetch_array(mysql_query("SELECT * FROM urunler where id='$id' "));
$kategorix = mysql_fetch_array(mysql_query("SELECT * FROM kategori where id='$urun[cat]' "));
?>
<script src="//cdn.ckeditor.com/4.4.6/standard/ckeditor.js"></script> 
<?php
function getEditor($name,$data)
  {
 echo "<textarea name=$name id=$name>$data</textarea>
 <script src=\"ckeditor/ckeditor.js\"></script>
<script>CKEDITOR.replace( '$name',{toolbar : 'Full', uiColor : '#d0d0d0' });</script>";
 } 


?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
    <?=$sorgu['baslik'];?>
    </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
      
      <? include ("nav.php");?>
      
      
       
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <?=$urun['baslik']?> <small></small></h1></div>
                </div>
                <!-- /. ROW  -->
                <div class="row">	<? 
					$l = $_GET["l"];
switch($l){
case "save":
$id = $_GET["id"];

//"resim bilgileri"
$kaynak      =$_FILES['file']['tmp_name'];//Burası resminiz kök klasörünün yerini verir
$isim        =$_FILES['file']['name']; //Resminizin adını verir
$tip         =$_FILES['file']['type']; // Resminizin tipini verir
$buyukluk    =$_FILES['file']['size']; //Büyüklüğünü verir

//Örneğin bir kış resmi yüklediniz isim = "230bt.Kiş.jpg" olarak çıkıyor. Yani rastgele sayı oluşturarak
//Aşağıda resmin değerlerini ekrana yazdırıyoruz..
$rand =substr(md5(uniqid(rand())),0,5);
//Burada oluşturduğumuz rastgele sayıyı yüklediğimiz resimle birleştiriyoruz.

//Burada istediğimiz formattaki resimleri bir diziye atıyor
$desteklenenformatlar = array ("image/jpeg","image/pjpeg","image/png","image/gif");
$kaydedilecekyer = "../urunler";

//in_array fonksiyonu size bir degerin o dizinin icinde olup olmadigini bulmanizda yardimci olur
if (in_array ($_FILES['file']['type'], $desteklenenformatlar))
{
//Burada gördüğünüz fibi ilkönce kaydedilecekyeri daha sonra yukarıda yaptığımız
//random sayıyı yeni resmimizin önüne ekliyoruz.
$dosya = $kaydedilecekyer . "/".$rand.$_FILES['file']['name'];
$dosya2 = $sorgu['base']."urunler/".$rand.$_FILES['file']['name'];


//Burada ise move_uploaded_file fonksiyonu ile dosyamızı yukarıda belirttiğimiz yere taşıyoruz
    if (move_uploaded_file ($_FILES['file']['tmp_name'], $dosya))
        {
            
        }
}

//Veritabanına Kayıt
	$resim = $_POST["resim"];

$title = $_POST["title"];
$aciklama = $_POST["con"];
$barkod = $_POST["urunkodu"];
$fiyat = $_POST["sfiyat"];
$cat = $_POST["cat"];
$kategori = mysql_fetch_array(mysql_query("SELECT * FROM kategori where id='$cat' "));
if($kategori['cat'] > 0){
	$anacad=mysql_fetch_array(mysql_query("SELECT * FROM kategori where id='$kategori[cat]' "));
	$anacat = $anacad['id'] ;
}else{$anacat=$cat;}


		$sef = temizle($title);

if(!empty($_FILES['file']['name'])){
	if  (mysql_query("UPDATE urunler SET baslik='$title' , seo='$sef', aciklama='$aciklama' ,resim='$dosya2',fiyat='$fiyat',cat='$cat',barkod='$barkod',anacat='$anacat' WHERE id = '$id'"))
            {
                    echo "<div class=\"alert alert-success\">
									<strong>Tebrikler!</strong> Değişiklikler başarıyla uygulandı.
								</div>";
				?><META HTTP-EQUIV="Refresh" CONTENT="2; URL=./urunlistesi.php"> <?
				
            }

}
else {
	
		if  (mysql_query("UPDATE urunler SET baslik='$title' , seo='$sef', aciklama='$aciklama',fiyat='$fiyat',cat='$cat',barkod='$barkod',anacat='$anacat' WHERE id = '$id'"))
            {
                    echo "<div class=\"alert alert-success\">
									<strong>Tebrikler!</strong> Değişiklikler başarıyla uygulandı.
								</div>";
				?><META HTTP-EQUIV="Refresh" CONTENT="2; URL=./urunlistesi.php"> <?
				
            }
	
	
	
	
}

break;



}
function temizle($tr1) {
$turkce=array("ş","Ş","ı","ü","Ü","ö","Ö","ç","Ç","ş","Ş","ı","ğ","Ğ","İ","ö","Ö","Ç","ç","ü","Ü");
$duzgun=array("s","S","i","u","U","o","O","c","C","s","S","i","g","G","I","o","O","C","c","u","U");
$tr1=str_replace($turkce,$duzgun,$tr1);
$tr1 = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i","-",$tr1);
return $tr1;
}
?></div>



<div class="col-md-12">
                     <!-- Advanced Tables -->
                 
                 <div class="panel panel-primary">
                        <div class="panel-heading">
                           Ürün Düzenle
                        </div>
                        <div class="panel-body"><form name="yuklemeformu" method="post" action="?l=save&id=<?=$urun['id']?>" enctype="multipart/form-data">


										<div class="form-group input-group">
                                            <span  style="min-width:127px;" class="input-group-addon">Ürün Adı</span>
                                            <input type="text" value="<?=$urun['baslik']?>" id="title" required="" name="title" class="form-control">
                                            
                                        </div>
										<div class="form-group input-group">
                                            <span  style="min-width:127px;" class="input-group-addon">Mevcut Resim</span>
                                            	  <img width="100px" src="<?=$urun['resim']?>"/>
                                            
                                        </div>
									
										<div class="form-group input-group">
                                            <span  style="min-width:127px;" class="input-group-addon">Resim Değiştir</span>
                                              <input name="file" type="file" class="form-control"  id="resim" size="30">   
                                        </div>
										<div class="form-group input-group">
                                            <span  style="min-width:127px;" class="input-group-addon">Ürün Kodu</span>
                                            <input type="text"  value="<?=$urun['barkod']?>"  id="urunkodu" required="" name="urunkodu" class="form-control">
                                            
                                        </div>
										
										<div class="form-group input-group">
                                            <span  style="min-width:127px;" class="input-group-addon">Site Fiyatı</span>
                                            <input type="text"  value="<?=$urun['fiyat']?>" id="sfiyat" required="" name="sfiyat" class="form-control">
                                            
                                        </div>
										<div class="form-group input-group">
                                            <span  style="min-width:127px;" class="input-group-addon">Kategori</span>
<select id="cat" name="cat" class="form-control">
<option value="<?=$urun['cat']?>"><?=$kategorix[baslik]?></option>
	 <?php  
  $otels=mysql_query("select * from kategori WHERE cat='0'  order by baslik ASC   ");
  	while($otel=mysql_fetch_array($otels)){
		?>                                       
                                        <option value="<?=$otel['id']?>" >     <?=$otel['baslik']?></option>
                                               <? 
										  $otelss=mysql_query("select * from kategori WHERE cat='$otel[id]'   ");
  	while($otell=mysql_fetch_array($otelss)){ echo '<option value="'.$otell['id'].'">----'.$otell['baslik'].'</option>';
	}} ?>
</select>                                          
                                        </div>
										
										<div class="form-group input-group">
                                            <span  style="min-width:100px;" class="input-group-addon">Açıklama</span>
                                                 <? echo getEditor('con',"".$urun['aciklama'].""); ?>  

                                            
                                        </div>
										
										
										
										
										</div>
						
						
                        <div class="panel-footer">
<button type="submit" class="btn btn-default">Ekle</button></form>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
</div>
  
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
</body>
