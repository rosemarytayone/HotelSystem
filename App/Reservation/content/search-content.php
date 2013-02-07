<script>
$(function(){
	$('#back-to-search-pad-btn').click(function(){
		$('#reserve-main-search-results').hide('fade', 500, function(){
			$('#haha-cont-blehh').animate({height:'150px'}, 800, function(){
				var loading = "<br /><br /><h2 align='center'>Searching... <img src='img/load.gif' /></h2>";
				$('#reserve-main-search-results').html(loading);
			
				$('#reserve-main-search-content').show('fade', 500);
			});
		});
	});
});
</script>
<button id='back-to-search-pad-btn' class='btn' style='margin-top:-15%;margin-left:-2%'>
	<i class='icon icon-chevron-left'></i>
	Back to Search Pad
</button>
<h3> Your Reservation Status.</h3>
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
			<td><b> Reservation Status:</b></td><td> <span class='label'>RESERVED</span> </td>
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
		<div class='span4'>
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
