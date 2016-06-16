<html>
<head>
<title>Joanna的郵件系統耶黑</title>
</head>
<body>
<form action="" method="POST">

請輸入您的郵件:<input type="text" name="umail" value="ex.123@gmail.com"></br>

請輸入您的姓名:<input type="text" name="uname" value="ex.Joanna"></br>
請輸入收件人郵件:<input type="text" name="hemail" value="ex.012345678"></br>
請輸入您的主旨:<input type="text" name="upoint"></br>
請輸入您的郵件內容:</br>
<textarea cols="100" rows="20" name="umessage"></textarea>
<input type="submit" value="送出資料">
</form>
<?php

if(isset($_POST["umail"])){

$umail=$_POST["umail"];
$hemail=$_POST["hemail"];
$uanme=$_POST["uname"];

$upoint=$_POST["upoint"];
$umessage=$_POST["umessage"];

require("PHPMailer/PHPMailerAutoload.php");

$mail=new PHPMailer();   //產生一個mail物件
$mail->SMTPDebug=1;

$mail->IsSMTP();  //telling the class to use SMTP
$mail->SMTPAuth=true;  //eable SMTP authentication
$mail->Host="smtp.gmail.com"; //set gmail as the SMTP server
$mail->Port=587;

$mail->Username=("$umail");
$mail->Password=("joannachusmile");

$mail->CharSet="utf-8";
$mail->Subject="$upoint";

$mail->From=("$umail");
$mail->FromName="$uanme";
$mail->IsHTML(True);

$mail->AddAddress("$hemail");
$mail->Body="$umessage";
if(!$mail->send()){
	echo "Failed";
	echo "Mailer error:".$mail->ErrorInfo;
	exit;
}

   echo "Success";
}
?>
</body>
</html>