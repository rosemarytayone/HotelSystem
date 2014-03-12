<?php
	$con = mysql_connect("localhost","root","");
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}

mysql_select_db("hrs", $con);

	$a = $_POST['search'];
	$roomnumber = $_POST['roomnumber'];
	
	$qry = ("SELECT * from customers where reservationcode like '$a%'");
	$result = mysql_query($qry);
	$num_rows = mysql_num_rows($result);
	if($a!=""){
		$sql = mysql_query("UPDATE customers SET roomnumber = $roomnumber where reservationcode = $reservationcode"); 
		if($results==1){
		header("location: confirm.php");
		}else {
		header("location: hrs_rooms.php");
		}
	}
?>