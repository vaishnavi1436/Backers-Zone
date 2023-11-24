<?php
session_start();
$rndno=rand(1000, 9999);//OTP generate
$message = urlencode("otp number.".$rndno);
$to=$_POST['phonenumberr'];
$subject = "OTP";
$txt = "OTP: ".$rndno."";
$headers = "From: ctnus09@gmail.com";
mail($to,$subject,$txt,$headers);
if(isset($_POST['login']))	
{
$_SESSION['email']=$_POST['phonenumberr'];
$_SESSION['ps']=$_POST['pswd'];
$_SESSION['otp']=$rndno;
header( "Location: OTP.php" );
} 
?>