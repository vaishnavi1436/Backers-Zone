<?php  
	use PHPMailer\PHPMailer\PHPMailer;
	require_once 'phpmail/Exception.php';
	require_once 'phpmail/PHPMailer.php';
	require_once 'phpmail/SMTP.php';

	$mail = new PHPMailer(true);
	if (isset($_POST['submit'])) {
		$name = $_POST['first-name'];
		$last = $_POST['last-name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		try {
			
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'ctnus09@gmail.com';
			$mail->Password = 'ContactusBakerszone09';
			$mail->SMTPSource=PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port='587';
			$mail->setFrom('ctnus09@gmail.com');
			$mail->addAddress('ctnus09@gmail.com');
			$mail->isHTML(true);
			$mail->subject = 'Message recieve from Contact Page';
			$mail->Body = "<h3>First name : $name<br>Last name: $last<br>Email: $email<br>Phone number: $phone<br>Message: $message</h3>";
			$mail->send();
			header("location:ctn.php");			
		} catch (Exception $e) {
			?>
			<script type="text/javascript">
				alert("Mail not sent");
			</script>
			<?php
		}
	} 
	

?>