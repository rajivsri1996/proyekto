
<html>
<head><title>SERVICE RECORD</TITLE><SCRIPT TYPE="text/javascript">

function numbersonly(myfield, e, dec)
{
var key;
var keychar;

if (window.event)
   key = window.event.keyCode;
else if (e)
   key = e.which;
else
   return true;
keychar = String.fromCharCode(key);

// control keys
if ((key==null) || (key==0) || (key==8) || 
    (key==9) || (key==13) || (key==27) )
   return true;

// numbers
else if ((("0123456789").indexOf(keychar) > -1))
   return true;

// decimal point jump
else if (dec && (keychar == "."))
   {
   myfield.form.elements[dec].focus();
   return false;
   }
else
   return false;
}


</SCRIPT>
</HEAD>
<body background = "PIC/picture/back.jpg">
<br>
<br>
<br>
<br>
<h1 align=center><font color='black' size=10><b>SEARCH EMPLOYEE</font></h1>

<div id="wrap">
		<div id="menu">
				<h3 align="center"><a href="option1.php">BACK</a> <br>
			
		</div>
<BR>
<h3 align="center"><font color="lime">SEARCH Employee</font></h3><br><br>
<BR>
<center><form action="6.php" method="POST">
<table align="center" border="5" bordercolor="yellow">
<tr><td>
				<center><br><font face= "Candara" size= "5" color= "black">Employee Form ID: <input type="text"name="Id_num"  onKeyPress="return numbersonly(this, event)" MAXLENGTH = 3>
				<br><br><INPUT TYPE="submit" value="Search"></center>
				
</td></tr></table></form>
</body>
</html>
