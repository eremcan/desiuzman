<?php session_start();
include ("ayar.php"); 
error_reporting(0);

$durum = $_SESSION["durum"];

	if($durum==""){
	header("Location:login/");
	};
$sorgu = mysql_fetch_array(mysql_query("SELECT * FROM title"));

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
                            ARTICLES <small>All Articles</small></h1></div>
                </div>
                <!-- /. ROW  -->
                <div class="row">	<? 
					$l = $_GET["l"];
switch($l){
case "delete":

$id = $_GET["id"]; 
$sil = mysql_query("Delete From article where id='$id'");

if(! $sil){

echo "Error.";
}else {

	echo "<div class=\"alert alert-success\">
									<strong>Well done!</strong> You successfully delete menu.
								</div>";
	?><META HTTP-EQUIV="Refresh" CONTENT="2; URL=./articles.php"> <?
}
break;
}
?></div>
  <div class="row">
                <div class="col-md-12">
                
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Article Name</th>

                                            <th width="200px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                              			 <?php  
  $otels=mysql_query("select * from article  order by id DESC   ");
  	while($otel=mysql_fetch_array($otels)){
		?>                                          <tr class="odd gradeX">

                                            <td > <?=$otel['title']?>
                                              </td>

                                         
                                            <td  width="200px"class="center">
                                            
                                            
                                            
                                       	<div class="btn-group">
										  <button  onclick="location.href='articlee.php?id=<?=$otel['id']?>'" class="btn btn-primary">Edit</button>
										  
										</div>     
                                            
                                      

</td>
                                        </tr>
                                        
                                     
                                        
                                        
                                         <?
	}
?>      
                            
                                       
                                        
                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
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
