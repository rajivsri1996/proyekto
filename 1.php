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
<h1 align=center><font color='black' size=10><b>ADD NEW EMPLOYEE</font></h1>

<div id="wrap">
<div id="menu">
  <table width="222" border="0" align="center">
    <tr>
      <td width="212" height="83"><h3 align="center"><span class="style1"><a href="5.php">SEARCH Record</a> <a href="7.php">UPDATE Record</a></span></h3>
          <h3 align="center"><a href="HOMES.php"><strong>Back To Home Page</strong></a></h3></td>
    </tr>
  </table>
  <table width="433" height="359" border="0" align="center" bordercolor="#333333" background="../../../Users/Dasun/Documents/New/bkg-blu.jpg" bgcolor="#FFFFFF">
    <tr>
      <td width="278"> Form ID</td>
      <td width="145"><input type="text"name="Id_num"  onKeyPress="return numbersonly(this, event)" maxlength = 3></td>
    </tr>
    <tr>
      <td>First Name</td>
      <td><INPUT style="Text" name="Firstname"></td>
    </tr>
    <tr>
      <td>Middle Name</td>
      <td><INPUT style="Text" name="Middlename"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><INPUT style="Text" name="Address"></td>
    </tr>
    <tr>
      <td>Birthdate</td>
      <td><INPUT style="Text" name="Bdate"></td>
    </tr>
    <tr>
      <td>Birthplace</td>
      <td><INPUT style="Text" name="Bplace"></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><INPUT style="Text" name="Age"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><INPUT style="Text" name="Gender"></td>
    </tr>
    <tr>
      <td>Mobile No</td>
      <td><INPUT style = "Text" name = "Mobileno"></td>
    </tr>
    <tr>
      <td>Contact No</td>
      <td><INPUT style = "Text" name = "Contactno"></td>
    </tr>
    <tr>
      <td>Email Address</td>
      <td><INPUT style = "Text" name = "Email"></td>
    </tr>
    <tr>
      <td>Civil status</td>
      <td><INPUT style="Text" name="Civilstatus"></td>
    </tr>
  </table>
  <table width="435" border="0" align="center" background="../../../Users/Dasun/Documents/New/bkg-blu.jpg" bgcolor="#FFFFFF">
    <tr>
      <td width="281">Start Date of Service</td>
      <td width="144"><INPUT style="Text" name="Svc_datefrom"></td>
    </tr>
    <tr>
      <td>End Date of Service</td>
      <td><INPUT style="Text" name="Svc_dateto"></td>
    </tr>
    <tr>
      <td>Designation</td>
      <td><INPUT style="Text" name="Designation"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><INPUT style="Text" name="Status"></td>
    </tr>
    <tr>
      <td>Salary per Annum</td>
      <td><INPUT style="Text" name="Salary_annum"></td>
    </tr>
    <tr>
      <td>Designated Office Station</td>
      <td><INPUT style="Text" name="office_station"></td>
    </tr>
    <tr>
      <td>Division</td>
      <td><INPUT style="Text" name="division"></td>
    </tr>
    <tr>
      <td>Leave with no pay</td>
      <td><INPUT style="Text" name="leave_nopay"></td>
    </tr>
    <tr>
      <td>Separation</td>
      <td><INPUT style="Text" name="separation"></td>
    </tr>
    <tr>
      <td><div align="right">
          <INPUT name="Submit" type="Submit" value="Add">
      </div></td>
      <td><div align="right">
          <INPUT name="reset" type="reset" value="clear">
      </div></td>
    </tr>
  </table>
  <p align="center"><strong><font face="Times New Roman, Times, serif"><font face="Times New Roman, Times, serif"><font size= "5" color= "black"><a href="option1.php">BACK</a></font></font></strong></p>
  <h3 align="justify">&nbsp;</h3>
</div>

  </div>
<tr>
  <td bgcolor="#FFFFFF">
  
</body>
</html>