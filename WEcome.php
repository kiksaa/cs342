<!DOCTYPE html>
<html>
	<head>
		<title> WECOME 
		<?php
		if ($_SERVER["REQUEST_METHOD"] === "POST") {

			$txtFirstname = $_POST["inputFname"];
			$txtLastname = $_POST["inputLname"];
			$showtxt = $txtFirstname." ".$txtLastname;
			echo $showtxt;
		}else{
			echo "Page does not exit.";
		}
		?>
			
		</title>
	</head>	
		<?php
		if ($_SERVER["REQUEST_METHOD"] === "POST") {

			$txtFirstname = $_POST["inputFname"];
			$txtLastname = $_POST["inputLname"];
			$showtxt = $txtFirstname." ".$txtLastname;
			echo $showtxt;
		}else{
			echo "Page does not exit.";
		}
		?>
		
	<body>
		
	</body>
</html>