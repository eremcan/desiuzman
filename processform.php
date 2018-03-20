<?php
$msg = '';
if(isset($_POST['update']))
{
	$str_data = json_encode(array(	"token"=>$_POST['token'],"password" => hash('sha256', $_POST['pswd'])));
$ch = curl_init("http://kpssmentor.com:8080/forgetPassword");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$str_data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($str_data)));$result = curl_exec($ch);$res = json_decode($result,true);

if($res['resultCode'] == 1  ){$msg =  "<div class='successmsg'>Tebrikler. ParolanÄ±z gÃ¼ncellendi.Yeni parolanÄ±zÄ± kullanarak giriÅŸ yapabilirsiniz.</div>";}
else if($res['resultCode'] == 2){$msg = "<div class='errormsg'>Paraola gÃ¼ncelleme esnasÄ±nda bir hata oluÅŸtu. LÃ¼tfen daha sonra tekrar deneyin ve ya Sahaf ekibi ile iletiÅŸime geÃ§in.</div>";}
else if($res['resultCode'] == 3){$msg = "<div class='errormsg'>".$res['resultMessage']."</div>";}
else{$msg = "<div class='errormsg'>Something went wrong..</div>";}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.boxcontainer{float:left;width:100%;}
.city {
     margin: 0 auto;
     padding: 15px;
     max-width: 300px;
}
.logocontainer
{
	float:left;
	width:100%;
	margin-bottom:10px;
}
.logo
{
	float: left;
    text-align: center;
    width: 100%;
}
.errormsg {
    color: #f00;
    float: left;
    padding: 10px 0;
    text-align: center;
    width: 100%;
}
.successmsg
{
	color: #049097;
    float: left;
    padding: 10px 0;
    text-align: center;
    width: 100%;
}
.insidecitycls {
    border: 1px solid black;
    float: left;
    height: auto;
    padding: 20px;
    width: 100%;
}
</style>
</head>
<body>
<div>
</div>
<div>
</div>
<div class="boxcontainer">
<div class="city">
   <div class="insidecitycls">
   		<div class="logocontainer">
            <div class="logo">
                        <img src="logo.png">
            </div>
	   </div>
	       <?php echo $msg;?>
</div>
</div>
</div>
</body>
</html>