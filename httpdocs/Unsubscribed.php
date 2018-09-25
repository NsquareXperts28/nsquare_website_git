<?php
	require_once('class.phpmailer.php');
	require 'PHPMailerAutoload.php';
 	
	if(!isset($_GET["email"])){
		header('location:index.html');
	}
	
	$email = $_GET["email"];
	 
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {


		$to = "kirit@nsquaresolutions.com";
		$subject = "Un-subscription request";
		$body="Dear Team,<br>
		We have received un-subscription request from<br>		
		<strong>Email</strong> : {$email}<br>		
		<br><br> Thank You."; 
		
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // set mailer to use SMTP		
		$mail->Port = 25; // or 587
		$mail->Host = 'mail.Nsquarexperts.com';
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = 'info@nsquarexperts.com';                 // SMTP username
		$mail->Password = 'nsquare@123';                           // SMTP password		
		$mail->From 	= 'info@nsquarexperts.com';
		$mail->FromName = 'Nsquarexperts';
		
		$mail->addAddress($to, ''); // Add a recipient
	 	$mail->addBCC('kingshuk@nsquarexperts.com');
		$mail->addBCC('tushar.vinchurkar@nsquarexperts.com');  
		$mail->addBCC('abhinay.phuke@nsquarexperts.com');
		
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $body;
		
		if(!$mail->send()) {
		   // echo 'Message could not be sent.';
		   // echo 'Mailer Error: ' . $mail->ErrorInfo; die;
			header('location:index.html');
		} else {
		  // echo 'Message has been sent';
		    header('location:request_success.html');
		}
    
}else{
	header('location:index.html');
}
?>
 
 
