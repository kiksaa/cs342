<!DOCTYPE html>
<html>
	<head>
		<title> Hello PHP - DAY3</title>	
		<style type="text/css">
			body{
				background-color: #FFEEDD;
			}
			.table1 {
				border-spacing: 1px;
		    }
			.table1 td {
				border: 2px solid pink; 
			}
	</style>
	</head>	

	<body>

		<table class="table1">
			<?php

				// $ROW = 7;

				//  for ($i=1; $i <= $ROW; $i++) { 
				   //  echo "<tr>
				 		// <td>COLUMN1</td>
				 		// <td>COLUMN2</td>
				 		// <td>COLUMN3</td>
				 	 //  </tr>"; 

			?>
				
				<!-- <tr>
					<td> ROW  <?=$i; ?> COL 1</td>
					<td> ROW  <?=$i; ?> COL 2</td>
					<td> ROW  <?=$i; ?> COL 3</td>
				
				</tr>
				 -->

			<?php

				// }

			?> 


			<?php

				// $ROW = 9;
				// $COL = 5;

				// for ($i=1; $i <= $ROW; $i++) { 
			?>

				<!-- <tr>  -->
					<?php  
						// for ($j=1; $j <= $COL; $j++) {
						// 	echo "<td>ROW".$i." COL".$j."</td>";

						// }
					?>
				<!-- </tr> -->

			<?php	

				// }

			?>  


			<?php

				$ROW = 2;
				$COL = 5;

				for ($i=1; $i <= $ROW; $i++) { 
			?>

				<tr> 
					<?php  
						for ($j=1; $j <= $COL; $j++) {
					?>		
						<td>ROW <?=$i?> COL <?=$j?></td>
					<?php
						}
					?>		

				</tr>

			<?php	

				}

			?>

				
		</table>

		<?php

		//$i = 0;

		// while ($i < 3) {
		// 	echo "Loop at " .$i;//.$i คือการต่อข้อความ
		// 	echo "<br>";// ขึ้นบรรทัด
		// 	$i++;
		// }

		// do {
		// 	echo "Loop at " .$i;
		//  	echo "<br>";
		//  	$i++;
		// } while ($i <= 3);

		// for ($i = 0; $i <= 5; $i++) { 
		// 	echo "Loop at " .($i*2); //.($i+1) คือการแสดงค่าคำตอบไม่ใช่การบวกค่า i เพิ่ม
		//  	echo "<br>";
		// }

		

	    ?> 

	</body>
</html>