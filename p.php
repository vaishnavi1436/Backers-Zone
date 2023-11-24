$query = mysqli_query($conn,"SELECT * FROM  `uaccs` WHERE email='$email' AND password='$p'");
if(mysqli_num_rows($query)>0)
{
    while($ph_pass= mysqli_fetch_assoc($query)){
        $db_pass = $ph_pass['cpassword'];
    $_SESSION['phone']= $ph_pass['fname'];
    ?>
    <script type="text/javascript">
      location.replace("home.php");
    </script>
    <?php

    }
        
    
}
else
  {
    ?>
    <script type="text/javascript">
      alert("Login not successful...");     
    </script>
    <?php
  }
}
