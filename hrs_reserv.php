<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<link href="jquery.mobile.min.css" rel="stylesheet" type="text/css"/>
	<script src="jquery.min.js"></script>
	<script src="jquery.mobile.min.js"></script>
	<style type="text/css"></style>
	
	
	</head>
    <body>
	
	<div data-role="page" class="type-home" style="background-image: url('images/2.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size: 100% 100%;">
    <div data-role="header" data-theme="a" data-inline="true">
	<a href="hrs_rooms.php" data-icon="arrow-l">Back</a> 	
	<h1>HRS</h1>
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-delete">Home</a> 
	</div>
	 <div data-role="content">
				<ul data-role="listview" data-divider-theme="a" data-inset="true">
                    <li data-role="list-divider" role="heading">
                    <font size=""> Choosen room</font>
                    </li>
                </ul>
				<div class = "actions">
				<form name="myform" action="r1.php"  method="post">
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="roomnumber">
						<font color="white">Room Number: </font>
						<br><br>
                        </label>
                        <input name="roomnumber" id="roomnumber" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
                <ul data-role="listview" data-divider-theme="a" data-inset="true">
                    <li data-role="list-divider" role="heading">
                       <font size=""> Please fill up your personal information: </font>
                    </li>
                </ul>
				
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="firstname">
                          <font color="white">First Name: </font>
						  <br><br>
                        </label>
                        <input name="firstname" id="firstname" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="middlename">
                          <font color="white">Middle Name: </font>
						  <br><br>
                        </label>
                        <input name="middlename" id="middlename" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
				<div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="lastname">
                         <font color="white">Last Name: </font>
						 <br><br>
                        </label>
                        <input name="lastname" id="lastname" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="address">
                          <font color="white">Address: </font>
						  <br><br>
                        </label>
                        <input name="address" id="address" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
				 <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="contactnumber">
                          <font color="white">Contact: </font>
						  <br><br>
                        </label>
                        <input name="contactnumber" id="contactnumber" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
			<div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="email">
                          <font color="white">Email: </font>
						  <br><br>
                        </label>
                        <input name="email" id="email" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
				<div class = "actions">
				<form action="r1.php" method="post">
                <ul data-role="listview" data-divider-theme="a" data-inset="true">
                    <li data-role="list-divider" role="heading">
                        Expected date and time of arrival:
                    </li>
                </ul>	
             <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="date">
						<font color="white">Date: </font>
						<br><br>
                        </label>
                        <input name="date" id="date" placeholder="" value="" type="date" />
                    </fieldset>
                </div>
				 <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="time">
						<font color="white">Time: </font>
						<br><br>
                        </label>
                        <input name="time" id="time" placeholder="" value="" type="time" />
                    </fieldset>
                </div>
				<div class = "actions">
				<form action="r1.php" method="post">
                <ul data-role="listview" data-divider-theme="a" data-inset="true">
                    <li data-role="list-divider" role="heading">
                    <font size=""> How many days do you want to stay and number of guests? </font>
                    </li>
                </ul>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="days">
						<font color="white">Number of days: </font>
						<br><br>
                        </label>
                        <input name="days" id="days" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="guests">
                           <font color="white">Number of guests: </font>
						   <br><br>
                        </label>
                        <input name="guests" id="guests" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
            </div>
			<div>
			</div>
			<div>
			<input  id="check" name="submit" type="submit" value="Submit" data-rel="dialog" data-theme="b" />
			</div>
		</form>
		</div>
		</div>
<script type="text/javascript">
 
$('#check').click(function() {
 
if ( $('#firstname').val() == '' )
{
    alert('Please fill out all required fields.Thank you');
	return false
}
if ( $('#middlename').val() == '' )
{
    alert('lease fill out all required fields.Thank you');
	return false
}if ( $('#lastname').val() == '' )
{
    alert('lease fill out all required fields.Thank you');
	return false
}
if ( $('#address').val() == '' )
{
    alert('Please fill out all required fields.Thank you');
	return false
}
if ( $('#contactnumber').val() == '' )
{
    alert('Please fill out all required fields.Thank you');
	return false
}
if ( $('#email').val() == '' )
{
    alert('Please fill out all required fields.Thank you');
	return false
}
if ( $('#date').val() == '' )
{
    alert('Please fill out all required fields.Thank you');
	return false
}
if ( $('#time').val() == '' )
{
    alert('Please fill out all required fields.Thank you');
	return false
}
if ( $('#days').val() == '' )
{
    alert('Please fill out all required fields.Thank you');
	return false
}
if ( $('#guests').val() == '' )
{
    alert('Please fill out all required fields.Thank you');
	return false
}
});
 
</script>
<div data-role="footer"  data-position="fixed" data-theme="a" class="footer-docs"> 
				<h4>&copy; 2012-2013 Mobile Hotel Reservation</h4>
				</div><!-- /footer --></div><!-- /footer -->
</body>
</html>