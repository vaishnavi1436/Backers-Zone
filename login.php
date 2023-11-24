<?php
    session_start(); 
    if (isset($_SESSION['phone'])) {
    header("location:home.php");
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
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                    <div class="login-space">
                        <div class="login">
                            <form action="process.php" method="post">
                            <div class="group"> <label for="user" class="label">Username</label> <input id="user" type="email" name="phonenumberr" class="input" placeholder="Enter your email as username" required> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" name="pswd" onkeyup="myfun()" class="input" data-type="password" placeholder="Enter your password" required> </div>
                            <label id="psss" style="visibility: hidden; color: red; font-size: 15px;"></label>
                            <br>
                            <br>
                            <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                            <div class="group"> <input type="submit" class="button" value="Sign In" name="login" id="login"> </div>
                            <div class="hr">
                            <br>
                            <br>
                            <div class="foot"> <a href="forgotps.php">Forgot Password?</a> </div>
                            </div>
                            
                            </form>
                        </div>
                        <form action="" method="post">
                        <div class="sign-up-form">
                            <div class="group"> <label for="user" class="label">Full name</label> <input id="fname" name="fname" onkeyup="nvalidate()" type="text" class="input" placeholder="Enter your full name" required> </div>
                            <label id="vali" style="visibility: hidden; color: red; font-size: 12px;"></label>
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pd" name="pd" onkeyup="passCheck()" type="password" class="input" data-type="password" placeholder="Create your password" required> </div>
                            <label id="passl" style="visibility: hidden; color: red; font-size: 12px;"></label>
                            <div class="group"> <label for="pass" class="label">Repeat Password</label> <input id="cpd" onkeyup="passCheck()" name="cpd" type="password" class="input" data-type="password" placeholder="Repeat your password" required> </div>
                            <label id="passc" style="visibility: hidden; color: red; font-size: 12px;"></label>
                            <div class="group"> <label for="pass" class="label">Email Address</label> <input id="em" onkeyup="nvalidate()" name="em" type="email" class="input" placeholder="Enter your email address" required> </div>
                            <label id="valid" style="visibility: hidden; color: red; font-size: 12px;"></label>
                            <div class="group"> <input type="submit" class="button" value="Sign Up" name="sibtn"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                        </div>
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<!-- Login -->


<script>
  
  
function myfun(){
    var aa = document.getElementById("pass").value;
    var rr = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
    if(rr.test(aa) && (!(aa=="")))
    {
      document.getElementById("psss").innerHTML="Done..";
			document.getElementById("psss").style.visibility="visible";
			document.getElementById("psss").style.color="white";
      // b.disabled=false;
			
    }
    else
    {
      document.getElementById("psss").innerHTML="Please enter password between(minimum 8 characters including(numbers,letters),Atleast 1 Uppercase letter,spaces are not allowed..)";
      document.getElementById("psss").style.visibility="visible";
      document.getElementById("psss").style.color="white";
      document.getElementById("psss")
      // b.disabled=true;
    }      
}
</script>
<!-- end of login -->


<!-- Signup -->
<?php
include 'config.php';
if(isset($_POST['sibtn']))
{
  $name = $_POST['fname'];
  $pass = $_POST['pd'];
  $cpass = $_POST['cpd'];
  $email = $_POST['em'];

  $r=mysqli_query($conn,"INSERT INTO `uaccs`(`fname`, `email`, `password`, `cpassword`) VALUES ('$name','$pass','$cpass','$email')");
  ?>
  <script type="text/javascript">
    location.replace("login.php");
  </script>
  <?php
}
?>
<script>
const signbtn = document.getElementById("sibtn");
signbtn.disabled=true;
function nvalidate()
{
  // name validation
  var nm = document.getElementById("fname").value;
  regname=/^[A-Z\sa-z]+$/;
  if(regname.test(nm))
  {
      document.getElementById("vali").innerHTML="Done..";
      document.getElementById("vali").style.visibility="visible";
      document.getElementById("vali").style.color="white";
  }
  else 
  {
    document.getElementById("vali").innerHTML="Please Enter your full name..";
    document.getElementById("vali").style.visibility="visible";
    document.getElementById("vali").style.color="white";
      
  }
  
    var r = document.getElementById("em").value;
		var a = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var l=a.test(r) && (!(r==""));
    var aa=(r=="");
		if(a.test(r) && (!(r=="")))
		{
			document.getElementById("valid").innerHTML="Done..";
			document.getElementById("valid").style.visibility="visible";
			document.getElementById("valid").style.color="white";
			
		}
    else if(r=="")
    {
      document.getElementById("valid").innerHTML="Please Enter your Mail Address..";
			document.getElementById("valid").style.visibility="visible";
			document.getElementById("valid").style.color="white";
    }
		else
		{
			document.getElementById("valid").innerHTML="Please Enter your Mail Address..";
			document.getElementById("valid").style.visibility="visible";
			document.getElementById("valid").style.color="white";
	  }
    
}
function passCheck(){
  var pwd = document.getElementById("pd").value;
  var regp = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
  var rp = regp.test(pwd); 
  if(regp.test(pwd)){
    document.getElementById("passl").innerHTML="Done..";
		document.getElementById("passl").style.visibility="visible";
	  document.getElementById("passl").style.color="white";
    }
    else
    {
      document.getElementById("passl").innerHTML="Please enter password between(minimum 8 characters including(numbers,letters),Atleast 1 Uppercase letter,spaces are not allowed..)";
		document.getElementById("passl").style.visibility="visible";
	  document.getElementById("passl").style.color="white";
    signbtn.disabled=true; 
    }
    var cpwd = document.getElementById("cpd").value;
    var regp = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
    var crp = regp.test(cpwd); 
  if(regp.test(cpwd)){
    }
    else
    {
      document.getElementById("passc").innerHTML="Please enter password between(minimum 8 characters including(numbers,letters),Atleast 1 Uppercase letter,spaces are not allowed..)";
		document.getElementById("passc").style.visibility="visible";
	  document.getElementById("passc").style.color="white";
    signbtn.disabled=true; 
    }
    if(pwd==cpwd && (!(pwd=="")) && (!(cpwd=="")))
    {
      document.getElementById("passc").innerHTML="Done..";
		  document.getElementById("passc").style.visibility="visible";
	    document.getElementById("passc").style.color="white";
      signbtn.disabled=false;
    }
    else
    {
    document.getElementById("passc").innerHTML="Password and confirm password dosen't match..";
		document.getElementById("passc").style.visibility="visible";
	  document.getElementById("passc").style.color="white";
    signbtn.disabled=true; 
    } 
    
}
</script>


</html>