<?php
	$cad=$_GET['texto'];
	$cif=$cad&('abcdefghijklmnopqrstuvwxyzsegu');
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>Cifrado simétrico</title>
			<meta charset='UTF-8'/>
		</head>
		<body>";
echo    	$cif;
echo"		<br/><br/><br/>";
echo"		<a href='cifrado simetrico.php'>Volver a intentarlo</a>
		</body>
	</html>";	
?>