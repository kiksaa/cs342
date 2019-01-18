<!DOCTYPE html>
<html>
	<head>
		<title> Student List </title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<body>
		<table class="table-1">
			<a href="student-register.php" target="_blank">REGISTER</a>
			<tr>
                <th>STUDENT NAME</th>
                <th>STUDENT CODE</th>
                <th>STUDENT MAJOR</th>
                <th>Manage</th>
            </tr>
		<?php
			require("connect.php");

			$sql = "SELECT 
			            students.sid,
						students.sname,
					    students.scode,
				   	    majors.mname
					FROM
						students
					JOIN
						majors
					ON 
						students.mid = majors.mid";
			
			if ($result = $conn->query($sql)) {

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc () ) {
						// echo " <a href = \"www.google.co.th\">Go google </a> "; ต้องมี\หน้าข้อความเสมอ
		?>				<tr>
							<td><a href="student-views.php?id=<?=$row["sid"]?>" target="_blank">
								<?=$row["sname"]?></a></td> <!-- target="_blank" การเปิดหน้าต่างใหม่-->
							<td><?=$row["scode"]?></td>
							<td><?=$row["mname"]?></td>
							<td><a href="student-update.php?id=<?=$row["sid"]?>" target="_blank">EDIT</a>
								<a href="sql-student-delete.php?id=<?=$row["sid"]?>" target="_blank"">DELETE</a>
							</td>
			
						</tr>
		<?php
					}
					
				}else{
					echo "Zero result.";

				}
			}else{
				echo "SQL string error: ".$sql."<br>".$conn->error;
			}
			
		?>

			
	   </table>
	</body>
</html>
