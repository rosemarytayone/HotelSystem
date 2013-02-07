<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hotel 123</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<style type="text/css">
	  body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
</style>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.24.custom.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
	$('#user').focus();
	$('#second, #third, #about').hide(0);
	$("#hme").click(function(){
		$('#second, #third').hide(0);
		$('#first').show(0);
		$('#about').hide('fade', 500, function(){ $('#home').show('fade', 500);});
	});
	$("#abt").click(function(){
		$('#first, #third').hide(0);
		$('#second').show(0);
		$('#home').hide('fade', 500, function(){ $('#about').show('fade', 500);});
	});
	$("#hme1").click(function(){
		$('#second, #third').hide(0);
		$('#first').show(0);
		$('#about').hide('fade', 500, function(){ $('#home').show('fade', 500);});
	});
	$("#abt1").click(function(){
		$('#first, #third, #home').hide('fade', 0, function(){ $('#about, #second').show('fade', 500);});
		$('#first, #third').hide(0);
		$('#second').show(0);
		$('#home').hide('fade', 500, function(){ $('#about').show('fade', 500);});
	});
	$("#login").click(function(){
		var user = $("#user").val();
		var pass = $("#pass").val();
		if((user=="test")&&(pass=="test")){
			window.open("main.php",'_self');
		}else alert("Invalid account!"); return false;
	});
});
</script>


</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top"> 
  <div class="navbar-inner"> 
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
      <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
      </a> <a class="brand" href="#">Hotel 123</a> 
      <div class="nav-collapse collapse"> 
        <ul class="nav" id="first">
          <li class="active" id="hme"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
          <li id="abt"><a href="#"><i class="icon-info-sign icon-white"></i> About</a></li>
          <li id="hlp"><a href="#"><i class="icon-question-sign icon-white"></i> Help</a></li>
        </ul>
		<ul class="nav" id="second">
          <li id="hme1"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
          <li class="active" id="abt1"><a href="#"><i class="icon-info-sign icon-white"></i> About</a></li>
          <li id="hlp1"><a href="#"><i class="icon-question-sign icon-white"></i> Help</a></li>
        </ul>
		<ul class="nav" id="third">
          <li id="hme2"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
          <li class="active" id="abt2"><a href="#"><i class="icon-info-sign icon-white"></i> About</a></li>
          <li id="hlp2"><a href="#"><i class="icon-question-sign icon-white"></i> Help</a></li>
        </ul>
        <form class="navbar-form pull-right">
          <input id="user" class="span2" type="text" placeholder="Employee ID">
          <input id="pass" class="span2" type="password" placeholder="Password">
          <button class='btn btn-info' id="login">Log in</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="home">
<div class="container"> 
  <div class="hero-unit"> 
    <h1>Hotel 123 Front Desk</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
	nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
	officia deserunt mollit anim id est laborum.</p>
    <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
  </div>
  <footer> 
  <p>&copy; CSc 186 - Human-Computer Interaction 2012</p>
  </footer>
</div>
</div>

<div id="about">
<div class="container">
<div class="hero-unit"> 
	<h1>About</h1>
		<p>This system is originally a private software project by one of the proponents
			to a specific pension house in Iligan City. Currently, the development track is still at
			the requirements' analysis.  But the current proponents, on the need of a current project
			for this, have agreed to choose this as their final project for some reasons.<br><br><br><br><br></p>
</div>
<footer> 
	<p>&copy; CSc 186 - Human-Computer Interaction 2012</p>
</footer>
</div> 
</div>

</body>
</html>
