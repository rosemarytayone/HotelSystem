<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="jquery.mobile.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery.min.js"></script>
<script src="jquery.mobile.min.js"></script>
<style>
table.db-table 		{ border-right:0px solid #ccc; border-bottom:0px solid #ccc; }
table.db-table th	{ background:#eee; padding:5px; border-left:0px solid #ccc; border-top:0px solid #ccc; }
table.db-table td	{ padding:5px; border-left:0px solid #ccc; border-top:0px solid #ccc; }
</style>
</head>

<body>	

<div data-role="page" class="type-home" style="background-image: url('images/2.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size: 100% 100%;">
	<div data-role="header" data-theme="a" data-position="inline">
		<h1>Hotel Reservation</h1>
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-delete">Home</a> 
	</div>
	<br><br>
	<div data-role="content" data-theme="a">	
		
            	<div data-role="content">
                
	<font color="white">
	
<?php
/**
* Simple example script using PHPMailer with exceptions enabled
* @package phpmailer
* @version $Id$
*/

require 'class.phpmailer.php';

try {
	$mail = new PHPMailer(true); //New instance, with exceptions enabled

	//$body             = file_get_contents('');
	$body             = preg_replace('/\\\\/','', $body); //Strip backslashes

	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 465;                    // set the SMTP server port
    $mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
	$mail->Username   = "hrs.mobileproject@gmail.com";     // SMTP server username
	$mail->Password   = "hrs12345";            // SMTP server password

	//$mail->IsSendmail();  // tell the class to use Sendmail

	$mail->AddReplyTo("hrs.mobileproject@gmail.com","Hotel Clerk");

	$mail->From       = "hrs.mobileproject@gmail.com";
	$mail->FromName   = "Hotel Clerk";

	include("config1.php");
	$customers = mysql_query("SELECT * FROM customers ORDER BY id ASC");
	$row = mysql_fetch_array($customers);
	$firstname=$row['firstname'];
	$middlename=$row['middlename'];
	$lastname=$row['lastname'];
	$address=$row['address'];
	$contactnumber=$row['contactnumber'];
	$email=$row['email'];
	$date=$row['date'];
	$time=$row['time'];
	$days=$row['days'];
	$guests=$row['guests'];
	$reservationcode=$row['reservationcode'];
	$roomnumber=$row['roomnumber'];

	// prepare email body text 
$body .= "<b>";
$body .= "------------------------------------------------------------------------"; 
$body .= "<br>";
$body .= "Thank you! Below is your reservation details."; 
$body .= "<br>";
$body .= "------------------------------------------------------------------------"; 
$body .= "</b>";
$body .= "<br>"; 
$body .= "<br>";
$body .= "First name: "; 
$body .= $firstname; 
$body .= "<br>"; 
$body .= "<br>";
$body .= "Middle name:  "; 
$body .= $middlename;
$body .= "<br>"; 
$body .= "<br>"; 
$body .= "Last name:  "; 
$body .= $lastname; 
$body .= "<br>"; 
$body .= "<br>";
$body .= "Address:  "; 
$body .= $address; 
$body .= "<br>";
$body .= "<br>";
$body .= "Email:  "; 
$body .= $email; 
$body .= "<br>";
$body .= "<br>"; 
$body .= "Date:  "; 
$body .= $date; 
$body .= "<br>";
$body .= "<br>";
$body .= "Time:  "; 
$body .= $time; 
$body .= "<br>";
$body .= "<br>";
$body .= "Days:  "; 
$body .= $days; 
$body .= "<br>";
$body .= "<br>";
$body .= "Guests:  "; 
$body .= $guests; 
$body .= "<br>";
$body .= "<br>";
$body .= "Reservationcode: "; 
$body .= $reservationcode; 
$body .= "<br>";
$body .= "<br>";
$body .= "Room number: "; 
$body .= $roomnumber; 
$body .= "<br>";
$body .= "<br>";
$body .= "<b>";
$body .= "------------------------------------------------------------------------"; 
$body .= "<br>";
$body .= "&copy; 2013-2014 HRS Mobile"; 
$body .= "<br>";
$body .= "------------------------------------------------------------------------"; 
$body .= "</b>";
	
	$to = $email;

	$mail->AddAddress($to);
	
	$mail->Subject  = "Hotel Reservation Details";

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML($body);

	$mail->IsHTML(true); // send as HTML

	$mail->Send();
	echo '<center><b>Your transaction details has been successfully sent to your email account.</b></center>';
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}
?>
</font>
</div>
<div>
	<form>
	<a input type="button"  href="index.php" data-theme="b" value="OK" data-ajax="false">OK</a>
	</form>
</div>
<div data-role="footer"  data-position="fixed" data-theme="a" class="footer-docs"> 
				<h4>&copy; 2013-2014 HRS Mobile</h4>
				</div><!-- /footer --></div><!-- /footer -->
</body>
</html>