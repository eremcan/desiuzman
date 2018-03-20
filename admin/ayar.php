<?php  session_start();
if (!$lin= @mysql_connect("94.73.170.201","user40BE308C28","YMwt80A8"))  {
     die("Veritabani baglantisi saglanamadi.");
  }

  $VADRES = "desiuzman";
  mysql_select_db($VADRES);
  mysql_query("SET CHARACTER SET utf8");
  mysql_query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
  
 $sorgu = mysql_fetch_array(mysql_query("SELECT * FROM ayarlar"));

?>