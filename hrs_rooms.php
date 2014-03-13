<!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="jquery.mobile.min.css" rel="stylesheet" type="text/css"/>
	<script src="jquery.min.js"></script>
	<script src="jquery.mobile.min.js"></script>
	<script type="text/javascript">$(document).bind("mobileinit", function(){$.extend(  $.mobile , {autoInitializePage: false})});</script>
    </head>
    <body>
	
		<div data-role="page" class="type-home" style="background-image: url('images/2.jpg'); background-attachment: no-fixed; background-repeat: repeat; background-size: 100% 100%;">
		
		<div data-role="header" data-theme="a" data-position="inline">
		<h1>HRS</h1>
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-delete">Home</a> 
		</div>
			
		<div data-role="content">
        <ul data-role="listview">
            <li><a href="#rm100" data-rel="popup"  data-position-to="window" data-transition="fade"><img class="rooms" src="images/5.jpg" alt="ROOM" height="100px" width="100px"><h2>Room 100</h2><p>Php 500.00</p></a></li>
					
					<div data-role="popup" id="rm100" data-overlay-theme="b" data-theme="a" data-corners="true">
						<center>
						<h5>Room Space: 100 sq. meters</h5>
						<h5>Capacity: 2 persons</h5></center>
						<a href="hrs_rooms.php" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="rooms" src="images/5.jpg" style="max-height:312px; alt="ROOM" >
						<a href="hrs_reserv.php" data-rel=""  data-position-to="" data-transition="" type="button" data-theme="b">Reserve</a>
					</div>
					
			<li><a href="#rm101" data-rel="popup"  data-position-to="window" data-transition="fade" ><img class="rooms" src="images/3.jpg" alt="ROOM" height="100px" width="100px"><h2>Room 101</h2><p>Php 1,000.00</p></a></li>	
					
					<div data-role="popup" id="rm101" data-overlay-theme="b" data-theme="a" data-corners="true">
					<center>
					<h5>Room Space: 100 sq. meters</h5>
					<h5>Capacity: 2 persons</h5></center>
					<a href="hrs_rooms.php" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="rooms" src="images/3.jpg" style="max-height:312px; alt="ROOM" >
					<a href="hrs_reserv.php" data-rel=""  data-position-to="" data-transition="" type="button" data-theme="b">Reserve</a>
					</div>
					
			<li><a href="#rm102" data-rel="popup"  data-position-to="window" data-transition="fade"><img class="rooms" src="images/4.jpg" alt="ROOM" height="100px" width="100px"><h2>Room 102</h2><p>Php 1,500.00</p></a></li>
				
					<div data-role="popup" id="rm102" data-overlay-theme="b" data-theme="a" data-corners="true">
					<center>
					<h5>Room Space: 100 sq. meters</h5>
					<h5>Capacity: 2 persons</h5></center>
					<a href="hrs_rooms.php" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="rooms" src="images/4.jpg" style="max-height:512px; alt="ROOM" >
					<a href="hrs_reserv.php" data-rel=""  data-position-to="" data-transition="" type="button" data-theme="b">Reserve</a>
					</div>
					
			<li><a href="#rm103" data-rel="popup"  data-position-to="window" data-transition="fade"><img class="rooms" src="images/6.jpg" alt="ROOM" height="100px" width="100px"><h2>Room 103</h2><p>Php 2,000.00</p></a></li>
				
					<div data-role="popup" id="rm103" data-overlay-theme="b" data-theme="a" data-corners="true">
					<center><h5>Room Space: 100 sq. meters</h5>
					<h5>Capacity: 2 persons</h5></center>
					<a href="hrs_rooms.php" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="rooms" src="images/6.jpg" style="max-height:512px; alt="ROOM" >
					<a href="hrs_reserv.php" data-rel=""  data-position-to="" data-transition="" type="button" data-theme="b">Reserve</a>
					</div>
        </ul>
		</div>
			
			<div data-role="footer" data-position="fixed">
			<h4>&copy; Hotel Reservation System</h4></div>
           
        
    </body>
</html>
