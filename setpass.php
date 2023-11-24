<?php  
    session_start();
    if (isset($_POST['save'])) {
        $np = $_POST['pass1'];
        $cnp = $_POST['pass2'];

        $e = $_SESSION['forem'];
        include 'config.php';
        $q = mysqli_query($conn,"SELECT * FROM `uaccs` WHERE email='$e'");
        if (mysqli_num_rows($q)>0) {
            $mq= mysqli_query($conn,"UPDATE `uaccs` SET `password`='$np',`cpassword`='$cnp' WHERE `email`='$e'");
            echo "<p>Done Password reset</p>";
            $to="$e";
            $subject = "Thank you!";
            $txt = "Your password has been change through this Email id: ".$e;
            $headers = "From: ctnus09@gmail.com";
            mail($to,$subject,$txt,$headers);
            header("location:login.php");

        }
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

    <title>Set New Password</title>
</head>
<body>
<div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Set New Password</label> <input id="tab-2" type="text" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                    <div class="login-space">
                        <div class="login">
                            <form action="" method="post">
                            <br>
                            <br>
                            <div class="group"><input type="password" name="pass1" class="input" placeholder="Enter New Password"> </div>
                            <div class="group"><input type="password" name="pass2" class="input" placeholder="Confirm New Password"> </div>
                            <br>
                            <div class="group"> <button class="button" name="save">Set Password</button> </div>
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