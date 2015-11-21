	<?php
		$myhost = "localhost:3306";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "employee_record";
	
		$connect = mysql_connect( $myhost, $dbuser, $dbpass ) or
			die("Could not connect <br />" . mysql_error());
		
		mysql_select_db ( $dbname, $connect );
	?>