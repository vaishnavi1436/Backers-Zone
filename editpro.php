<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style type="text/css">
        body{
    background-color: #fad9e4;
}

.registration-form{
    padding: 50px 0;
}

.registration-form form{
    background-color: #fff;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .form-icon{
    text-align: center;
    background-color: #f5789e;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 100px;
}

.registration-form .item{
    border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #f5789e;
    border: none;
    color: white;
    margin-top: 20px;
}

.registration-form .social-media{
    max-width: 600px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
    margin-top: 30px;
    margin-bottom: 16px;
}

.registration-form .social-icons a{
    font-size: 23px;
    margin: 0 3px;
    color: #5691ff;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    background-color: #fff;
    line-height: 45px;
}

.registration-form .social-icons a:hover{
    text-decoration: none;
    opacity: 0.6;
}

@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}
    </style>
</head>
<body>
    <div class="registration-form">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <br>
                <input type="text" class="form-control item" id="name" placeholder="Name" required onkeyup="nvalidate()" name="name">
                <label id="vali" style="visibility: hidden; color: red; font-size: 12px;"></label>
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" id="email" placeholder="Email" required onkeyup="nvalidate()" name="Email">
                <label id="valid" style="visibility: hidden; color: red; font-size: 12px;"></label>
            </div>
            
             <div class="form-group">
                <input type="text" class="form-control item" id="Address" placeholder="Address" required name="Address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="city" placeholder="City" name="city" required>
                
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="city" placeholder="State" required name="State">
                
            </div>

            <div class="form-group">
                <button type="submit" id="sibtn" class="btn btn-block create-account" name="up">Update</button>
            </div>

        </form>
     </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>

<script type="text/javascript">
//     const signbtn = document.getElementById("sibtn");
// signbtn.disabled=true;
function nvalidate()
{
  // name validation
  var nm = document.getElementById("name").value;
  regname=/^[A-Z\sa-z]+$/;
  if(regname.test(nm))
  {
      document.getElementById("vali").innerHTML="Done..";
      document.getElementById("vali").style.visibility="visible";
      document.getElementById("vali").style.color="green";
  }
  else 
  {
    document.getElementById("vali").innerHTML="Please Enter your full name..";
    document.getElementById("vali").style.visibility="visible";
    document.getElementById("vali").style.color="red";
      
  }
  
    var r = document.getElementById("email").value;
        var a = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
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
      document.getElementById("valid").innerHTML="Please Enter your Mail Address..";
            document.getElementById("valid").style.visibility="visible";
            document.getElementById("valid").style.color="red";
    }
        else
        {
            document.getElementById("valid").innerHTML="Please Enter your Mail Address..";
            document.getElementById("valid").style.visibility="visible";
            document.getElementById("valid").style.color="red";
      }
    
}
     
</script>



</body>
</html>
