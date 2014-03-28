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
	<h1>Hotel Reservation</h1>
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-delete">Home</a> 
	</div>
	<br><br>
<div data-role="content" data-theme="b">
 <ul data-role="listview" data-divider-theme="a" data-inset="true">
    <li data-role="list-divider" role="heading">
        <font size=""> LIST OF ALL RESERVATION </font>
    </li>
	
    </ul>
	<center>
<div id="table">				
					<table cellpadding="10" cellspacing="0" border="0" class="display" id="example">
						<thead>
							<tr bgcolor="skyblue">
								<th rowspan="2">Date (Y-M-D)</th>
								<th rowspan="2">Time (24hrs)</th>
								<th rowspan="2">Room</th>
								<th rowspan="2">Days</th>
								<th rowspan="2">Guests</th>
								<th colspan="3">Customer</th>
								<th rowspan="2">Address</th>
								<th rowspan="2">Contact Number</th>
								<th rowspan="2">Email</th>
								<th rowspan="2">Reservation Code</th>
							
								
							</tr>
						</thead>
					
						<tbody>
						</center>
							<?php
								include("config.php");
							
								$customers = mysql_query("SELECT * FROM customers") ?>
					
							<?php
			  
								$db2 = mysql_query("SELECT id FROM customers");
							
									if (isset($_GET['id'])) {
										$id = $_GET['id'];
								
									$db2 = "DELETE FROM customers WHERE id = '$id'";
									
										if (@mysql_query($db2)) {
		
										} else {
		
									}
								}
		
								$db = mysql_query("SELECT * FROM customers ORDER BY id ASC");
									while($row = mysql_fetch_array($customers)){ 
					
										echo '<tr><b>';
											echo '<td><center>'.$row['date'].'</center></td>';
											echo '<td><center>'.$row['time'].'</center></td>';
											echo '<td><center>'.$row['roomnumber'].'</center></td>';
											echo '<td><center>'.$row['days'].'</center></td>';
											echo '<td><center>'.$row['guests'].'</center></td>';
											echo '<td><center>'.$row['firstname'].'</center></td>'; echo '<td><center>'.$row['middlename'].'</center></td>'; echo '<td><center>'.$row['lastname'].'</center></td>';
											echo '<td><center>'.$row['address'].'</center></td>';
											echo '<td><center>'.$row['contactnumber'].'</center></td>';
											echo '<td><center>'.$row['email'].'</center></td>';
											echo '<td><center>'.$row['reservationcode'].'</center></td>';
										echo '</tr></b>';
							
								}
							?>
						</tbody>
					</table>
					</div>
		</div>

<div data-role="footer"  data-position="fixed" data-theme="a" class="footer-docs"> 
				<h4>&copy; 2013-2014 HRS Mobile</h4>
				</div><!-- /footer --></div><!-- /footer -->
</body>
</html>

		


