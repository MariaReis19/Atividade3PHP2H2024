<?php
 
	$valor = array(-10, 20, 35, -47, 5, 2, -4, 34, -14, 9);
	$contpos = 0;
	$contneg = 0;
	$contimp = 0;
	$contpar = 0;

 
			for($i = 0;$i < 10;$i++){
		if ($valor[$i] > -1) {
			$contpos++;
   			
 
		} else if ($valor[$i] < 0) {
			$contneg++;
   			
		}
	}
 			for($i = 0;$i < 10;$i++){
		if ($valor[$i]%2 == 0) {
			$contpar++;
   			
 
		} else if ($valor[$i]%2 != 0) {
			$contimp++;
   			
		}
	}
			echo "Números Positivos: " . $contpos . "<br>" . "Números Negativos: " . $contneg . "<br>" . "Números Pares: " . $contpar . "<br>" . "Números Impares: " . $contimp;
 
?>