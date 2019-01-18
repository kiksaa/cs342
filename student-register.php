<!DOCTYPE html>
<html>
	<head>
		<title> Student Register </title>
	</head>

	<body>
		
		<form method="post" action="sql-student-insert.php">
			Student Name:
			<input type="text" name="student_name">
			<br>
			<br>
			Student Code:
			<input type="text" name="student_code">
			<br>
			<br>
			Student Major:
			<select name="student_major">
				<option value="1">Computer Science</option>	
				<option value="2">Computer Engineer</option>
				<option value="3">Information Technology</option>
				<option value="4">Digital Community</option>
			</select>
			<br>
			<br>
			<input type="submit" value ="REGISTER">
		</form>

	</body>
</html>
