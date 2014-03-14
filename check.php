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
    <div data-role="header" data-theme="a">	
	<h1>HRS</h1>
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-delete">Home</a> 
	</div>
	<br><br>
            <div data-role="content" data-theme="a">
			  <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-role="list-divider" role="heading">
                        Check your reservation status!
                    </li>
                </ul>
				<form action="check.php" method="GET">
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="search">
                           <font color="white">Reservation Code: </font>
						   <br><br>
                        </label>
                        <input name="search" id="search" placeholder="Please input your valid reservation code.(Example: naGntY)" value="" type="text" data-theme="c"/>
                    </fieldset>
                </div>	
	<?php
	$con = mysql_connect("localhost","root","");
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}

mysql_select_db("hrs", $con);
	
	$a = $_GET['search'];
	$b = $_POST['search'];
	$qry = ("SELECT * from customers where reservationcode like '$a%'");
	$result = mysql_query($qry);
	$num_rows = mysql_num_rows($result);
	
	if($a != ""){
		if($num_rows==0){
			echo "<p align='center'></br>No Results found</p>";
		}
		else{
			echo "<p align='center'></br><table border='1'>";

		while($row = mysql_fetch_array($result)){
			echo "<font color='white'>";
			echo "<b>Details of your reservation</b>";
			echo "<br>";
			echo "</br>Code:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;" . $row['reservationcode'];
			echo "<br><br>Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;" . $row['firstname']; 
			echo "&nbsp&nbsp&nbsp;" . $row['middlename']; 
			echo "&nbsp&nbsp&nbsp;" . $row['lastname'];
			echo "</br></br>Address:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;" . $row['address'];
			echo "</br></br>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;" . $row['email'];
			echo "</br></br>Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;" . $row['date'];
			echo "</br></br>Time:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;" . $row['time'];
			echo "</br></br>Days:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;" . $row['days'];
			echo "</br></br>Room:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;" . $row['roomnumber'];
			echo "</br></br>Guests:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;" . $row['guests'];
			
		}
			echo "</font></table></p>"; 
		}
	}
	else {
		header("checkstat.php");
	}
		mysql_close($con);
?>
<input name="submit" type="submit" value="Check" data-theme="b" />
		</form>
		<div>
	</div>	
	</div>
<div data-role="footer"  data-position="fixed" data-theme="a" class="footer-docs"> 
				<h4>&copy; 2012-2013 Mobile Hotel Reservation</h4>
				</div><!-- /footer --></div><!-- /footer -->
</body>
</html>