<?php
session_start();
include 'config.php';
 if(isset($_POST['up']))
 {
 $new_img = $_FILES['stud_img']['name'];
 $fname = $_POST['name'];
 $email=$_POST['Email'];
 $address=$_POST['Address'];
 $city=$_POST['city'];
 $state=$_POST['State'];
 $_SESSION['fname']=$fname;
 $_SESSION['img']=$new_img;


 $sql = "UPDATE `uaccs` SET `fname`='$fname',`email`='$email',`Address`='$address',`City`='$city',`State`='$state' WHERE `email`='$email'";
 $run = mysqli_query($conn,$sql);
 if ($run) {
 	// session_destroy();
 	$i = "UPDATE `uaccs` SET `img_url`= '$new_img' WHERE `email`='$email'";
 	$ress = mysqli_query($conn,$i);
 	if ($ress) {
 		move_uploaded_file($_FILES["stud_img"]["tmp_img"], "upload/".$_FILES["stud_img"]["name"]);
		header("location:logout.php");
 		
 	}
 }
 else{
 	?>
 	<script type="text/javascript">
 		alert("Edit profile is not successful... try again..");
 	</script>
 	<?php
 }

}

?>
