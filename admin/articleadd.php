<?php session_start();
include ("ayar.php"); 
error_reporting(0);
$durum = $_SESSION["durum"];

	if($durum==""){
	header("Location:login/");
	};
$sorgu = mysql_fetch_array(mysql_query("SELECT * FROM title"));

?>
<script src="ckeditor/ckeditor.js"></script> 
<?php
function getEditor($name,$data)
  {
 echo "<textarea name=$name id=$name>$data</textarea>
 <script src=\"ckeditor/ckeditor.js\"></script>
<script>CKEDITOR.replace( '$name',{toolbar : 'Full', uiColor : '#d0d0d0' });</script>";
 } 
function slugify($string){

    $rus = array('ё','ж','ц','ч','ш','щ','ю','я','Ё','Ж','Ц','Ч','Ш','Щ','Ю','Я');
    $lat = array('yo','zh','tc','ch','sh','sh','yu','ya','YO','ZH','TC','CH','SH','SH','YU','YA');

    $slug = str_replace(
        explode(' ', 'А Б В Г Д Е З И Й К Л М Н О П Р С Т У Ф Х Ъ Ы Ь Э а б в г д е з и й к л м н о п р с т у ф х ъ ы ь э'),
        explode(' ', 'A B V G D E Z I J K L M N O P R S T U F H _ I _ E a b v g d e z i j k l m n o p r s t u f h . i . e'),
        str_replace($rus, $lat, $string));

    return strtolower(str_replace(array(' ', '.', ',', '?', '«', '»','(',')','/',':',',','?',"'" , '&#8217;', '!', ':', '...','–'), array('-', '', '', '', '', '','','','-','-','','','-','-','','-',''), $slug));
}
function seotr($s) {
 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',','?',"'" , '&#8217;', '!');
 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','','-','-','');
 $s = str_replace($tr,$eng,$s);
 $s = strtolower($s);
 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
 $s = preg_replace('/\s+/', '-', $s);
 $s = preg_replace('|-+|', '-', $s);
 $s = preg_replace('/#/', '', $s);
 $s = str_replace('.', '', $s);
 $s = trim($s, '-');
 return $s;
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
                            ADD ARTICLE <small></small></h1></div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                  	<? 
					$l = $_GET["l"];
switch($l){
case "article":
$title = $_POST["title"];

$sef = seotr($_POST["title"]);
$con = $_POST["con"];


	
if (mysql_query("INSERT INTO article (title,sef,con) VALUES ('$title','$sef','$con') "))
            {
			
                echo "<center><font color=#000 size=7><span class=style1>Saved</span>.</font></center>";
				?><META HTTP-EQUIV="Refresh" CONTENT="0; URL=./categories.php"> <?
				
            }
            else {
                echo"<span class=style1>Error !</span>";
            }

	
break;



}; ?></div>


                <div class="row"></div>
              
<!-- /. ROW  -->
     <form action="?l=article" method="post">
                                     
                                         <div class="form-group">
                                            <label>Title</label>
                                            <input  name="title" id="title"  class="form-control" >
                                        </div> 
                    <? echo getEditor('con',""); ?>  


                                   <br>
                                                                           <button type="submit" class="btn btn-default">Save</button>
</form>
                                </div>
                         
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
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>