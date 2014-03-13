<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="jquery.mobile.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery.min.js"></script>
<script src="jquery.mobile.min.js"></script>
</head>

<body>	

<div data-role="page" class="type-home" style="background-image: url('images/2.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size: 100% 100%;">
	<div data-role="header" data-theme="a" data-position="inline">
		<a href="hrs_reserv1.php" data-icon="arrow-l">Back</a>
		<h1>HRS</h1>
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-delete">Home</a> 
	</div>
	<br><br>
	<div data-role="content" data-theme="a">	
		
            	<div data-role="content">
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-role="list-divider" role="heading">
                        Confirm Transaction
                    </li>
                </ul>
	<font color="white">
<?php
	$con = mysql_connect("localhost","root","");
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}

mysql_select_db("hrs", $con);

$roomnumber=$_POST['roomnumber'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$contactnumber=$_POST['contactnumber'];
$email=$_POST['email'];
$date=$_POST['date'];
$time=$_POST['time'];
$days=$_POST['days'];
$guests=$_POST['guests'];
$numchars = rand(4,15); 
$chars = explode(',','a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0,1,2,3,4,5,6,7,8,9'); 
$random=''; 
for($i=0; $i<$numchars;$i++)  { 
  $random.=$chars[rand(0,count($chars)-1)]; 
} 

$sql="INSERT INTO customers(firstname, middlename, lastname, address, contactnumber, email, date, time, days, guests, reservationcode, roomnumber)
VALUES('$firstname', '$middlename', '$lastname', '$address', '$contactnumber', '$email', '$date', '$time', '$days', '$guests', '$random', '$roomnumber')";
$result=mysql_query($sql);

if($result == 1) {
	echo "<font color='white'>";
	echo "<br>";
	echo "<b>Thank you! Below is your reservation details.</b>";
	echo "<br>";
	echo "<br>";
	echo "Room Number:"; 	echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $roomnumber;
	echo "<br>";
	echo "<br>";
	echo "Reservation Code:"; 	echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $random;
	echo "<br>";
	echo "<br>";
	echo "Reservation Date:"; 	echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $date;
	echo "<br>";
	echo "<br>";
	echo "Reservation Time:"; 	echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $time;
	echo "<br>";
	echo "<br>";
	echo "Number of Days:"; 	echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $days;
	echo "<br>";
	echo "<br>";
	echo "Number of Guests:"; 	echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $guests;
	echo "<br>";
	echo "<br>";
	echo "Name:"; 	echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $firstname; echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $middlename; echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $lastname;
	echo "<br>";
	echo "<br>";
	echo "Contact Number:"; 	echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $contactnumber;
	echo "<br>";
	echo "<br>";
	echo "Email:"; 	echo "&nbsp&nbsp&nbsp&nbsp&nbsp;"; echo $email;
	echo "</font>";
	}
	else 
		header("hrs_reserv1.php");
?>
</font>
</div>
<div>
			<a href="index.php" data-role="button" data-theme="b">Confirm</a>
			</div>
<div data-role="footer"  data-position="fixed" data-theme="a" class="footer-docs"> 
				<h4>&copy; 2012-2013 Mobile Hotel Reservation</h4>
				</div><!-- /footer --></div><!-- /footer -->
</body>
</html>