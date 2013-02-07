<script>
$(function(){
	$('#reserve-main-search-results, #search-status').hide(0);
	$('#search-btn').click(function(){
		$('#reserve-main-search-content').hide('fade', 500, function(){
			$('#reserve-main-search-results').show('fade', 500);
			$('#haha-cont-blehh').animate({height:'150px'}, 500);
			//DO the searching...
			
			setTimeout(function(){ //Emulating network delay of 1.5sec
				var content = $('#search-pad').val();
				
				if (content == "ABC123A"){
					$('#reserve-main-search-results').hide('fade', 500, function(){
						$('#haha-cont-blehh').animate({height:'300px'}, 800, function(){
							var content = $.ajax({ url:"content/search-content.php" });
							content.done(function(data){
								$('#reserve-main-search-results').html(data).show('fade', 500);
							});
						});
					});
				} else if (content == "NET123E"){
					var link = "<div class='alert alert-error'><b>Ooops!</b> I guess your network came down. We can't contact the server as of now.";
						link += " Try contacting your service provider for more or you may refresh your browser or click here to do so.</div>";
					$('#haha-cont-blehh').animate({height:'180px'}, 500, function(){
						$('#reserve-main-search-results').append(link);
					});
				} else { //not found
					$('#reserve-main-search-results').hide('fade', 500, function(){
						$('#search-status').show(0); 
						$('#haha-cont-blehh').animate({height:'170px'}, 500);
						$('#reserve-main-search-content').show('fade', 500, function(){
							setTimeout(function(){
								$('#search-status').hide('fade', 500);
								$('#haha-cont-blehh').animate({height:'150px'}, 500);
							}, 8000);
						});
					});
				}
				
			}, 1500);
			
		});
	});

});

function animate_loading(){

}
</script>
<div class='container'>
	<div class='row'>
		<div class='span9' align='left'>
			
			<div id='reserve-main-search-content'>
				<h3> Check your reservation status here! </h3>
				Please enter your reservation code below to continue.
				<div class='input-prepend input-append'>
					<span class="add-on">
				<!-- 		<i class='icon icon-zoom-in'></i> -->
						Reservation Code: </span>
					<input type='text' id='search-pad' class='input-xlarge'  placeholder='Reservation Code (i.e, ABC123A) ' />
					
					<button id='search-btn' class='btn btn-info'>
						<i class='icon icon-zoom-in icon-white'></i> Check my reservation status! </button>
				</div>
				<div id='search-status' style='margin-top:10px;'>
					<div class='alert alert-error'>
						<b>Ooops!</b> Your given transaction code is <b>not found</b> in our database! 
						Please check your code and try again.
					</div>
				</div>
			</div>
			<div id='reserve-main-search-results'>
				<br /><br />
				<h2 align='center'>Searching... <img src='img/load.gif' /></h2>
			</div>
		</div>
	</div>
</div>