<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

  	$connection = mysqli_connect("localhost","root","","devang") or die("Error " . mysqli_error($connection));

  	if(isset($_POST['submit']))
  	// if($_POST)
  	{
  		$email = $_POST['email'];
  		$selectquery = mysqli_query($connection,"select * from singup where email='{$email}'") or die(mysqli_error($connection));

  		$count = mysqli_num_rows($selectquery);
		// echo $count;
		$row=mysqli_fetch_array($selectquery);
		if($count>0)
		{
			// echo $row['pass'];

			//Load Composer's autoloader
			require 'vendor/autoload.php';

			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
			    $mail->isSMTP();                                      // Set mailer to use SMTP
			    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth = true;                               // Enable SMTP authentication
			    $mail->Username = 'devangvachheta123@gmail.com';                 // SMTP username
			    $mail->Password = 'devangvachheta123';                           // SMTP password
			    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			    $mail->Port = 587;                                    // TCP port to connect to

		 	    //Recipients
			    $mail->setFrom('devangvachheta123@gmail.com', 'Email demo');
			    $mail->addAddress($email, $email);     // Add a recipient
			    // $mail->addAddress('ellen@example.com');               // Name is optional
			    // $mail->addReplyTo('info@example.com', 'Information');
			    // $mail->addCC('cc@example.com');
			    // $mail->addBCC('bcc@example.com');

			    //Attachments
			    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			    //Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'Forgot Password';
			    $mail->Body    = "Hi $email Your Password is : {$row['pass']}";
			    $mail->AltBody = "Hi $email Your Password is : {$row['pass']}";;

			    $mail->send();
			    	echo 'Your Password has been sent on your Email ID';
				} 
				catch (Exception $e) 
				{
				    echo 'Email could not be sent.Mailer Error: '. $mail->ErrorInfo;
				}
			}
			else
			{
				echo "<script> alert('Email Not  Found')</script>";
			}
  	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
	<center>
		<label>Email : </label>
			<input type="text" name="email"> <br><br>
			<input type="submit" name="submit"> 
	</form>

	</center>
</body>
</html>