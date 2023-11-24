<?php
session_start();
$rndno=rand(1000, 9999);//OTP generate
$message = urlencode("otp number.".$rndno);
$to=$_POST['ema'];
$subject = "OTP";
$txt = "OTP for Reset Password: ".$rndno."";
$headers = "From: ctnus09@gmail.com";
mail($to,$subject,$txt,$headers);
if(isset($_POST['conti']))	
{
$_SESSION['forem']=$_POST['ema'];
$_SESSION['otp1']=$rndno;
header( "Location: OTP2.php" );
} 
?>