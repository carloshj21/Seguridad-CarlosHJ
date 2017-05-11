<?php
	$cad=$_GET['texto'];
	$cif=$cad&('abcdefghijklmnopqrstuvwxyzsegu');
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>Cifrado simétrico</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/resultados.css'/>
		</head>
		<body>";
echo    	$cif;
echo"		<br/><br/><br/>";
echo"		<div>
				<a href='cifrado simetrico.php'>Volver a intentarlo</a>
			</div>
		</body>
	</html>";	
?>