<html>
<body background = "PIC/picture/back.jpg">
<br>
<br>
<h3 align=center><font color=black size=10>Employee Profile</font></h3>
<br>
<div id="wrap">
		<div id="menu">
			<h3 align="center"><a href="HOMES.php">BACK</a> <br>

</div>
<?php
$Id_num = $_POST['Id_num'];
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'projectdb';

$db_handle = mysql_connect($server, $user, $pass);
if(! $db_handle )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "SELECT Id_num, Lastname, Firstname, Middlename, Address, Bdate, Bplace,Age, Gender, Mobileno, Contactno, Email, Civilstatus FROM registerprofile WHERE Id_num='$Id_num'";
$y = "SELECT Svc_datefrom, Svc_dateto, Designation, Status, Salary_annum,office_station,division,leave_nopay,separation FROM servicerecord WHERE Id_num='$Id_num'";

mysql_select_db($database, $db_handle);

$retval = mysql_query( $sql, $db_handle );
$ret = mysql_query( $y, $db_handle );

if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
if($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
  echo  "<h3 align=center><font color=black><br><Br><Br><center>ID :{$row['Id_num']} <br> ".
          	"Last Name : {$row['Lastname']} <br>  ".
		  "First Name: {$row['Firstname']} <br> ".
		   "Middle Name: {$row['Middlename']} <br> ".
		   "Address: {$row['Address']} <br> ".
		   "Birth Date: {$row['Bdate']} <br> ".
		   "Birth Place: {$row['Bplace']} <br> ".
		  "Age: {$row['Age']} <br> ".
		"Gender: {$row['Gender']} <br> ".
		"Mobile Number: {$row['Mobileno']} <br> ".
		"Contact Number: {$row['Contactno']} <br> ".
		"Email: {$row['Email']} <br> ".
			"Civilstatus: {$row['Civilstatus']} <br> ".
					
"______________________________________________________<br></h3>";

}

else{
echo "<marquee> <center><h1><font color = red> NO RECORD </center> </marquee>";
}

if(! $ret )
{
  die('Could not get data: ' . mysql_error());
}
if($row = mysql_fetch_array($ret, MYSQL_ASSOC))
{
  echo  "<h3 align=center><font color=black><br><Br><Br><center> <br> ".
          	"Start date of Service : {$row['Svc_datefrom']} <br>  ".
				"End Date of Service : {$row['Svc_dateto']} <br>  ".
					"Designation : {$row['Designation']} <br>  ".
						"Status : {$row['Status']} <br>  ".
							"Salary per Annum : {$row['Salary_annum']} <br>  ".
								"Office Station : {$row['office_station']} <br>  ".
									"Division : {$row['division']} <br>  ".
										"Leave without pay : {$row['leave_nopay']} <br>  ".
											"Separation : {$row['separation']} <br>  ".
											
		 
					
"______________________________________________________<br></h3>";

}

else{
echo "<marquee> <center><h1><font color = red> NO RECORD </center> </marquee>";
}
?>
</body></html>