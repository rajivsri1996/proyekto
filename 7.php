<HTML>
<HEAD>
<TITLE>
SERVICE RECORD
</TITLE>
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
</HEAD>

<body background = "PIC/picture/web2.jpg">
<h1 align=center><font color='black'><b>UPDATE EMPLOYEE RECORD</font></h1>
<h5 align="center"><span class="style1"><a href="5.php">SEARCH Record</a><br>
        <a href="1.php">NEW Record</a></span></h5>
<table width="480" height="339" border="0" align="left" bordercolor="#333333" background="../../../Users/Dasun/Documents/New/bkg-blu.jpg">
  <tr>
    <td width="258"><p><strong> Form ID</strong></p></td>
    <td width="212"><p>
        <strong>
        <input type="text"name="Id_num"  onKeyPress="return numbersonly(this, event)" maxlength = 3>
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>First Name</strong></p></td>
    <td><p>
        <strong>
        <INPUT style="Text" name="Firstname">
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>Middle Name</strong></p></td>
    <td><p>
        <strong>
        <INPUT style="Text" name="Middlename">
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>Address</strong></p></td>
    <td><p>
        <strong>
        <INPUT style="Text" name="Address">
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>Birthdate</strong></p></td>
    <td><p>
        <strong>
        <INPUT style="Text" name="Bdate">
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>Birthplace</strong></p></td>
    <td><p>
        <strong>
        <INPUT style="Text" name="Bplace">
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>Age</strong></p></td>
    <td><p>
        <strong>
        <INPUT style="Text" name="Age">
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>Gender</strong></p></td>
    <td><p>
        <strong>
        <INPUT style="Text" name="Gender">
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>Mobile No</strong></p></td>
    <td><p>
        <strong>
        <INPUT style = "Text" name = "Mobileno">
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>Contact No</strong></p></td>
    <td><p>
        <strong>
        <INPUT style = "Text" name = "Contactno">
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>Email Address</strong></p></td>
    <td><p>
        <strong>
        <INPUT style = "Text" name = "Email">
      </strong></p></td>
  </tr>
  <tr>
    <td><p><strong>Civil status</strong></p></td>
    <td><p>
        <strong>
        <INPUT style="Text" name="Civilstatus">
      </strong></p></td>
  </tr>
</table>

<table width="480" border="0" align="left" background="../../../Users/Dasun/Documents/New/bkg-blu.jpg">
  <tr>
    <td width="257"><strong>Start Date of Service</strong></td>
    <td width="213"><strong>
      <INPUT style="Text" name="Svc_datefrom">
    </strong></td>
  </tr>
  <tr>
    <td><strong>End Date of Service</strong></td>
    <td><strong>
      <INPUT style="Text" name="Svc_dateto">
    </strong></td>
  </tr>
  <tr>
    <td><strong>Designation</strong></td>
    <td><strong>
      <INPUT style="Text" name="Designation">
    </strong></td>
  </tr>
  <tr>
    <td><strong>Status</strong></td>
    <td><strong>
      <INPUT style="Text" name="Status">
    </strong></td>
  </tr>
  <tr>
    <td><strong>Salary per Annum</strong></td>
    <td><strong>
      <INPUT style="Text" name="Salary_annum">
    </strong></td>
  </tr>
  <tr>
    <td><strong>Designated Office Station</strong></td>
    <td><strong>
      <INPUT style="Text" name="office_station">
    </strong></td>
  </tr>
  <tr>
    <td><strong>Division</strong></td>
    <td><div align="left">
        <strong>
        <INPUT style="Text" name="division">
      </strong></div></td>
  </tr>
  <tr>
    <td><strong>Leave with no pay</strong></td>
    <td><strong>
      <INPUT style="Text" name="leave_nopay">
    </strong></td>
  </tr>
  <tr>
    <td height="26"><strong>Separation</strong></td>
    <td><strong>
      <INPUT style="Text" name="separation">
    </strong></td>
  </tr>
         </table>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">
  <INPUT name="Button" type="button" value="Update">
</p>
<p align="center"><a href="HOMES.php"><strong><font face="Times New Roman, Times, serif">Back To Home Page</font></strong></a></p>
<p align="center"><font face="Times New Roman, Times, serif"><strong><a href="option1.php">BACK</a></strong></font></p>
</BODY>
</HTML>