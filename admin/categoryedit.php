<?php session_start();
include ("ayar.php"); 
error_reporting(0);

$durum = $_SESSION["durum"];

	if($durum==""){
	header("Location:login/");
	};
$sorgu = mysql_fetch_array(mysql_query("SELECT * FROM ayarlar"));
 $bas='kategorilist';
 $kim = $_SESSION['isim'];
 $tarih =  date('d.m.Y H:i:s');
  $id =$_GET["id"];

 $urun = mysql_fetch_array(mysql_query("SELECT * FROM kategori where id='$id' "));
 
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
                            <?=$urun['baslik']?> <small>Kategori düzenle</small></h1></div>
                </div>
                <!-- /. ROW  -->
                <div class="row">	<? 
					$l = $_GET["l"];
switch($l){
case "save":

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
 $id =$_GET["id"];

$title = $_POST["title"];
$cat = $_POST["cat"];
$aciklama = $_POST["con"];
$ilkcat = mysql_fetch_array(mysql_query("SELECT * FROM kategori where id='$cat'"));
	if($ilkcat[cat] =='0'){ $catyol = '-0-'.$ilkcat[id].'-'; }
	else 
	{	$ikincicat = mysql_fetch_array(mysql_query("SELECT * FROM kategori where id='$ilkcat[cat]'"));
			$catyol ='-0-'.$ikincicat[id].'-'.$ilkcat[id].'-';
}

		$sef = temizle($title);
if(!empty($_FILES['file']['name'])){

	if  (mysql_query("UPDATE kategori SET baslik='$title' , sef='$sef',catyol='$catyol', yazi='$aciklama', cat='$cat',resim='$dosya2' WHERE id = '$id'"))
            {
                    echo "<div class=\"alert alert-success\">
									<strong>Tebrikler!</strong> Değişiklikler başarıyla uygulandı.
								</div>";
				?><META HTTP-EQUIV="Refresh" CONTENT="2; URL=./categorieslist.php"> <?
				
            }
} else {
	if  (mysql_query("UPDATE kategori SET baslik='$title' , sef='$sef',catyol='$catyol', yazi='$aciklama', cat='$cat' WHERE id = '$id'"))
            {
                    echo "<div class=\"alert alert-success\">
									<strong>Tebrikler!</strong> Değişiklikler başarıyla uygulandı.
								</div>";
				?><META HTTP-EQUIV="Refresh" CONTENT="2; URL=./categorieslist.php"> <?
				
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
                           Kategori Düzenle
                        </div>
                        <div class="panel-body"><form name="yuklemeformu" method="post" action="?l=save&id=<?=$urun['id']?>" enctype="multipart/form-data">


										<div class="form-group input-group">
                                            <span  style="min-width:100px;" class="input-group-addon">Başlık</span>
                                            <input type="text" id="title" value="<?=$urun['baslik']?>"required="" name="title" class="form-control">
                                            
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
                                            <span  style="min-width:100px;" class="input-group-addon">Alt Kategori</span>
<select id="cat" name="cat" class="form-control">
<? if($urun['cat'] > 0){$kategorix = mysql_fetch_array(mysql_query("SELECT * FROM kategori where id='$urun[cat]' "));
echo '<option value="'.$kategorix[id].'">'.$kategorix[baslik].'</option>
<option value="0">Ana Kategori</option>

';
}else {echo '<option value="0">Ana Kategori</option>';
} 
?>


	 <?php  
  $otels=mysql_query("select * from kategori WHERE cat='0'  order by baslik ASC   ");
  	while($otel=mysql_fetch_array($otels)){
		?>                                       
                                        <option value="<?=$otel['id']?>" >     <?=$otel['baslik']?></option>
                                               <? 
										  $otelss=mysql_query("select * from categories WHERE cat='$otel[id]'   ");
  	while($otell=mysql_fetch_array($otelss)){ echo '<option value="'.$otell['id'].'">----'.$otell['baslik'].'</option>';
	}} ?>
</select>                                          
                                        </div>
										<div class="form-group input-group">
                                            <span  style="min-width:100px;" class="input-group-addon">Kategori Yazısı</span>
                                                 <? echo getEditor('con',"".$urun[yazi].""); ?>  
(İsteğe Bağlı - Google da çıkmak için etkilidir.)
                                            
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
