<?php 

 	$valor = array (10, 15, 30, 45, 2, 13, 6, 9, 20, 19);
 	$mult = 2;
 	$res = 0;

 		for($i = 0; $i< 10; $i++){

 			$res = $valor[$i] * $mult;

 			echo $valor[$i] . " X " . $mult . " = " . $res . "<br>";

 		}
 ?>		