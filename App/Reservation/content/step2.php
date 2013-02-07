<script>
var _myRoom;

$(function(){
	var isRoomFilterOpen = false;
	_myRoom = 0;

	$('#loading-table, #chosen-table').hide(0);

	$('#prev-button-to-1').click(function(){
		_UIHandler.reserve_go_to_step1();
	});
	
	$('#next-button-to-3').click(function(){
		_UIHandler.reserve_go_to_step3();
	});
	
	$('.reserve-btn').click(function(){
		var object = $(this).parent().parent().parent().parent();
		object.hide('fade', 500, function(){
			//object.show('fade', 500);
			//Add to Table...
			add_table();
		});
	});
	
	$('#room-view-dialog').modal({
		keyboard:true, backdrop:true, show:false
	});
	
	$('.room-viewer').click(function(){
		$('#room-view-dialog').modal('show');
	});
	
	$('#prependedInput').focus(function(){
		$(this).keydown(function(){
			//alert("keydown");
			
			$('#loading-table').show(0);
			$('#thetable').hide(0, function(){
				setTimeout(function(){ $('#thetable').show(0); $('#loading-table').hide(0); }, 500);
			});
		});
	});
	
	
});

function add_table(){
	var value = _myRoom;
	if (value == 0){
		$('#no-chosen-alert').hide('fade', 500, function(){
			$('#chosen-table').show('fade', 500);
		});
	} else {
		var data = "<tr><td> Room 69 </td><td> Php. 240.00 </td><td><span class='badge badge-important'>";
			data += "<a href='#' rel='tooltip' data-title='first tooltip'>X</a></span></td></tr>";
			
		$('#chosen-table tr:last').after(data);
	}
	
	_myRoom++;
}
</script>
<div class='container'>
<div class='row'>
	<div class='span5' align='left'>
	<!-- <span class='label label-inverse'> --> <strong>
	Here are the available rooms for you: </strong>
	<!-- </span> --> <br /><br /> 
		<table><tr><td>
			<div class="input-prepend input-append">
			  <span class="add-on"><i class='icon icon-zoom-in'></i> Search for Room No: </span>
			  <input id="prependedInput" size="16" type="text" placeholder="Filter Room No.">
			</div>
	<!--	</td><td>
			<div class="input-prepend">
			  <span class="add-on">Room Rate</span>
			  <select style='width:70%'>
					<option> Php. 200.00 </option>
					<option> Php. 250.00 </option>
					<option> Php. 300.00 </option>
					<option> Php. 350.00 </option>
			</select>
			</div> -->
		</td></tr>
		</table>
		<table class='table'>
		<thead>
			<tr>
				<th style='width:95px;'> Room No. </th><th> Price </th>
			</tr>
		</thead>
		</table>
		<div style='overflow-y:auto;height:165px;width:100%;margin-top:-15px;'>
		<div id='loading-table' align='center'>
			<img src='img/load.gif' />
		</div>
		<table id='thetable' class='table table-hover'>
		<thead></thead>
		<tbody>
			<tr class='final'>
				<td> Room 41A </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
			<tr>
				<td> Room 41B </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
			<tr>
				<td> Room 51 </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
			<tr>
				<td> Room 55 </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
			<tr>
				<td> Room 55 </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
			<tr>
				<td> Room 55 </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
		<tr>
				<td> Room 55 </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
		<tr>
				<td> Room 55 </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
			<tr>
				<td> Room 55 </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
		<tr>
		<tr>
				<td> Room 55 </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
			<tr>
				<td> Room 55 </td><td> Php.250.00 </td>
				<td>
					<div class="btn-group">
					  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
						You want to:
						<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu" style='margin-left:-20%'>
						<li class='room-viewer'><a href='#'>
							<i class='icon icon-eye-open'></i>
							View this room
						</a></li>
						<li class='reserve-btn'><a href='#'>
							<i class='icon icon-ok-circle'></i>
							Reserve me this!
						</a></li>
					  </ul>
					</div>
				</td>
			</tr>
		<tr>
		
		</tbody>	
		</table>
		</div>	
	</div>
	<div class='span4' align='left'>
			<div class='well alert alert-info'>
				<span class='label label-info'> My Room Choices </span><br /><br />
				
			<div id='no-chosen-alert' class='alert' style='width:90%'>
				<strong> Ooops! </strong> You did not chosen any rooms yet! Please 
				select a room to continue.
			</div>
			<div style='overflow-y:auto;height:120px;width:270px;'>
				<table id='chosen-table' class='table' >
						<tr>
							<th> Room Number </th><th> Price </th><th></th>
						</tr>
						<tbody>
							<tr>
								<td> Room 69 </td><td> Php. 240.00 </td>
								<td><span class='badge badge-important'>
									<a href='#' rel="tooltip" data-title="first tooltip">X</a>
								</span></td>
							</tr>
						</tbody>
				</table>
			</div>
				
				<div align='right' style='padding-left:60px;'>
					&nbsp&nbsp&nbsp &nbsp &nbsp 
					<button id='prev-button-to-1' class='btn'> 
						<i class='icon icon-chevron-left'></i> Prev</button>
					<button id='next-button-to-3' class='btn btn-info'> 
					Next <i class='icon icon-chevron-right icon-white'></i></button>
				</div>
			</div>
							
			</div>
		</div>
	</div>
</div>
		
<div id='room-view-dialog' class='modal hide fade'>
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		<h3 id="myModalLabel">Room 41A</h3>
	</div>
	<div class="modal-body">
		<div id="myCarousel" class="carousel slide" style='height:80%;width:80%;'>
			<!-- Carousel items -->
		  <div class="carousel-inner">
			<div class="active item"><img src='img/hotel/1.JPG' /></div>
			<div class="item"><img src='img/hotel/2.JPG' /></div>
		  </div>
		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
		<table class='table'>
			<tr>
				<td><b> Room Space </b><td><td> 300 square meters </td>
				<td><b> Location </b><td><td> 2nd Floor </td>
			</tr>
			<tr>
				<td><b> Room Space </b><td><td> 300 square meters </td>
				<td><b> Location </b><td><td> 2nd Floor </td>
			</tr>
		</table>
	</div>
</div>