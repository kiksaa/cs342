<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	$txt_sName = $_POST["student_name"];
	$txt_sCode = $_POST["student_code"];
	$txt_sMajor = $_POST["student_major"];
	// echo $txt_sName." ".$txt_sCode;

	require("connect.php");
	$sql = "INSERT INTO
				students(sname,scode,mid)
			VALUES
				('".$txt_sName."','".$txt_sCode."',".$txt_sMajor.")";
	if ($conn->query($sql) === true) {
		echo "Student Register Success";
	}else{
		echo "SQL string error: ".$sql."<br>".$conn->error;
	}

}else{
	header("Location: student-register.php");
}
?>