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
            <div data-role="content">
                <ul data-role="listview" data-divider-theme="a" data-inset="true">
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
                        <input name="search" id="search" placeholder="Example: gu86kFG" value="" type="text" class="required" />
                    </fieldset>
                </div>	
			<div>
			<input name="submit" type="submit" value="Check" data-theme="b" />
		</form>
		</div>
		</div>
		<div data-role="content">

<div data-role="footer"  data-position="fixed" data-theme="a" class="footer-docs"> 
				<h4>&copy; 2013-2014 HRS Mobile</h4>
				</div><!-- /footer --></div><!-- /footer -->
</body>
</html>