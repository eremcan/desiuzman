<?php session_start();
include ("ayar.php"); 
error_reporting(0);

$durum = $_SESSION["durum"];

	if($durum==""){
	header("Location:login/");
	};
$sorgu = mysql_fetch_array(mysql_query("SELECT * FROM ayarlar"));
 $bas='yaziekle';
 $kim = $_SESSION['isim'];
 $tarih =  date('d.m.Y H:i:s');
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
                            YAZI EKLE <small></small></h1></div>
                </div>
                <!-- /. ROW  -->
                <div class="row">	<? 
					$l = $_GET["l"];
switch($l){
case "save":

$title = $_POST["title"];
$aciklama = $_POST["con"];


		$sef = temizle($title);

	
if (mysql_query("INSERT INTO kurumsal (baslik,sef,icerik) VALUES ('$title','$sef','$aciklama') "))
            {
			
                echo "<center><font color=#000 size=7><span class=style1>Eklendi</span>.</font></center>";
				?><META HTTP-EQUIV="Refresh" CONTENT="3; URL=./yazilistesi.php"> <?
				
            }
            else {
                echo"<span class=style1>Error !</span>";
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
                           Yazı Ekle
                        </div>
                        <div class="panel-body"><form name="yuklemeformu" method="post" action="?l=save" enctype="multipart/form-data">


										<div class="form-group input-group">
                                            <span  style="min-width:100px;" class="input-group-addon">Başlık</span>
                                            <input type="text" id="title" required="" name="title" class="form-control">
                                            
                                        </div>
										
										<div class="form-group input-group">
                                            <span  style="min-width:100px;" class="input-group-addon">Yazı</span>
                                                 <? echo getEditor('con',""); ?>  

                                            
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
