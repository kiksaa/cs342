<!DOCTYPE html>
<html>
	<head>
		<title> Hello PHP - DAY2</title>	
	
	</head>	

	<body>
		<?php
			// $txtOne = "THAILAND";
			// echo strlen($txtOne);//นับจำนวนอักษร show 8
		// $x = 1;
		// $y = 2;
		// $y = $y + 2; //y=4
		// $y += 2;//y=6
		// $y = $y + $x;//6+1=7
		// echo $y; 

		// $x = 5;
		// $y = 7;
		// $x++;
		// $y++;
		// echo $y + $x;//14

		// $x = 5;
		// if ($x != 10) {
		// 	echo "Hey";	//true	
		// }

		// $txtOne = "Meajo";
		// if ($txtOne == "Meajo") {
		// 	echo "Hello"; //true
		// }

		// $x = 5;
		// $y = 3;
		// $sum = $x + $y;
										
		// // $z = $x + $y;				
		// // $z += 3;						 
		// // if ($z <= 10) {
		// // 	echo "If Hello"; //true
		// // }else{
		// // 	echo "Else world"; //false
		// // }

		// if ($sum > 5 && $sum <= 10) {
		// 	echo "If Hello";
		// }else{
		// 	echo "Else World";
		// }

		// $a = 9;
		// $b = 3;
		// $sum = 9;
		// if ($sum > 10) {
		// 	echo "A";
		// }else if ($sum > 5 || $sum <= 10) { // T Ro T Ans T
		// 	echo "B"; //print
		// }else{
		// 	echo "C";
		// }

		 // $a = 9;
		 // $b = 3;
		 // $sum = ($a + $b)-12;
		 // $sum . "<br>";
		 // if ($sum > 10) {
		 // 	echo "A";
		 // }else if ($sum > 5 && $sum <= 10) { 
		 // 	echo "B"; 	
		 // }else if ($sum > 0 && $sum <= 5) {
		 // 	# code...
		 // }else{
		 // 	echo "D"; //print
		 // }

		$txtOne = "Anna";
		switch ($txtOne) {
			case "Lucy":
				echo "Hello Lucy";
				break;
			case "Jane":
				echo "Hello Jane";
				break;
			case "Anna":
				echo "Hello Anna";
				break;
			default:
				echo "default none above";
				break;
		}

		?>

	</body>
</html>