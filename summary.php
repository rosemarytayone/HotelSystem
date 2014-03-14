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
 <ul data-role="listview" data-theme="b" data-inset="true">
    <li data-role="list-divider" role="heading">
        <font size=""> LIST OF ALL RESERVATION </font>
    </li>
    </ul>
	<center>
<div id="table">				
					<table cellpadding="17" cellspacing="0" border="0" class="display" id="example">
						<thead>
							<tr bgcolor="red">
								<th rowspan="2">Date</th>
								<th rowspan="2">Time</th>
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
							
						</tbody>
					</table>
					</div>
		</div>

<div data-role="footer"  data-position="fixed" data-theme="a" class="footer-docs"> 
				<h4>&copy; 2012-2013 Mobile Hotel Reservation</h4>
				</div><!-- /footer --></div><!-- /footer -->
</body>
</html>

		


