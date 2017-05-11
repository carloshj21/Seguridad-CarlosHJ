<?php
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Cifrado Simple</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/estilo.css'/>
		</head>
		<body>";
echo"		<h1>Cifrado Simple</h1>
			<form method='GET' action='cifrado simpleR.php' align='center'>
				<label>Introduzca su número de cuenta(sin guión): </label><br/><br/>
				<input type='text' name='cuenta' required/>
				<input type='submit'/>";
echo"		</form>
			<br/><br/><br/>
			<div>
				<a href='Menu.php'>Menú principal</a>
			</div>
		</body>
		</html>";	
?>