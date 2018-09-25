     <?php
		error_reporting(1);
		
	 
		
         $to = "enquiry@Nsquarexperts.com";
         //$to = "pritam.kirdat@mobintia.in";
         $subject = "Contact Enquiry";
         $message	= $_POST['user-name']." ".$_POST['user-lastname']." is interested in ".$_POST['enquiry_type'];
       //  $message = $_POST['message']."      Contact Details: email:- ".$_POST['user-email']." Contact No:- ".$_POST['phone'];
         $header = "From:".$_POST['user-email']." \r\n";
         $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
	//	header('Location: http://satyajeetgroup.com/demo/career.php');
		
      ?>