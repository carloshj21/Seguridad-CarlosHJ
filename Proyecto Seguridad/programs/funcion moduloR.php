<?php
	$n1=$_GET['numero1'];
	$n2=$_GET['numero2'];
	function modulo ($a,$b)
	{
		if($a<0)
		{
			$c=$a%$b;
			$m=$c+$b;
			return $m;
		}
		else 
		{
			$m=$a%$b;
			return $m;
		}
	}
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>Función Módulo</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/resultados.css'/>
		</head>
		<body>";
echo"		<h1>".$n1."  %  ".$n2."  =</h2><br/><br/>";
			$a=modulo($n1,$n2);
echo" 		<h1>".$a."</h1>";
echo"		<br/><br/><br/>
			<div>
				<a href='funcion modulo.php'>Volver a intentarlo</a>
			</div>
		</body>
	</html>";
	
?>