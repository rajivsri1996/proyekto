<html>
<head>
<SCRIPT TYPE="text/javascript">

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

</head>
<body background = "PIC/picture/back.jpg">
<br>
<br>
<br>
<br>
<h1 align=center><font color='black' size=10><b>ADD NEW EMPLOYEE</font></h1>
<div id="wrap">
		<div id="menu">
			<h3 align="center"><a href="option1.php">BACK</a><br>
			
</div>
<br>
<h2 align="center"><font color="black">ADD NEW EMPLOYEE</font></h3><br>
<br>
<FORM action="2.php" method="POST">
<table align="center" border="5" bordercolor="yellow">
<tr><td>		
			<center><form action="adding.php" method="POST">
			<br><font face= "Candara" size= "5" color= "lime">
			&nbsp&nbsp&nbsp&nbsp&nbsp Employee Form ID:<input type="text"name="Id_num"  onKeyPress="return numbersonly(this, event)" MAXLENGTH = 3> &nbsp&nbsp&nbsp&nbsp&nbsp <br><br>
			Last Name: <INPUT style="Text" name="Lastname"><BR/><BR/>
			First Name: <INPUT style="Text" name="Firstname"><BR/><BR/>
			Middle Name: <INPUT style="Text" name="Middlename"><BR/><BR/>
			Address: <INPUT style="Text" name="Address"><BR/><BR/>
			Birthdate: <INPUT style="Text" name="Bdate"><BR/><BR/>
			Birthplace: <INPUT style="Text" name="Bplace"><BR/><BR/>
			Age: <INPUT style="Text" name="Age"><BR/><BR/>
			Gender: <INPUT style="Text" name="Gender"><BR/><BR/>
			Mobile No: <INPUT style = "Text" name = "Mobileno"> <BR> <BR/>
			Contact No: <INPUT style = "Text" name = "Contactno"> <BR> <BR/>
			Email Address: <INPUT style = "Text" name = "Email"> <BR> <BR/>
			Civilstatus: <INPUT style="Text" name="Civilstatus"><BR/><BR/>
			
			<table align="center" border="5" bordercolor="yellow">
<tr><td>	
	
			<center><form action="adding.php" method="POST">
			<br><font face= "Candara" size= "5" color= "black">
			
			Start Date of Service: <INPUT style="Text" name="Svc_datefrom"><BR/><BR/>
			End Date of Service: <INPUT style="Text" name="Svc_dateto"><BR/><BR/>
			Designation:<INPUT style="Text" name="Designation"><BR/><BR/>
			Status:<INPUT style="Text" name="Status"><BR/><BR/>
			Salary per Annum:<INPUT style="Text" name="Salary_annum"><BR/><BR/>
			Designated Office Station:<INPUT style="Text" name="office_station"><BR/><BR/>
			Division:<INPUT style="Text" name="division"><BR/><BR/>
			Leave with no pay:<INPUT style="Text" name="leave_nopay"><BR/><BR/>
			Separation:<INPUT style="Text" name="separation"><BR/><BR/>
			
</table>
			<INPUT type="Submit" value="Add"> <INPUT type="reset" value="clear"><br><br>
</td></tr></table></FORM>
</table>



</body>
</html>