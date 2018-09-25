<?php
 
 require_once('class.phpmailer.php');
 require 'PHPMailerAutoload.php';
 //require_once 'contents.html';



		 $to = "nilesh@nsquaresolutions.com";
         $subject = "Contact Enquiry";
		 $body="Dear Team,<br>
				we have below enquiry<br>
				First Name :".$_POST['user-name']."<br>
				Mobile :	".$_POST['user-mobile']."<br>
				Email :	".$_POST['user-email']."<br>
				Description :".$_POST['enquiry_type']."<br>
				Comment :	".$_POST['user-comment']."<br>
				<br><br> Thank You.";
		$subject='Enquiry';
		// $emailid='enquiry@nsquarexperts.com';

		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // set mailer to use SMTP
		//$mail->SMTPDebug = 4;
		//$mail->SMTPSecure = 'ssl';// secure transfer enabled REQUIRED for Gmail
		//$mail->SMTPSecure = 'tls';// secure transfer enabled REQUIRED for Gmail
		$mail->Port = 25; // or 587
		//$mail->Port = 465; // or 587
		//$mail->Port = 587; // or 587
		$mail->Host = 'mail.Nsquarexperts.com';
		$mail->SMTPAuth = true; // turn on SMTP authentication
		//$mail->Username = 'nsquarexperts28@gmail.com';                 // SMTP username
		//$mail->Password = 'nsquare2017';                           // SMTP password
		$mail->Username = 'info@nsquarexperts.com';                 // SMTP username
		$mail->Password = 'nsquare@123';                           // SMTP password
		
		$mail->From 	= 'info@nsquarexperts.com';
		$mail->FromName = 'Nsquarexperts';
		
		$mail->addAddress($to, ''); // Add a recipient
	 	$mail->addBCC('pratik@nsquarexperts.com');
		$mail->addBCC('kirit@nsquaresolutions.com');  
		
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject =$subject;
		$mail->Body    = $body;
		
		if(!$mail->send()) {
		   // echo 'Message could not be sent.';
		   // echo 'Mailer Error: ' . $mail->ErrorInfo;
			header('location:contact-us.html');
		} else {
		  // echo 'Message has been sent';
		    //header('location:contact_us.html?msg=sent');
			header('location:thankyou.html');
		}
    

?>
