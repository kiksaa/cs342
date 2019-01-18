<!DOCTYPE html>
<html>
	<head>
		<title> Hello PHP - DAY4</title>
		<style type="text/css">
			body{
				background-color: #FFEEDD;
				color: #FF99CC;
			}
	</style>	
	
	</head>	

	<body>
		<?php
			
			// $arr2D = array(array("Kik", 20),array("Got", 17),array("Mew", 25));

			// echo $arr2D[2][0]; //[0][0] show Kik, [2][0][2] show t in name Got
			// echo $arr2D[2][1];

			$arr2D = array(array("Kukkik", 20 , 1997 , "Nisson" , "255k"),
							array("Got", 17 , 2000),
							array("Mew", 25 , 1992),
							array("Kat", 30 , 1988),
							array("Bow", 21 , 1996 , "Honda"),
						  );  

			$arrLen = count($arr2D);
			for ($i=0; $i < $arrLen; $i++) { 
				for ($j=0; $j < $arrLen; $j++) { 
				echo $arr2D[$i][$j];
				echo "<br>";
				}
			}
	
		?>

	</body>
</html>
