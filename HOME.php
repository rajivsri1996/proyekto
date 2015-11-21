<title>SERVICE RECORD</title>

	<?php
		include("dbconnect.php");
		
		
		static $loginTrue = 1;
		static $check = 1;
		
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$getUser = "";
		$getPass = "";
		
		$query = "SELECT * FROM login WHERE username = '{$user}' AND password = '{$pass}'";
		
		$result = mysql_query( $query, $connect ) or
			die (mysql_error());
			
		if ($result) {
			$getUser = $user;
			$getPass = $pass;
		}
		
		$check = mysql_num_rows($result);
		if ( $check == 1 ) {
			$loginTrue = 1;
		
			include('HOMES.php');
		
		}
		else {
			$loginTrue = 0;
		include('back.html');
			
		}
		
		
	?>




