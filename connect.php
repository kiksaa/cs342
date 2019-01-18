<?php	
	$db_hostname = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name = "cs342_2";

	$conn = new mysqli($db_hostname,$db_username,$db_password,$db_name);

		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);//แสดงข้อความที่มันerror
		}else{				
			//echo "Connected Success.";
		}
?>