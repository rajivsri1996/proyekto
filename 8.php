<html>
<head><title></title></head>
<body background = "sa.gif">
<br>
<br>
<h1 align=center><font color='black' size=10><b>UPDATE</font></h1>
<div id="wrap">
		<div id="menu">
			<h3 align="center"><a href="1.php">ADD</a>&nbsp&nbsp&nbsp&nbsp&nbsp 
			<a href="5.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="7.php">UPDATE</a></h3>
</div>
<br>
<?php
$database='projectdb';

			$Id_num = $_POST['Id_num'];
			$Lastname = $_POST['Lastname'];
			$Firstname = $_POST['Firstname'];
			$Middlename = $_POST['Middlename'];
			$Address = $_POST['Address'];
			$Bdate = $_POST['Bdate'];
			$Bplace = $_POST['Bplace'];
			$Age = $_POST['Age'];
			$Gender = $_POST['Gender'];
			$Mobileno = $_POST['Mobileno'];
			$Contactno = $_POST['Contactno'];
			$Email = $_POST['Email'];
			$Civilstatus = $_POST['Civilstatus'];
			$Svc_datefrom = $_POST['Svc_datefrom'];
			$Svc_dateto = $_POST['Svc_dateto'];
			$Designation = $_POST['Designation'];
			$Status = $_POST['Status'];
			$Salary_annum = $_POST['Salary_annum'];
			$office_station = $_POST['office_station'];
			$division = $_POST['division'];
			$leave_nopay = $_POST['leave_nopay'];
			$separation = $_POST['separation'];

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass, $database);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$sql = "UPDATE registerprofile SET Id_num='$Id_num',Lastname='$Lastname',Firstname='$Firstname',Middlename='$Middlename',Address='$Address',Bdate='$Bdate',Bplace='$Bplace',Age='$Age',Gender='$Gender',Mobileno='$Mobileno',Contactno='$Contactno',Email='$Email',Civilstatus='$Civilstatus'  WHERE Id_num=$Id_num";


mysql_select_db($database, $conn);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "<h1 align=center><font color=lime><br><br><br><center>Updated employee successfully\n</font></h1>";
mysql_close($conn);


$con = mysql_connect($dbhost, $dbuser, $dbpass, $database);
if(! $con )
{
  die('Could not connect: ' . mysql_error());
}

		
		

$s = "UPDATE servicerecord SET Id_num = '$Id_num', Svc_datefrom = '$Svc_datefrom',Svc_dateto = '$Svc_dateto', Designation = '$Designation' , Status = '$Status', Salary_annum = '$Salary_annum', office_station = '$office_station', division = '$division', leave_nopay = '$leave_nopay', separation = '$separation' WHERE Id_num=$Id_num ";

mysql_select_db($database, $con);
$ret = mysql_query( $s, $con );
if(! $ret )
{
  die('Could not update data: ' . mysql_error());
}
echo "<h1 align=center><font color=lime><br><br><br><center>Updated employee successfully\n</font></h1>";
mysql_close($con);


?>