<?php
session_start();
if (isset($_SESSION['otpvalue'])) {
    header("location:OTP2.php");
}
if(isset($_POST['save']))
{
$rno=$_SESSION['otp1'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{$email=$_SESSION['forem'];
//For admin if he want to know who is register
echo "<p>Done</p>";
header("location:setpass.php");
}

else{
echo "<p>Invalid OTP</p>";
}

}
//resend OTP
if(isset($_POST['resend']))
{
$message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
$rno=$_SESSION['otp'];
$to=$_SESSION['forem'];
$subject = "Resend OTP";
$txt = "OTP: ".$rno."";
$headers = "From: ctnus09@gmail.com";
mail($to,$subject,$txt,$headers);
$message="<p class='w3-text-green w3-center'><b>Sucessfully resend OTP to your mail.</b></p>";
}
?>
<html>
<head>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<link rel="stylesheet" href="assets/css/stylelogin.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <title>Login page</title>
</head>
<body>
<div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">OTP</label> <input id="tab-2" type="text" name="tab" class="sign-up"><label for="tab-2" class="tab">Verification</label>
                    <div class="login-space">
                        <div class="login">
                            <form action="" method="post">
                            <br>
                            <br>
                            <div class="group"><input type="password" name="otpvalue" class="input" placeholder="Enter OTP"> </div>
                            <br>
                            <br>
                            <div class="group"> <button name="resend" class="button">Resend OTP</button> </div>
                            <div class="group"> <button class="button" name="save" id="save">Verify OTP</button> </div>
                            <div class="hr">
                            <br>
                            <br>
                          </div>
                            </form>
                            <div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>