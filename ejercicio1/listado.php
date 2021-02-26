<!DOCTYPE html>
<html>
<head>
	<title>listado de numeros</title>
</head>
<center>
<body style="background-color:black;">
	<header style="background-color:#ABACAF; width: 1000px; ">
		
		
		<h1 style=" background-color:#C5475C; border-radius: 0.3em; width: 700px; color:white; ">
			Resultados de los porcentajes de los numeros
		</h1>
			<?php 
			
			  
				$num1=$_POST['number1'];
				$num2=$_POST['number2'];
				$num3=$_POST['number3'];
				$num4=$_POST['number4'];
				$num5=$_POST['number5'];
				$num6=$_POST['number6'];
				$num7=$_POST['number7'];
				$num8=$_POST['number8'];
				$num9=$_POST['number9'];
				$num10=$_POST['number10'];
				$num11=$_POST['number11'];
				$num12=$_POST['number12'];

				//$prom= ($num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8+$num9+$num10+$num11+$num12)/12;
					$numbers= [$num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$num11,$num12];
 					$pares = array();
						$impares = array();

						foreach($numbers as $number){
						 if(is_par($number)){
						    array_push($pares, $number);
						 }else{
						    array_push($impares, $number);
						 }
						}

						if(empty($numbers)){
						 die("No se pueden obtener datos desde un array vacio.");
						}

						echo "Promedio pares: " . average($pares) . 
						     " Numeros: " . implode(",", $pares);
						echo "<br>";

						echo " Total impares: " . count($impares) . 
						     " Numeros: " . implode(",", $impares);

						function is_par($number){
						 return $number % 2 == 0;
						}

						function average($values){
						 $values = array_filter($values, function($x) { return $x !== ''; });
						 $average = array_sum($values) / count($values);
						 return $average;
						}

 	
 	$numeros = array($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$num11,$num12);
 		

 		sort ($numeros, SORT_NUMERIC);
		
		echo "<h2><p>numeros ordenados de forma descendente son:<p/></h2>";
 		echo "<pre>";
 		print_r($numeros);
 		echo "</pre>";

 		echo "<br>";
		echo "<h2>";
	

			 ?>
			
	</header>
</center>
</body>
</html>