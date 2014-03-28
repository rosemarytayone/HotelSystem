  <!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<link href="jquery.mobile.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="css/jquery.mobile.datebox.css" />
	<script src="jquery.min.js"></script>
	<script src="jquery.mobile.min.js"></script>
	<style type="text/css"></style>
	
	<script type="text/javascript" src="js/jqm-datebox.core.js"></script>   				
	<script type="text/javascript" src="js/jqm-datebox.mode.calbox.min.js"></script>

<script type="text/javascript">
	$('#start').live('change', function() {
    $('#end').val($('#start').val());
    var temp = new Date(),
        diff = parseInt(($('#start').data('datebox').theDate - temp) / ( 1000 * 60 * 60 * 24 ));
        diffstrt = (diff * -1)-1; // If you want a minimum of 1 day between, make this -2 instead of -1
        diffend = diff + 32; // Why 11 instead of 10?  No idea...

    $('#end').data('datebox').options.minDays = diffstrt;
    $('#end').data('datebox').options.maxDays = diffend;

});

</script>
	
	
	</head>
    <body>
	
	<div data-role="page" class="type-home" style="background-image: url('images/2.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size: 100% 100%;">
    <div data-role="header" data-theme="a" data-inline="true">
	<a href="hrs_rooms.php" data-icon="arrow-l">Back</a> 	
	<h1>Hotel Reservation</h1>
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-delete">Home</a> 
	</div>
	 <div data-role="content">
				<ul data-role="listview" data-divider-theme="a" data-inset="true">
                    <li data-role="list-divider" role="heading">
                    <font size=""> Choosen room</font>
                    </li>
                </ul>
				<div class = "actions">
				<form name="myform" action="r1.php" onsubmit="return validateForm()" method="post">
                <input name="roomnumber" id="roomnumber" placeholder="Room Number" value="rm103" type="text" readOnly="true"/>
						
                <ul data-role="listview" data-divider-theme="a" data-inset="true">
                    <li data-role="list-divider" role="heading">
                       <font size=""> Please fill up your personal information: </font>
                    </li>
                </ul>       
				<input name="firstname" id="firstname" placeholder="First Name" value="" type="text" />
                <input name="middlename" id="middlename" placeholder="Middle Name" value="" type="text" />
				<input name="lastname" id="lastname" placeholder="Last Name" value="" type="text" />
                <input name="address" id="address" placeholder="Address" value="" type="text" />
                <input name="contactnumber" id="contactnumber" placeholder="Contact Number(Ex:09056441628)" value="" type="text" />        
                <input name="email" id="email" placeholder="Email" value="" type="text" />  
                       
                <div class = "actions">
				<form action="r1.php" method="post">
                <ul data-role="listview" data-divider-theme="a" data-inset="true">
                    <li data-role="list-divider" role="heading">
                        Expected date and time of arrival:
                    </li>
                </ul>	   
                <input required name="date" value= "<?php $time_zone = 'Asia/Singapore'; date_default_timezone_set($time_zone); echo date("Y-m-d"); ?>" type="date" data-role="datebox" id="date"  class="ed"  placeholder="<?php $time_zone = 'Asia/Singapore'; date_default_timezone_set($time_zone); echo date("Y-m-d"); ?>"data-options='{"minDays": 15, "maxDays": -15, "mode": "calbox"}'/>
                <input name="time" id="time" placeholder="Time" value="" type="time" />    
                
				<div class = "actions">
				<form action="r1.php" method="post">
                <ul data-role="listview" data-divider-theme="a" data-inset="true">
                    <li data-role="list-divider" role="heading">
                    <font size=""> How many days do you want to stay and number of guests? </font>
                    </li>
                </ul>		
                <input name="days" id="days" placeholder="Days" value="" type="text" />        
                <input name="guests" id="guests" placeholder="Guests" value="" type="text" />     
                </div>
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
				<h4>&copy; 2013-2014 HRS Mobile</h4>
				</div><!-- /footer --></div><!-- /footer -->
</body>
</html>