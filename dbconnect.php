<?php
		define('DB_HOST','localhost');
		define('DB_USER','id19193769_userdata');
		define('DB_PASS','kxcRclOt%Et98/6O');
		define('DB_NAME','id19193769_data');
		$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		if(mysqli_connect_errno()){
			echo"failed connect to MYSQL Server :".mysqli_connect_error();
			die();
		}		
	?>