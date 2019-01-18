<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	$txt_sName = $_POST["student_name"];
	$txt_sCode = $_POST["student_code"];
	$txt_sId = $_POST["student_id"];
	// echo $txt_sName." ".$txt_sCode;

	require("connect.php");
	$sql = "UPDATE students
			SET sname = '{$txt_sName}',
				scode = '{$txt_sCode}'
			WHERE sid = '{$txt_sId}'
			";
	if ($conn->query($sql) === true) {
		echo "Student Register Success";
	}else{
		echo "SQL string error: ".$sql."<br>".$conn->error;
	}

}else{
	header("Location: student-register.php");
}
?>