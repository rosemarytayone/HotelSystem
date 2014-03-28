<!DOCTYPE HTML>
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
</div>

<div data-role="content">	

	<ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-role="list-divider" role="heading">
                        What do you want to do?
                    </li>
                    
	 				<li data-theme="c">
                        <a href="hrs_rooms.php" data-transition="flow">
                            I'll reserve a room!
                        </a>
                    </li>
                    
                    <li data-theme="c">
                        <a href="checkstat.php" data-transition="flow">
                            Reservation Details
                        </a>
                    </li>
					<li data-theme="c">
                        <a href="summary.php" data-transition="flow">
                            Booking Schedule
                        </a>
                    </li>
                </ul

</div>
<div data-role="footer"  data-position="fixed" data-theme="a" class="footer-docs"> 
	<h4>&copy; 2013-2014 HRS Mobile</h4>
</div><!-- /footer -->

</body>
</html>