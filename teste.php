<?php 

$nome = array ("Maria", "Pedro", "Jõao", "Cássia", "Felipe", "Marina", "Caio", "Fernanda", "Leticia", "Lucas");
$nota = array(4, 8, 4, 6, 4, 8, 5, 9, 3, 7);
$media = 0;
$a = 0;
		 $media = (array_sum($nota))/10;
		$a = max($nota);
		for($i=0;$i<10;$i++)
		if($a == $nota[$i]){
 
			echo "a média da classe é " . $media .  "<br>e o aluno com maior nota é " . $nome[$i];
		}elseif($a == $nota[$i]){
			echo "a média da classe é " . $media .  "<br>e o aluno com maior nota é " . $nome[$i];};
 ?>