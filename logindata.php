<?php
	//return $conn variable.
if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fb_Id = $_POST['fb_Id'];
		$profilePictureUrl = $_POST['profilePictureUrl'];

		$conn = mysqli_connect("localhost","root","","projectdb");

		$query = "INSERT INTO uaccs(fname,phno,password,cpassword) VALUES ('".$name."','".$email."','".$fb_Id."','".$profilePictureUrl."')";
		$result = mysqli_query($conn , $query) or die(mysqli_error());
		if ($result) {
			// header("LOCATION: fblogin.php?success");
			echo "successful entry";
		}else{
			echo "Not success";
		}

}else{
	echo "Try again Later";
}

 ?> 