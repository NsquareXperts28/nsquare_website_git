<?php

require_once('class.phpmailer.php');
require 'PHPMailerAutoload.php';

if (empty($_POST)) {
    header('location:index.html');
} else {

    $name = stripslashes($_POST["name"]);
    $email = stripslashes($_POST["email"]);
    $comments = stripslashes($_POST["comments"]);

    $to = "hr@nsquarexperts.com";
    $subject = "Complaint registered.";
    $body = "Hello Team,<br>"
            . "We have received complaint<br>";

    if (empty($comments)) {
        header('location:index.html');
    }

    if (!empty($name)) {
        $body .= "<strong>Name</strong>: {$name},<br>";
    }
    if (!empty($email)) {
        $body .= "<strong>Email</strong>: {$email},<br>";
    }

    $body .= "<strong>Complaint</strong> : {$comments}<br>		
		<br><br> Thank You.";

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // set mailer to use SMTP		
    $mail->Port = 25; // or 587
    $mail->Host = 'mail.Nsquarexperts.com';
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = 'info@nsquarexperts.com';                 // SMTP username
    $mail->Password = 'nsquare@123';                           // SMTP password		
    $mail->From = 'info@nsquarexperts.com';
    $mail->FromName = 'Nsquarexperts Complaints';

    $mail->addAddress($to, ''); // Add a recipient 
	$mail->addBCC('nilesh@nsquaresolutions.com');
	
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $body;

    if (!$mail->send()) {
        header('location:index.html');
    } else {
        header('location:success.html');
    }
}
?>
 

