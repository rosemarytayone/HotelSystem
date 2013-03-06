<!DOCTYPE html>
<html>
<head>
	<title> Hotel Reservation System </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel='stylesheet' href='css/flick/jquery-ui-1.8.24.custom.css' />
	<link rel='stylesheet' href='css/bootstrap.min.css' />
	<script type='text/javascript' src='js/jquery-1.8.2.min.js' ></script>
	<script type='text/javascript' src='js/jquery-ui-1.8.24.custom.min.js' ></script>
	<script type='text/javascript' src='js/bootstrap.min.js'></script>
	
	<link rel='stylesheet' href='css/styles.css' />
	<script type='text/javascript'>
	$(function() {
		$('#room-pane, #reserve-pane, #welcome-pane, #parent-daw').hide(0);
		
		//Clicking on Reserve Room Button on Main Page...
		$('#room-btn').click(function(){
			$('#welcome-pane').hide('fade', 500, function(){ 
				//Load Content using AJAX...
				var pageRequest = $.ajax({ url:"content/step1.php" });
				pageRequest.done(function(data){
					$('#room-info-container').html(data);
					$('#room-notif').html("<i class='icon icon-chevron-right'></i> Step 1/3");
					$('#room-pane').show('fade', 500);
				});
			});
		});
		//Clicking on Check Reservation
		$('#res-btn').click(function(){
			$('#welcome-pane').hide('fade', 500, function(){ 
				//Load Content using AJAX...
				var pageRequest = $.ajax({ url:"content/search.php" });
				pageRequest.done(function(data){
					$('#reserve-info-container').html(data);
					//$('#room-notif').html("<i class='icon icon-chevron-right'></i> Step 1/3");
					$('#reserve-pane').show('fade', 500);
					
					$('#haha-cont-blehh').animate({height:'150px'}, 500);
				});
			});
		});
		
		$('#quit-btn-daw').click(function(){
			var cont = $('#parent-daw').val(); var object = $(cont);
			$('#confirm-exit-dialog').modal('hide');
			object.hide('fade', 500, function(){ $('#welcome-pane').show('fade', 500)});
		});
		
		$('.back-btn').click(function(){
			var parent = $(this).parent().parent().parent().attr('id');
			
			var id = '#'+parent; var object = $(id);
			if (_UIHandler.hasTransaction){
				$('#confirm-exit-dialog').modal('show');
				$('#parent-daw').val(id);
				
				//Test pa ni... TODO: Use jQuery UI Dialog
				//var conf = confirm("There is a transaction going on! Are you sure do you want to quit?")
				//if (conf){
				//	_UIHandler.hasTransaction = false;
				//	object.hide('fade', 500, function(){ $('#welcome-pane').show('fade', 500); }); 
				//}
				
			} else { object.hide('fade', 500, function(){ $('#welcome-pane').show('fade', 500); }); }
		});
		
		//Entrance... bow
		$("#welcome-pane").show('fade', 1200);
		
		/** Here goes the Content Buttons for Reserve **/
		$('#next-button-to-2').click(function(){
			_UIHandler.reserve_go_to_step_2();
		});
		
	});
	
	var _UIHandler = {
	
		hasTransaction: false,
		
		clean_all: function(){
			$('#room-pane, #reserve-pane').html("");
		},
		/** Here starts the actions for "Reserve A Room" function **/
		reserve_go_to_step_2: function(){
			//Send All Functions to PHP SESSION
			
			//Set Global Transaction to TRUE...
			_UIHandler.hasTransaction = true;
			
			//Animate Out and Load AJAX Item...
			$('#room-notif').hide('slide', 1000);
			$('#room-info-container').hide('slide', 1000, function(){
				var _pageReq = $.ajax({ url:'content/step2.php' });
				_pageReq.done(function(data){
					$('#room-info-container').html(data).show('slide', 1000);
					$('#room-notif').show('slide', 1000).html("<i class='icon icon-chevron-right'></i> Step 2/3");
				});
			});
		},
		reserve_go_to_step1: function(){
			
			//Send All Functions to PHP SESSION
			
			//Animate Out and Load AJAX Item...
			$('#room-notif').hide('slide', 1000);
			$('#room-info-container').hide('slide', 1000, function(){
				var _pageReq = $.ajax({ url:'content/step1.php' });
				_pageReq.done(function(data){
					$('#room-info-container').html(data).show('slide', 1000);
					$('#room-notif').show('slide', 1000).html("<i class='icon icon-chevron-right'></i> Step 1/3");
				});
			});
		}, 
		reserve_go_to_step3: function(){
			
			//Send All Functions to PHP SESSION
			
			//Animate Out and Load AJAX Item...
			$('#room-notif').hide('slide', 1000);
			$('#room-info-container').hide('slide', 1000, function(){
				var _pageReq = $.ajax({ url:'content/step3.php' });
				_pageReq.done(function(data){
					$('#room-info-container').html(data).show('slide', 1000);
					$('#room-notif').show('slide', 1000).html("<i class='icon icon-chevron-right'></i> Step 3/3");
				});
			});
		}
	
	}
	
	</script>
</head>
<body>

<div id='main-container'>
	
	<div id='main-pane' align='center'>
		<div id='welcome-pane'>
			<div id='main-page-title'> &nbsp </div>
			<div id='commentator'>
				Please select from below to start! 
			</div>
			<button id='room-btn' class='btn'>
				<i class='icon icon-edit'></i> I'll reserve a room!</button>
			<button id='res-btn' class='btn'>
				<i class='icon icon-list-alt'></i> Check my reservation.</button>
		</div>
		<div id='room-pane'>
			<div id='room-pane-content'>
				<div id='room-pane-top'>
					<button class='btn back-btn' style='margin-top:6%'><i class='icon icon-remove-sign'></i></button>
		<!--			<span style='float:right;font-size:250%;margin-top:5px;margin-right:10px;font-family:Myriad Pro;color:whiteSmoke;'>
						Reserve a Room
					</span> -->
				</div>
				<div align='left' style='margin-bottom:-10px;margin-left:-20px;'>
					<ul id='tabber' class="nav nav-pills" >
						<li><a href='#'> 
							<div id='room-notif'>
							<i class='icon icon-chevron-right'></i>
								Step 1/3
							</div></a>

						</li>
					</ul>
				</div>
				<div class='well row' style='height:300px;'>
					<div id='room-info-container'>
						
					</div>
				</div>
			</div>
		</div>
		<div id='reserve-pane' style='width:70%;margin-top:5%;'>
			<div>
				<div id='room-pane-top'>
					<button class='btn back-btn'><i class='icon icon-remove-sign'></i></button>
				</div>
				<div id='haha-cont-blehh' class='well row' style='height:150px;'>
					<div id='reserve-info-container'>
						
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- Dialogs -->
<div id='confirm-exit-dialog' class='modal hide fade'>
	<div class="modal-header">
		<h3 id="myModalLabel">Transaction going on.</h3>
	</div>
	<div id='confirm-content' class="modal-body" align='center'>
		<strong>Wait! There is a transaction going on! Are you sure do you want to quit?<br /><br /></strong>
				<button id='quit-btn-daw' class='btn btn-large btn-info' style='width:45%'>
					<i class='icon icon-check icon-white'></i> Yes</button>
				<button class='btn btn-large' data-dismiss="modal" style='width:45%'>
					<i class='icon icon-ban-circle'></i> No</button>
		<input type='text' id='parent-daw' hidden='hidden' />
	</div>
</div>

</body>
</html>