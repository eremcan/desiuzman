<? ob_start();
include ("ayar.php"); 
session_start();
$durum = $_SESSION["durum"];

	if($durum==""){
	header("Location:login/");
	};

$sorgu = mysql_fetch_array(mysql_query("SELECT * FROM ayarlar where id='1'"));
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
    <?=$sorgu['title'];?>
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
                          GALERİ<small></small></h1></div>
                            
                </div>
                <!-- /. ROW  -->
                <div class="row">
                	   	<? $islem = $_GET["l"];
switch($islem){
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
$kaydedilecekyer = "../galeri";

//in_array fonksiyonu size bir degerin o dizinin icinde olup olmadigini bulmanizda yardimci olur
if (in_array ($_FILES['file']['type'], $desteklenenformatlar))
{
//Burada gördüğünüz fibi ilkönce kaydedilecekyeri daha sonra yukarıda yaptığımız
//random sayıyı yeni resmimizin önüne ekliyoruz.
$dosya = $kaydedilecekyer . "/".$rand.$_FILES['file']['name'];
$dosya2 = $sorgu['base']."galeri/".$rand.$_FILES['file']['name'];


//Burada ise move_uploaded_file fonksiyonu ile dosyamızı yukarıda belirttiğimiz yere taşıyoruz
    if (move_uploaded_file ($_FILES['file']['tmp_name'], $dosya))
        {
            
        }
}


if (mysql_query("INSERT INTO galeri (resim,resim2) VALUES ('$dosya2','$dosya2') "))
            {
                echo "<center><font color=#000 size=7><span class=style1>Saved</span>.</font></center>";
				?><META HTTP-EQUIV="Refresh" CONTENT="0; URL=./galeri.php"> <?
				
            }
            else {
                echo"<span class=style1>Error !</span>";
            }

break;
case "delete":
$id = $_REQUEST["kid"];



$sil = mysql_query("Delete From galeri where id='$id'");

if(! $sil){

echo "Error.";
}else {

	echo "<center><font color=#000 size=5><span id=dvv>Deleted</span></font></center>";
	?><META HTTP-EQUIV="Refresh" CONTENT="0; URL=./galeri.php"> <?
}

break;


}; ?><?
function temizle($tr1) {
$turkce=array("ş","Ş","ı","ü","Ü","ö","Ö","ç","Ç","ş","Ş","ı","ğ","Ğ","İ","ö","Ö","Ç","ç","ü","Ü");
$duzgun=array("s","S","i","u","U","o","O","c","C","s","S","i","g","G","I","o","O","C","c","u","U");
$tr1=str_replace($turkce,$duzgun,$tr1);
$tr1 = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i","-",$tr1);
return $tr1;
}
function url_slug($str, $options = array()) {
	// Make sure string is in UTF-8 and strip invalid UTF-8 characters
	$str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
	
	$defaults = array(
		'delimiter' => '-',
		'limit' => null,
		'lowercase' => true,
		'replacements' => array(),
		'transliterate' => false,
	);
	
	// Merge options
	$options = array_merge($defaults, $options);
	
	$char_map = array(
		
 
		// Russian
		'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
		'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
		'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
		'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
		'Я' => 'Ya',
		'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
		'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
		'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
		'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
		'я' => 'ya',
 
	
	);
	
	// Make custom replacements
	$str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
	
	// Transliterate characters to ASCII
	if ($options['transliterate']) {
		$str = str_replace(array_keys($char_map), $char_map, $str);
	}
	
	// Replace non-alphanumeric characters with our delimiter
	$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
	
	// Remove duplicate delimiters
	$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
	
	// Truncate slug to max. characters
	$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
	
	// Remove delimiter from ends
	$str = trim($str, $options['delimiter']);
	
	return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
}
?>
                    <div class="col-md-12">
                     <!-- Advanced Tables -->
                 
                 <div class="panel panel-primary">
                        <div class="panel-heading">
                            Resim Ekle
                        </div>
                        <div class="panel-body"><form name="yuklemeformu" method="post" action="?l=save" enctype="multipart/form-data">
						
						
						
						<div class="form-group input-group">
                                            <span  style="min-width:100px;" class="input-group-addon">Resim</span>
                                         <input name="file" type="file" class="form-control"  id="resim" size="30">
                                            
                                        </div>
										
						

                        </div>
						
                        <div class="panel-footer">
<button type="submit" class="btn btn-default">Ekle</button></form>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
</div>


</div>

  <div class="row">
                 
                 
                 
                  <?php  
  $otels=mysql_query("select * from galeri  order by id DESC");
  $i=1;
  	while($otell=mysql_fetch_array($otels)){
		             ?>
                  <div class="col-md-4">
                     <!-- Advanced Tables -->
                 
                 <div class="panel panel-primary">
                        
                        <div class="panel-body">
                           <img width="280px" height="200px" src="<?=$otell['resim']?>" />
                        </div>
                        <div class="panel-footer">
<a href="?l=delete&kid=<?=$otell['id']?>"><button class="btn btn-danger"><i class="fa fa-pencil"></i> Sil</button></a> 

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
<?	$i= $i+1;} ?>
                
                
              
                
                
            </div>
                <!-- /. ROW  -->
            
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
