<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>SERVICE RECORD</title>



</head>


<style type="text/css">
.clockStyle {
	background-color:#CAFF70;
	border:#999 2px inset;
	padding:6px;
	color:black;
	font-family:"Arial Black", Gadget, sans-serif;
        font-size:16px;
        font-weight:bold;
	letter-spacing: 2px;
	display:inline;
}
</style>



		
<div id="wrapper">

<?php include('header.php'); ?>

<marquee>
<h1> WELCOME to Administrative Login </h1>
</marquee>



	
<ul>
 <br>
 <br>
	<div id = "login-form">
		<form method = "post" name = "login" action = "HOME.php">
			<ul id = "form">
				<li class = "label">
					Username:
				</li>
				<li>
					<input class = "data" type = "text" id = "username" name = "user" placeholder = "Your Username here" />
				</li>
				
				<li class = "label">
					Password:
				</li>
				<li>
					<input class = "data" type = "password" id = "password" name = "pass" placeholder = "" />
				</li>

				<li>
					<input class = "button"  type = "submit" name = "login" value = "Login" />
					

				</li>
			</ul>
		</form>
	</div>
	
<?php

echo "<b><h3>Today is:\n";
echo date("m/d/Y") . "<br />";?>
<br>

<div id="clockDisplay" class="clockStyle"></div>
<script type="text/javascript" language="javascript">
function renderTime() {
	var currentTime = new Date();
	var diem = "AM";
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
    var s = currentTime.getSeconds();
	setTimeout('renderTime()',1000);
    if (h == 0) {
		h = 12;
	} else if (h > 12) { 
		h = h - 12;
		diem="PM";
	}
	if (h < 10) {
		h = "0" + h;
	}
	if (m < 10) {
		m = "0" + m;
	}
	if (s < 10) {
		s = "0" + s;
	}
    var myClock = document.getElementById('clockDisplay');
	myClock.textContent = h + ":" + m + ":" + s + " " + diem;
	myClock.innerText = h + ":" + m + ":" + s + " " + diem;
}
renderTime();
</script>




<?php include('footer.php'); ?>

		</div> <!-- End #wrapper -->










	
	

	
