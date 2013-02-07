<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hotel 123</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/pop.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery.toastmessage.css" media="screen" />

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.24.custom.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/fd.js"></script>
<script type="text/javascript" src="js/jquery.toastmessage.js"></script>


</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top"> 
  <div class="navbar-inner"> 
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
      <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
      </a> <a class="brand" href="#">Hotel 123</a> 
      <div class="nav-collapse collapse"> 
        <ul class="nav" id="first">
          <li class="active" id="chkin"><a href="#"><i class="icon-check icon-white"></i> Check-in</a></li>
          <li id="chkout"><a href="#">Check-out</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reservations 
            <b class="caret"></b></a> 
            <ul class="dropdown-menu">
              <li><a href="#confirm-box" class="login-window"><i class="icon-ok-sign icon-black"></i> Confirm</a></li>
              <li><a href="#oldreserve"><i class="icon-folder-open icon-black"></i> Manage</a></li>
            </ul>
          </li>
		  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search icon-white"></i> Search
            <b class="caret"></b></a> 
            <ul class="dropdown-menu">
              <li id="occ"><a href="#occupant"><i class="icon-user icon-black"></i> Occupant</a></li>
              <li id="rm"><a href="#room"><i class="icon-home icon-black"></i> Room</a></li>
            </ul>
          </li>
        </ul>
		<ul class="nav" id="second">
          <li id="chkin1"><a href="#"><i class="icon-check icon-white"></i> Check-in</a></li>
          <li class="active" id="chkout1"><a href="#"> Check-out</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reservations 
            <b class="caret"></b></a> 
            <ul class="dropdown-menu">
              <li><a href="#confirm-box" class="login-window"><i class="icon-ok-sign icon-black"></i> Confirm</a></li>
              <li><a href="#oldreserve"><i class="icon-folder-open icon-black"></i> Manage</a></li>
            </ul>
          </li>
		  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search icon-white"></i> Search
            <b class="caret"></b></a> 
            <ul class="dropdown-menu">
              <li id="occ1"><a href="#occupant"><i class="icon-user icon-black"></i> Occupant</a></li>
              <li id="rm1"><a href="#room"><i class="icon-home icon-black"></i> Room</a></li>
            </ul>
          </li>	  
        </ul>
		<ul class="nav" id="third">
          <li id="chkin2"><a href="#"><i class="icon-check icon-white"></i> Check-in</a></li>
          <li id="chkout2"><a href="#"> Check-out</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reservations 
            <b class="caret"></b></a> 
            <ul class="dropdown-menu">
              <li><a href="#confirm-box" class="login-window"><i class="icon-ok-sign icon-black"></i> Confirm</a></li>
              <li><a href="#oldreserve"><i class="icon-folder-open icon-black"></i> Manage</a></li>
            </ul>
          </li>
		  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search icon-white"></i> Search
            <b class="caret"></b></a> 
            <ul class="dropdown-menu">
              <li id="occ2"><a href="#occupant"><i class="icon-user icon-black"></i> Occupant</a></li>
              <li id="rm2"><a href="#room"><i class="icon-home icon-black"></i> Room</a></li>
            </ul>
          </li>	  
        </ul>
        <form class="navbar-form pull-right">
          <button class='btn btn-info' id="logout" type="button">Logout</button>
        </form>
		<ul class="nav navbar-form pull-right">
		  <li id="chkout"><a href="#">Logged in as test</a></li>
		</ul>
      </div>
    </div>
  </div>
</div>
<div id="check-in">
<div class="container"> 
  <div class="hero-unit"> 
      <form style="margin-left:50px">
		<fieldset>
		<legend><font color="blue">Information</font></legend>
									<table>
							<tr><th style="width:35%"></tr>
							<tr><td>
							Last Name : </td><td>
							<input id="lname" type='text' placeholder='Last Name' required="required" /> </td></tr>
							<tr><td>
							First Name : </td><td>
							<input id="fname" type='text' placeholder='First Name' required="required" /> </td></tr>
							<tr><td>
							Middle Name : </td><td>
							<input id="mname" type='text' placeholder='Middle Name' required="required" /> </td></tr>
							<tr><td>
							Address : </td><td>
							<input id="addr" type='text' placeholder='Town/City, Province, Country' required="required"/> </td></tr>
							<tr><td>
							Contact Number : </td><td>
							<input id="cnum" type='text' placeholder='Contact #' required="required" /> </td></tr>
							<tr><td>
							Room Type : </td><td>
							<select id="rtype" onChange="fillUpSelectControl(this,this.form.rnum,type)"/>
								<option></option>
								<option value="1">Superior</option>
								<option value="2">Deluxe</option>
								<option value="3">Corner Suite King</option>
								<option value="4">Executive</option>
								<option value="5">Executive Suite</option>
								<option value="6">Grand Executive Suite</option>
							</select>
							</td></tr>
							<tr><td>
							Room Number : </td><td>
							<input type="text" id="rnum" placeholder="Room Number" required="required"/></select>							
							</td></tr>
							</table><br>
							<div align='left' style='float:left; margin-left:15.5%; margin-top:0%;width:40%;'>
							<button id='in-btn' class='btn btn-info' type="button"> Proceed <i class='icon icon-chevron-right icon-white'></i></button>
							</div>
	</fieldset>  
 </form>
  </div>
  <footer> 
  <p>&copy; CSc 186 - Human-Computer Interaction 2012</p>
  </footer>
</div>
</div>

<div id="check-out">
<div class="container">
<div class="hero-unit"> 
 <form style="margin-left:50px">
		<fieldset>
		<legend><font color="blue">Check-out</font></legend>
			<table>
				<tr><th style="width:35%"></tr>
				<tr><td>
				Room Number : </td><td>
				<input id="room_out" name="room_out" value="" type="text" placeholder="Room Number"> </td></tr>
			</table><br>
		<div align='left' style='float:left; margin-left:15.5%; margin-top:0%;width:40%;'>
			<button id="check_out_btn" class='btn btn-info' type='button'> Proceed <i class='icon icon-chevron-right icon-white'></i></button>
		</div>
  </fieldset>  
</form>
</div>
<footer> 
	<p>&copy; CSc 186 - Human-Computer Interaction 2012</p>
</footer>
</div> 
</div>

<div id="search-occ">
<div class="container">
<div class="hero-unit"> 
 <form style="margin-left:50px">
		<fieldset>
		<legend><font color="blue">Search Occupant</font></legend>
		<table>
				<tr><th style="width:35%"></tr>
				<tr><td>
				Name : </td><td>
				<input id="occn" value="" type="text" placeholder="Name"> </td></tr>
			</table><br>
		<div align='left' style='float:left; margin-left:15.5%; margin-top:0%;width:40%;'>
			<button id="search_o" class='btn btn-info' type='button'> Search <i class='icon icon-chevron-right icon-white'></i></button>
		</div>
  </fieldset>  
</form>
</div>
<footer> 
	<p>&copy; CSc 186 - Human-Computer Interaction 2012</p>
</footer>
</div> 
</div>

<div id="search-rm">
<div class="container">
<div class="hero-unit"> 
 <form style="margin-left:50px">
		<fieldset>
		<legend><font color="blue">Search Room</font></legend>
		<table>
				<tr><th style="width:35%"></tr>
				<tr><td>
				Room Number : </td><td>
				<input id="rmn" value="" type="text" placeholder="Room Number"> </td></tr>
			</table><br>
		<div align='left' style='float:left; margin-left:15.5%; margin-top:0%;width:40%;'>
			<button id="search_r" class='btn btn-info' type='button'> Search <i class='icon icon-chevron-right icon-white'></i></button>
		</div>
  </fieldset>  
</form>
</div>
<footer> 
	<p>&copy; CSc 186 - Human-Computer Interaction 2012</p>
</footer>
</div> 
</div>

<div id="confirm-box" class="login-popup">
        <a href="#" class="close"><img src="img/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
          <form method="post" class="signin" action="#"><br><br>
                <fieldset class="textbox">
            	<label class="username">
                <span></span>
                <input maxlength="6" id="ccode" name="ccode" value="" type="text" autocomplete="on" placeholder="Reservation Code" autofocus="autofocus">
                </label>
                <label class="Name">
                <span></span>
                <input id="name" name="name" value="Name" type="text" disabled>
                </label>
				<label class="Room">
                <span></span>
                <input id="room" name="room" value="" type="text" placeholder="Room Number">
                </label>
                <button id="confirm_btn" class="submit button" type="button"><i class='icon icon-ok icon-black'></i> Confirm</button>
				<button id="cancel_btn" class="submit button" type="button"><i class='icon icon-remove icon-black'></i> Close</button>
                </fieldset>
          </form>
</div>

</body>
</html>
