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
.style1 {font-size: 18px}
</style>



		
<div id="wrapper">

<?php include('header.php'); ?>
 <?php

echo "<b><h3>Today is:\n";
echo date("m/d/Y") . "<br />";?>

 <marquee>
<h1> What do you want to do? </h1>
</marquee>



	
<ul>
 <br>
 <br>
	
<div id="wrap">
		<div id="menu">
			<h3 align="center"><span class="style1"><a href="1.php">Register New Employee</a><br>
			    <a href="5.php">SEARCH Record</a><br>
			    <a href="7.php">UPDATE Record</a></span></h3>
			
</div>


	
<br>

<div id="clockDisplay" class="clockStyle"></div>
<div align="center">
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
  
</div>
</div> <!-- End #wrapper -->










	
	

	
