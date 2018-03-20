<?
include('ayar.php');
  $kurumsal= $_GET['sef'];
 	$yazidetay=mysql_fetch_array(mysql_query("select * from kurumsal where sef='$kurumsal' limit 1"));
?>
<head>
<title>İletişim - <?=$sorgu[title]?></title>
 <meta charset="UTF-8">
<meta name="keywords" content="desi alarm, desi uzman, alarm sistem, desi,ücretsiz keşif alarm, kamera sistemleri, alarm güvenlik ">
<meta name="description" content="Desi alarm sistemi ve montajı , güvenlik sistemleri , yangın algılayıcı , kamera sistemleri gibi ev ve iş yeri için çözümler">
 <? include('header.php')?>


<div id="kurumsalust">


	</div>
	<?
					$l = $_GET["l"];
switch($l){
case "gonder":
require("class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "mail.desiuzman.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@desiuzman.com";  // SMTP username
$mail->Password = "Info654123"; // SMTP password
 $mail->CharSet  = 'utf-8';
$mail->From     = "info@desiuzman.com"; // smtp kullanıcı adınız ile aynı olmalı
$mail->Fromname = "giden ismi";
$mail->AddAddress("info@desiuzman.com","Ornek Isim");
$mail->Subject  =  'Desiuzman İletişim Mesajı';
$mesaj = 'İsim:'.$_POST[adsoyad].'<p> E Mail: '.$_POST[email].'<p>Telefon: '.$_POST[telefon].'<p>Tarih : '.$tarih.'<p>Mesaj : '.$_POST[mesaj];

$mail->Body     =  ($mesaj);

if(!$mail->Send())
{
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}




$tarih = date('d.m.Y');;

mysql_query("INSERT INTO iletisim (adsoyad,mail,telefon,tarih,mesaj) VALUES ('$_POST[adsoyad]','$_POST[email]','$_POST[telefon]','$tarih','$_POST[mesaj]') ");
echo ' <div id="mesajgond">Mesaj Gönderildi</div>';
 break;
} ?>

<div id="container">
<div id="kurumsalsol">
<div id="kurumsalsolbaslik">Kurumsal</div>
<?

		$uzmanlar=mysql_query("select * from kurumsal order by id DESC ");
  	while($uzmandetay=mysql_fetch_array($uzmanlar)){
	echo '<a href="kurumsal/'.$uzmandetay[sef].'"><div id="kurumsalsolli">'.$uzmandetay[baslik].'</div></a>';
	}
?>
<a href="kurumsal/iletisim"><div id="kurumsalsolli">İletişim</div></a>

</div>
<div id="kurumsalsag">
<h1>İLETİŞİM</h1>
<div class="iletisimsol">

                <form name="sentMessage" id="contactForm" method="POST" action="kurumsal/iletisim/gonder">
                    <div class="control-group form-group">
                        <div class="controls">
                            <p class="help-block"></p>  <label>İsim Soyisim:</label>
                            <input type="text" class="form-control" name="adsoyad" required="" data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefon:</label>
                            <input type="tel" class="form-control" name="telefon" required="" data-validation-required-message="Please enter your phone number.">
                          <p class="help-block"></p></div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Adresi:</label>
                            <input type="email" class="form-control" name="email" required="" data-validation-required-message="Please enter your email address.">
                        <p class="help-block"></p>  </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mesaj:</label>
                            <textarea  class="form-control" name="mesaj" required="" maxlength="999" style="resize:none"></textarea>
                          <p class="help-block"></p></div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
            </div>

			<div class="iletisimsag">
                <h3>İletişim Bilgileri</h3>
			<p>	Mehterçeşme Mahallesi 1880 Sk. Beylikdüzü İstanbul</p>
<p> 0534 033 1212 </p>
 <p>info@desiuzman.com</p>
<h3>Banka Bilgileri</h3>
<p>Denizbank IBAN NO</p>
<p>TR23 0013 4000 0040 0238 9000 15</p>
<p>Finans Bankası IBAN NO </p>
<p>TR47 0011 1000 0000 0070 1455 03</p>
<p>Tuncay YILDIRIM</p>
				</div>
</div>
</div>




  <? include('footer.php')?>

 </body>
