<script>
$(function(){
	/** Here goes the Content Buttons for Reserve **/
		$('#next-button-to-2').click(function(){
			_UIHandler.reserve_go_to_step_2();
		});
		
	//Init for Date Picking...
	$('#datepicker').datepicker();
	
	//Time Picker
	$('#timepicker').focus(function(){
		var value = $(this).val(); //Temp Value
		if (value == ""){ $(this).val('00:00 AM'); }
	/*	
		$(this).keydown(function(){
			if (!isNumber(value[0]) && !isNumber(value[1])){
				
			}
		}); */
	});
});

function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}
</script>
<div class='container'>
<div class='row'>
	<div class='span5' align='left'>
							<strong>Please fill up your personal information below:</strong><br /><br />
							<table>
							<tr><th style="width:35%"></tr>
							<tr><td>
							Last Name: </td><td>
							<input type='text' placeholder='Last Name' /> </td></tr>
							<tr><td>
							First Name: </td><td>
							<input type='text' placeholder='First Name' /> </td></tr>
							<tr><td>
							Middle Name: </td><td>
							<input type='text' placeholder='Middle Name' /> </td></tr>
							<tr><td>
							Address: </td><td>
							<input type='text' placeholder='Town/City, Province, Country' /> </td></tr>
							<tr><td>
							Contact Number: </td><td>
							<input type='text' placeholder='Contact #' /> </td>
							</tr></td></table>
						</div>
	<div class='span4' align='left' style='margin-left:-20px;'>
							<strong> Your expected date and time of arrival: </strong><br /><br />
							<input type='text' id='datepicker' placeholder='Date (mm/dd/yyyy)' style='width:40%'/>
							<input type='text' id='timepicker' placeholder='Time (hh:mm)' style='width:40%'/>
							
							<br /><br />
							<strong> How many days do you want to stay with us and how many guests 
							do we expect? </strong><br /><br />
							<input type='text' placeholder='# of Days' style='width:40%'/>
							<input type='text' placeholder='# of Guest(s)' style='width:40%'/>
							
							<br /><br />
						<div style='float:right;'>
							<button id='next-button-to-2' class='btn btn-info'> Next 
							<i class='icon icon-chevron-right icon-white'></i></button>
						</div>
						</div>
</div>
</div>