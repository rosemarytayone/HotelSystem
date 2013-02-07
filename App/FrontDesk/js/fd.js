$(function(){

	jQuery('ul.nav li.dropdown').hover(function() {
			jQuery(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn();
		}, function() { jQuery(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut();
	});

	$('#second, #check-out, #third, #search-occ, #search-rm').hide(0);
	$("#chkin").click(function(){
		$('#second, #third').hide(0);
		$('#first').show(0);
		$('#check-out, #search-occ, #search-rm').hide('fade', 500, function(){ $('#check-in').show('fade', 500);});
	});
	$("#chkout").click(function(){
		$('#first, #third').hide(0);
		$('#second').show(0);
		$('#check-in, #search-occ, #search-rm').hide('fade', 500, function(){ $('#check-out').show('fade', 500);});
	});
	$("#occ").click(function(){
		$('#first, #second').hide(0);
		$('#third').show(0);
		$('#check-in, #check-out, #search-rm').hide('fade', 0, function(){ $('#search-occ').show('fade', 500);});
	});
	$("#rm").click(function(){
		$('#first, #second').hide(0);
		$('#third').show(0);
		$('#check-in, #check-out, #search-occ').hide('fade', 0, function(){ $('#search-rm').show('fade', 500);});
	});
	
	$("#chkin1").click(function(){
		$('#second, #third').hide(0);
		$('#first').show(0);
		$('#check-out, #search-occ, #search-rm').hide('fade', 500, function(){ $('#check-in').show('fade', 500);});
	});
	$("#chkout1").click(function(){
		$('#first, #third').hide(0);
		$('#second').show(0);
		$('#check-in, #search-occ, #search-rm').hide('fade', 500, function(){ $('#check-out').show('fade', 500);});
	});
	$("#occ1").click(function(){
		$('#first, #second').hide(0);
		$('#third').show(0);
		$('#check-in, #check-out, #search-rm').hide('fade', 0, function(){ $('#search-occ').show('fade', 500);});
	});
	$("#rm1").click(function(){
		$('#first, #second').hide(0);
		$('#third').show(0);
		$('#check-in, #check-out, #search-occ').hide('fade', 0, function(){ $('#search-rm').show('fade', 500);});
	});	
	
	$("#chkin2").click(function(){
		$('#second, #third').hide(0);
		$('#first').show(0);
		$('#check-out, #search-occ, #search-rm').hide('fade', 500, function(){ $('#check-in').show('fade', 500);});
	});
	$("#chkout2").click(function(){
		$('#first, #third').hide(0);
		$('#second').show(0);
		$('#check-in, #search-occ, #search-rm').hide('fade', 500, function(){ $('#check-out').show('fade', 500);});
	});
	$("#occ2").click(function(){
		$('#first, #second').hide(0);
		$('#third').show(0);
		$('#check-in, #check-out, #search-rm').hide('fade', 0, function(){ $('#search-occ').show('fade', 500);});
	});
	$("#rm2").click(function(){
		$('#first, #second').hide(0);
		$('#third').show(0);
		$('#check-in, #check-out, #search-occ').hide('fade', 0, function(){ $('#search-rm').show('fade', 500);});
	});
	
	$('a.login-window').click(function() {
		
                //Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border see css style
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	/*$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$("#ccode").val("");
		$("#name").val("Name");
		$("#room").val("");
		$('#mask').remove();  
	}); 
	return false;
	});*/
	
	$("#confirm_btn").click(function(){ 
		var name = $("#name").val();
		var room = $("#room").val();
		
		if(name=="Name"){
			$().toastmessage('showToast',{text:'Enter a valid code', position:'middle-right',type:'error'});
		}else if((name!="Name")&&(room.length==0)){
			$().toastmessage('showToast',{text:'Enter a room number', position:'middle-right',type:'error'});
		}else{ 
			$().toastmessage('showToast',{text:'Code Confirmed!', position:'middle-right',type:'success'});
		}
	});
	
	$("#cancel_btn").click(function(){
		$('#mask , .login-popup').fadeOut(300 , function() {
				$("#ccode").val("");
				$("#name").val("Name");
				$("#room").val("");
				$('#mask').remove();  
			});
			return false;
	});
	
	$('#check_out_btn').click(function(){ 
		var r = $('#room_out').val();
		if(r.length==0){
			$().toastmessage('showToast',{text:'Enter a valid room number', position:'middle-right',type:'error'});
		}else if(r == "asdf"){
			$().toastmessage('showToast',{text:'Checked out!', position:'middle-right',type:'success'});
			$("#room_out").val("");
		}else{
			$().toastmessage('showToast',{text:'Invalid room number', position:'middle-right',type:'error'});
		}
	});
	
	var code = $('#ccode').val();

	$('#ccode').bind('keyup keypress blur', function() {
		code = $(this).val();
		if(code=="qwerty"){
			$('#name').val("Sayber Crime");
		}
		else{ $('#name').val("Name");}
	});
	
	$("#logout").click(function(){
		window.open("index.php","_self");
	});
	
	$("#in-btn").click(function(){
		var l = $("#lname").val();
		var f = $("#fname").val();
		var m = $("#mname").val();
		var a = $("#addr").val();
		var c = $("#cnum").val();
		var b = $("#rnum").val();
		
		if((l.length&&f.length&&m.length&&a.length&&c.length&&b.length)==0){
			$().toastmessage('showToast',{text:'All fields are required', position:'middle-right',type:'error'});
		}else
			$().toastmessage('showToast',{text:'Checked in!', position:'middle-right',type:'success'});
			$("#lname").val("");
			$("#fname").val("");
			$("#mname").val("");
			$("#addr").val("");
			$("#cnum").val("");
			$("#rnum").val("");		
	});
	
});
