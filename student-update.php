<!DOCTYPE html>
<html>
	<head>
		<title> Student Views </title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<body>
		<h1> Student Info </h1>
		<?php
		
			require("connect.php");
			$sid = $_GET["id"];
			//echo $sid;

			$sql = "SELECT 
						students.sname,
						students.scode,
						majors.mname
					FROM
						students
					JOIN
						majors
					ON 
						students.mid = majors.mid
					WHERE
						students.sid = ".$sid ;
			if($resule = $conn->query($sql)){
				if($resule->num_rows > 0){
					$row = $resule->fetch_assoc();
		?>
			<form method="post" action="sql-student-update.php">
			<p>
				<b>Student Name:</b>
				<input type="text" name="student_name" value="<?=$row["sname"]?>"> <br>
				<input type="hidden" name="student_id" value="<?=$sid?>">
				<b>Student Code:</b>
				<input type="text" name="student_code" value="<?=$row["scode"]?>"> <br>
				<b>Student Major:</b><?=$row["mname"]?> 
				<br>
				<br>
				<input type="submit" value="UPDATE DATA">

			</p>
			</form>
		<?php		
				}else{
					echo "0 resule";
				}


			}else{
				echo "SQL string error: ".$sql."<br>".$conn->error;
			}

		?>

		<table class="table-1">
		<h1>Class Register</h1>

		<?php
			require("connect.php");
			$sid = $_GET["id"];
			//echo $sid;
			$sql = "SELECT 
						class.cname,
						class.ccode
					FROM
						students
					JOIN
						classregister
					ON 
						students.sid = classregister.sid
					JOIN
						class
					ON
						classregister.cid = class.cid
					WHERE
						students.sid = ".$sid ;
			if($resule = $conn->query($sql)){
				if($resule->num_rows > 0){
				while ($row = $resule->fetch_assoc()) {		
		?>
					<tr>
							
						<td><?=$row["cname"]?></td>
						<td><?=$row["ccode"]?></td>

					</tr>
		<?php	
				}	

				}else{
					echo "0 resule";
				}


			}else{
				echo "SQL string error: ".$sql."<br>".$conn->error;
			}

		?>
	</body>
</html>
