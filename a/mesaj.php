<?
$isim= $_POST["isim"];
$soyisim=  $_POST["soyisim"];
$meslek=  $_POST["meslek"];
$kurum=  $_POST["kurum"];
$email=  $_POST["email"];
$telefon=  $_POST["telefon"];
$egitim=  $_POST["egitim"];
$puancx=  $_POST["puancx"];
$dogrucx=  $_POST["dogrucx"];
$yanliscx=  $_POST["yanliscx"];
$boscx=  $_POST["boscx"];


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
$mail->AddAddress("info@teamtestprep.org","Teamtestprep.org");
$mail->AddAddress($email, 'Diğer');
$mail->Subject  =  'Başlık';
$mesaj = 'İsim:'.$isim.'<p> Soyisim: '.$soyisim.'<p>Meslek: '.$meslek.'<p>Kurum: '.$kurum.'<p>E Mail: '.$email.'<p>Telefon: '.$telefon.'<p>Eğitim: '.$egitim.'<p>Puan: '.$puancx.'<p>Doğru Sayısı: '.$dogrucx.'<p>Yanlış Sayısı: '.$yanliscx.'<p>Boş Sayısı: '.$boscx;

$mail->Body     =  ($mesaj);

if(!$mail->Send())
{
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

?>