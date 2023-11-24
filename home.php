<?php
   session_start();

   if(!isset($_SESSION['phone']))
   {
      header("location:index.php");
   }  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Baker's Zone</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
<!--  <link href="assets/img/favicon.png" rel="icon">-->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 <style type="text/css">
    #cart_count{
    text-align: center;
    padding: 0 0.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
}

  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center justify-content-end">

          <h1 class="logo mr-auto"><a href="index.html">Baker's Zone</a></h1>
           <a href="index.html" class="logo mr-auto"></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="home.php">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>

              <li><a href="Hidayah/shoplist1.php">Shops</a></li>
              <li><a href="ctnusform2.php">Contact</a></li>
              <li><a href="Hidayah/cart.php">cart
              <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }
                        else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?> 
                        </a>
               </li>
              <li  class="drop-down"><a href="#" type="button"><?php echo $_SESSION['phone'];?></a>
                    <ul>
                      <li><a href="profile.php">Profile</a></li>
                      <li><a href="#">History</a></li>
                      <li><a href="Hidayah/review.php">Review</a></li>
                      <li><a href="logout.php">Logout</a></li>
                    </ul>
             </li>
              <form action="Hidayah/shoplist.php" method="post">
                              <div class="input-group" style="margin:auto;max-width:auto;background-color: #f5789e;float: right; width:auto;height: auto; border: #f5789e; border-radius:50%;">
              <input type="search" class="form-control rounded" placeholder="Search Here.." aria-label="Search" name="search" 
              aria-describedby="search-addon"/>
              <input type="submit" name="submit" class="btn btn" value="Search" style="background-color: #f3a2bb;">
              </div>
            </form>
             
            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </div>
    </div>
  </header><!-- End Header -->
<!-- search module -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Search results</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>
<!-- search module -->
<!-- Login modal section -->

  <div class="container">
   <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h2 class="modal-title">Login</h2>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <form action="" method="post">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" name="phonenumberr" id="mobilenumber" placeholder="Phone number" value="" required onkeyup="myfun()">
              <label id="mn" style="visibility: hidden; color: red; font-size: 12px;"></label>
              <br>  
          </div>
          <div class="form-group">
              <input type="password" class="form-control" id="pddd" placeholder="Password" value="" name="pswd" onkeyup="myfun()" required>
              <label id="psss" style="visibility: hidden; color: red; font-size: 12px;"></label>
              <br>  
        </div>
        <input type="submit" value="Login"  id="otp"  name="login" class="btn btn-primary" style="padding:12px 205px; margin-left:5.5px; background-color:#f5789e; border:none">
            <br>
            <br>
            <button type="submit" class="btn btn-primary" name="gac" style="padding:12px 135px; margin-left:5.5px; background-color:rgb(233, 222, 222); border:#f5789e; color: black;">Continue with Google <i class="bx bxl-google-plus-circle"></i></button>
            <br>
            <p style="margin-left: 130px; font-size: 16px;">New to Baker's Zone?<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#simodal" data-dismiss="modal" style="background-color: white; color: #f5789e; border: none;">Signup</a></p> 
        
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>

<?php
include 'config.php';
if(isset($_POST['login']))
{
  
  $p_no = $_POST['phonenumberr'];
  $p_d = $_POST['pswd'];

  $query = mysqli_query($conn,"SELECT * FROM  `uaccs` WHERE phno='$p_no' AND password='$p_d'");
  if(mysqli_num_rows($query)>0)
  {
    $ph_pass= mysqli_fetch_assoc($query);
    $db_pass = $ph_pass['cpassword'];
    $_SESSION['phone']= $ph_pass['fname'];
    ?>
    <script>
      location.replace("home.php");
    </script>
    <?php
  }
  else
  {
    echo "Login not sucesss ^_^";
  }
 }
?>
<script>
  const b=document.getElementById("otp");
  // b.disabled=true;
  
function myfun(){
  var p = document.getElementById("mobilenumber").value;
    var q = /^[7-9]\d{9}$/;
    if(q.test(p) && (!(p=="")))
    {
      document.getElementById("mn").innerHTML="Done..";
			document.getElementById("mn").style.visibility="visible";
			document.getElementById("mn").style.color="green";
      // b.disabled=false;
			
    }
    else
    {
      document.getElementById("mn").innerHTML="Please enter 10 digit phone number";
      document.getElementById("mn").style.visibility="visible";
      document.getElementById("mn").style.color="red";
      // b.disabled=true;
    }
    var aa = document.getElementById("pddd").value;
    var rr = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
    if(rr.test(aa) && (!(aa=="")))
    {
      document.getElementById("psss").innerHTML="Done..";
			document.getElementById("psss").style.visibility="visible";
			document.getElementById("psss").style.color="green";
      // b.disabled=false;
			
    }
    else
    {
      document.getElementById("psss").innerHTML="Please enter password between(minimum 8 characters including(numbers,letters),Atleast 1 Uppercase letter,spaces are not allowed..)";
      document.getElementById("psss").style.visibility="visible";
      document.getElementById("psss").style.color="red";
      // b.disabled=true;
    }      
}
</script>

 <!-- end of login module -->

<!-- Signup modal -->

<div class="container">
  <!-- The Modal -->
   <div class="modal fade" id="simodal">
     <div class="modal-dialog">
       <div class="modal-content">
       
         <!-- Modal Header -->
         <div class="modal-header">
           <h2 class="modal-title">Signup</h2>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         
         <!-- Modal body -->
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="modal-body">
              <div class="form-group">
                    <input type="text" name="fname" placeholder="Full Name" onkeyup="nvalidate()" class="form-control" id="fname">
                    <label id="vali" style="visibility: hidden; color: red; font-size: 12px;"></label>
                    
                    <input type="tel" class="form-control" id="phno" placeholder="Phone number" onkeyup="nvalidate()" name="phno">
                    <label id="valid" style="visibility: hidden; color: red; font-size: 12px;"></label>
                    
                    <input type="password" class="form-control" id="pd" placeholder="Password" onkeyup="passCheck()" name="pd">
                    <label id="passl" style="visibility: hidden; color: red; font-size: 12px;"></label>
                    
                    <input type="password" class="form-control" id="cpd" placeholder="Confirm Password" onkeyup="passCheck()" name="cpd">
                    <label id="passc" style="visibility: hidden; color: red; font-size: 12px;"></label>
                </div>
        <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="ch" checked>
                  <label class="form-check-label" for="ch">I agree to Baker's zone's Terms of Services and Privercy Policies</label>
        </div>

                  <input type="submit" value="Create Account"  id="otpbtn"  name="otpbtn" class="btn btn-primary" style="padding:12px 170px; margin-left:5.5px; background-color:#f5789e; border:none">
                  <br>
                  <br>
                  <button type="" class="btn btn-primary" style="padding:12px 135px; margin-left:5.5px; background-color:rgb(233, 222, 222); border:#f5789e; color: black;">Continue with Google <i class="bx bxl-google-plus-circle"></i></button>
                  <br>
                  <br>
                  <p style="margin-left: 130px; font-size: 16px;">Already have an account?<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-dismiss="modal" style="background-color: white; color: #f5789e; border: none;">Login</a></p> 
        </div>
       </form>       
       </div>
     </div>
   </div>
</div>

 <?php
include 'config.php';
if(isset($_POST['otpbtn']))
{
  $name = $_POST['fname'];
  $phone = $_POST['phno'];
  $pass = $_POST['pd'];
  $cpass = $_POST['cpd'];

  $insertq = "INSERT INTO `uaccs`(`fname`, `phno`, `password`, `cpassword`) VALUES ('$name','$phone','$pass','$cpass')";
  $res = mysqli_query($conn,$insertq);
}
?>

<script>
const signbtn = document.getElementById("otpbtn");
signbtn.disabled=true;
function nvalidate()
{
  // name validation
  var na = document.getElementById("fname").value;
  var regna=/^[A-Z\sa-z]+$/;
  var v=regna.test(na) && (!(na==""));
  var bb=(na=="");
  if(regna.test(na) && (!(na=="")))
  {
      document.getElementById("vali").innerHTML="Done..";
      document.getElementById("vali").style.visibility="visible";
      document.getElementById("vali").style.color="green";
  }
  else if(na=="")
  {
    document.getElementById("vali").innerHTML="Please Enter your full name..";
    document.getElementById("vali").style.visibility="visible";
    document.getElementById("vali").style.color="red";
      
  }
  else
  {
      document.getElementById("vali").innerHTML="Please Enter your full name..";
      document.getElementById("vali").style.visibility="visible";
      document.getElementById("vali").style.color="red";
      
  } 
  
    var r = document.getElementById("phno").value;
		var a = /^[7-9]\d{9}$/;
    var l=a.test(r) && (!(r==""));
    var aa=(r=="");
		if(a.test(r) && (!(r=="")))
		{
			document.getElementById("valid").innerHTML="Done..";
			document.getElementById("valid").style.visibility="visible";
			document.getElementById("valid").style.color="green";
			
		}
    else if(r=="")
    {
      document.getElementById("valid").innerHTML="Please Enter your Phone number..";
			document.getElementById("valid").style.visibility="visible";
			document.getElementById("valid").style.color="red";
    }
		else
		{
			document.getElementById("valid").innerHTML="Please Enter your Phone number..";
			document.getElementById("valid").style.visibility="visible";
			document.getElementById("valid").style.color="red";
	  }
    
}
function passCheck(){
  var pwd = document.getElementById("pd").value;
  var regp = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
  var rp = regp.test(pwd); 
  if(regp.test(pwd)){
    document.getElementById("passl").innerHTML="Done..";
		document.getElementById("passl").style.visibility="visible";
	  document.getElementById("passl").style.color="green";
    }
    else
    {
      document.getElementById("passl").innerHTML="Please enter password between(minimum 8 characters including(numbers,letters),Atleast 1 Uppercase letter,spaces are not allowed..)";
		document.getElementById("passl").style.visibility="visible";
	  document.getElementById("passl").style.color="red";
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
	  document.getElementById("passc").style.color="red";
    signbtn.disabled=true; 
    }
    if(pwd==cpwd && (!(pwd=="")) && (!(cpwd=="")))
    {
      document.getElementById("passc").innerHTML="Done..";
		  document.getElementById("passc").style.visibility="visible";
	    document.getElementById("passc").style.color="green";
      signbtn.disabled=false;
    }
    else
    {
    document.getElementById("passc").innerHTML="Password and confirm password dosen't match..";
		document.getElementById("passc").style.visibility="visible";
	  document.getElementById("passc").style.color="red";
    signbtn.disabled=true; 
    } 
    
}
</script>
<!-- end of Sign up-->


   <!-- ======= Hero Section ======= -->
    <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/s1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>B' Zone</span></h2>
              <p class="animated fadeInUp">One of the great things about being a grown up is eating a cake 
                    <br>for a Breakfast without having to ask for a permission.</p>
              
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>B' Zone</span></h2>
              <p class="animated fadeInUp">You can't buy happiness, but you can buy cupcakes. And that's kind of the same thing.</p>
              
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s5.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>B' Zone</span></h2>
              <h3>Get a product at one click</h3>
              
              </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
            <a href="https://youtu.be/WybAY12ufjw" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>About us</h3>
            <p>The Baker's zone is a concept which is developed by us for Nashik bakery owners.Baker's zone provide you the best quality and taste products from various area of Nashik city also we Facilate student entrapreneur and housewifes to come in front. </p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Quality and value.</a></h4>
              <p class="description">We give you the assurance about products that each and every product contain quality which delivered to our customers</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-duplicate"></i></div>
              <h4 class="title"><a href="">Hygin</a></h4>
              <p class="description">In this pandemic the personal hygin and taking care of it very imprtant. We'll maintain our product hygin.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-devices"></i></div>
              <h4 class="title"><a href="">Easy to access</a></h4>
              <p class="description">Baker's zone is a userfriendly web portal which is easily accessible for any browser an ddevices.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container-fluid">

        <div class="row justify-content-center skills-content">

          <div class="col-xl-5 col-lg-6">

            <div class="progress">
              <span class="skill">Safety<i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Hygin<i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Quality<i class="val">99%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-xl-5 col-lg-6">

            <div class="progress">
              <span class="skill">Products<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Delivery<i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">value<i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container-fluid">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Cake Shops</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Bakeris</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Linked shops and bakeris</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Services</h2>
          <h3 class="t">Check our <span>Services</span></h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-pie-chart-line"></i></div>
                <h4 class="title"><a href="">Fast Delivery</a></h4>
                <p class="description">We will provide you fast Delivery as soon as possible.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-stack-line"></i></div>
                <h4 class="title"><a href="">Live Tracking for Products</a></h4>
                <p class="description">Live tracking functionality is provided through which one should  track their product status.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-markup-line"></i></div>
                <h4 class="title"><a href="">Cart</a></h4>
                <p class="description">User should able to wishlist their products for they are wishing to buy afterwords.</p>
              </div>
              </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>We Welcome Sweetness.</h3>
          <p>Connect with us by one click</p>
          <a class="cta-btn" href="#">Hurry up</a>
        </div>

      </div>
    </section><!-- End Cta Section -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                  
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  Nashik-Pune Highway<br>
                  Nashik-42210,Maharashtra<br>
                  India<br><br>
                  <strong>Phone:</strong> +91 9075671983<br>
                  <strong>Email:</strong> ctnus09@gmail.com<br>
                </p>

              </div>

               <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Baker's Zone</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
