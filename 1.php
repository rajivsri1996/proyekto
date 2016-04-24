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
<body background = "PIC/picture/newback.jpg">
<table width="915" height="425" border="1" align="center" bordercolor="#CCCCCC">
  <tr>
    <td width="909"><h1 align=center><font color='black' size=5><b>ADD NEW EMPLOYEE</font></h1>
      <p align=center><span class="style1"><a href="5.php"><strong>SEARCH Record&nbsp&nbsp</strong></a> <a href="7.php"><strong>UPDATE Record</strong></a></span></p>
      <table width="441" height="359" border="0" align="left" bordercolor="#333333" background="../../../Users/Dasun/Documents/New/bkg-blu.jpg">
        <tr>
          <td width="250"> <div align="left">Form ID</div></td>
          <td width="181"><input type="text"name="Id_num"  onKeyPress="return numbersonly(this, event)" maxlength = 3></td>
        </tr>
        <tr>
          <td><div align="left">First Name</div></td>
          <td><INPUT style="Text" name="Firstname"></td>
        </tr>
        <tr>
          <td><div align="left">Middle Name</div></td>
          <td><INPUT style="Text" name="Middlename"></td>
        </tr>
        <tr>
          <td><div align="left">Address</div></td>
          <td><INPUT style="Text" name="Address"></td>
        </tr>
        <tr>
          <td><div align="left">Birthdate</div></td>
          <td><INPUT style="Text" name="Bdate"></td>
        </tr>
        <tr>
          <td><div align="left">Birthplace</div></td>
          <td><INPUT style="Text" name="Bplace"></td>
        </tr>
        <tr>
          <td><div align="left">Age</div></td>
          <td><INPUT style="Text" name="Age"></td>
        </tr>
        <tr>
          <td><div align="left">Gender</div></td>
          <td><INPUT style="Text" name="Gender"></td>
        </tr>
        <tr>
          <td><div align="left">Mobile No</div></td>
          <td><INPUT style = "Text" name = "Mobileno"></td>
        </tr>
        <tr>
          <td><div align="left">Contact No</div></td>
          <td><INPUT style = "Text" name = "Contactno"></td>
        </tr>
        <tr>
          <td><div align="left">Email Address</div></td>
          <td><INPUT style = "Text" name = "Email"></td>
        </tr>
        <tr>
          <td><div align="left">Civil status</div></td>
          <td><INPUT style="Text" name="Civilstatus"></td>
        </tr>
      </table>
      <table width="445" border="0" background="../../../Users/Dasun/Documents/New/bkg-blu.jpg">
        <tr>
          <td width="225">Start Date of Service</td>
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
              <input name="Submit" type="Submit" value="Register">
          </div></td>
          <td><div align="center">
              <INPUT name="reset" type="reset" value="clear">
          </div></td>
        </tr>
      </table>
      <h5 align="center">&nbsp;</h5>
      <h5 align="center">&nbsp;</h5>
      <h5 align="center">&nbsp;</h5>
      <p align="center"><font size="3"><a href="HOMES.php"><strong><font face="Times New Roman, Times, serif">Back To Home Page</font></strong></a></font></p>
      <p align="center"><font size="3" face="Times New Roman, Times, serif"><strong><font color= "black"><a href="option1.php">BACK</a></font></strong></font></p>
    <h5 align="center">&nbsp;</h5></td>
  </tr>
</table>
<tr>
  <td bgcolor="#FFFFFF">
  
</body>
</html>