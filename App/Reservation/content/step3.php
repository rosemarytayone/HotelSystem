<script>
$(function(){
	
	$('#back-to-2-btn').click(function(){
		_UIHandler.reserve_go_to_step_2();
	});
	
	$('#confirm-button').click(function(){
		$('#confirm-dialog').modal('show');
		setTimeout(function(){
			var data = "<h3> Reservation success! </h3><p> Please take note of your reservation code. You will be";
				data += " using this to transact at the front-desk when you arrive.<br /><br />Your <b>";
				data += "reservation code</b> is: <b> ABC123A</b></p><a href='Javascript:back_now()' c	lass='btn info'>";
				data += "Click here to close</a><br /><br />";
		
			$('#confirm-content').html(data);
		}, 2000);
	});

});

function back_now(){
	$('#confirm-dialog').modal('hide');
	$('#room-pane').hide('fade', 500, function(){
		$('#welcome-pane').show('fade', 500);
	});
}
</script>
<h4> Please confirm your transaction details below: </h4>
<ul class="nav nav-tabs" id="myTab">
  <li class='active'><a href="#home" data-toggle='tab'> Basic Info </a></li>
  <li><a href="#profile" data-toggle='tab'> Customer Information </a></li>
  <li><a href="#room" data-toggle='tab'> Room and Billing </a></li>
</ul>
 
<div class="tab-content">
  <div class="tab-pane active" id="home">
	<table class='table'>
		<tr>
			<td><b> Reservation Code:</b></td><td colspan=3> ABC123A </td>
			<td><b> Reservation Status:</b></td><td> <span class='label'>NEW</span> </td>
		</tr>
		<tr>
			<td><b> Customer Name:</b></td><td colspan=3> Bandiola, Kieth Mark S. </td>
			<td><b> Day(s) until arrival:</b></td><td> <span class='label'>12</span> </td>
		</tr>
		<tr>
			<td><b> # of guest(s) expected:</b></td><td> <span class='label'>2</span> </td>
			<td><b> # of room(s) reserved</b></td><td> <span class='label'>1</span> </td>
			<td><b> # of day(s) of stay</b></td><td> <span class='label'>3</span></td>
	
	</table>
  </div>
  <div class="tab-pane" id="profile">
	<table class='table'>
		<tr>
			<td><b> Last Name:</b></td><td> Bandiola </td>
			<td><b> First Name:</b></td><td> Kieth Mark </td>
			<td><b> Middle Name:</b></td><td> Sevilla </td>
		</tr>
		<tr>
			<td><b> Address:</b></td><td colspan=3> Pinamaloy, Don Carlos, Bukidnon </td>
			<td><b> Contact #:</b></td><td> 09057177249 </td>
		</tr>
	</table>
  </div>
  <div class="tab-pane" id="room">
	<div class='row'>
		<div class='span5'>
			<h5> Room(s) reserved </h5>
			<table class='table'>
				<tr>
					<th> Room Name </th>
					<th> Room Rate </th>
					<th> Location </th>
				</tr>
				<tr>
					<td> Room 68 </td>
					<td> Php. 250.00 </td>
					<td> 3rd Floor </td>
				</tr>
			</table>
		</div>
		<div class='span4' style='float:right;margin-top:-20%;'>
			<div class='alert alert-info'>
				<h5> Billing Info </h5>
				<table class='table'>
					<tr>
						<td> Room Usage (x 3 days) </td>
						<td> Php. 750.00 </td>
					</tr>
				</table>
			</div>
		</div>
  </div>
</div>
			<div class="btn-group " >
				<button id='back-to-2-btn' class='btn'>
					<i class='icon icon-chevron-left'></i>Back to Previous</button>
				<button id='confirm-button' class='btn btn-info'>
					<i class='icon icon-check icon-white'></i> Confirm Transaction</button>
			</div>
	</div>
</div>
<div id='confirm-dialog' class='modal hide fade'>
	<div class="modal-header">
	</div>
	<div id='confirm-content' class="modal-body">
		<h3> Submitting transaction... <img src='img/load.gif' /></h3>
	</div>
</div>