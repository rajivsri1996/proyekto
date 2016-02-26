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
<table width="962" height="409" border="0.5">
  <tr>
    <td width="952"><marquee>
    <h3 align="center">WELCOME to Administrative Login </h3>
    </marquee>
      <div id="clockDisplay" class="clockStyle"></div>
      
      <div align="left">
        <script type="text/javascript" language="JavaScript">
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
        <?php

echo "<b><h3>Today is:\n";
echo date("m/d/Y") . "<br />";?>
        <br />
        <br />
      </div>
      <div id = "login-form">
  <form action = "HOME.php" method = "post" name = "login" id="login">
    <div align="justify"></div>
    <table width="200" border="0" align="center">
      <tr>
        <td>Username:
          <input class = "data" type = "text" id = "username" name = "user" placeholder = "Your Username here" />
          Password:
          <input class = "data" type = "password" id = "password" name = "pass" placeholder = "" />          <input class = "button"  type = "submit" name = "login" value = "Login" />        </td>
      </tr>
    </table>
    <h3>&nbsp;      </h3>
    <h6 align="center">&nbsp;</h6>
  </form>
  <div align="center"><strong>Copyright © 2012</strong> @ Manila City Hotel </div>
      </div>
</div></td>
  </tr>
</table>

<marquee>
<h1>
  <!-- End #wrapper -->
</h1>
</marquee>
