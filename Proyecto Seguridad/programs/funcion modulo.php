<?php
	session_start();
	echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Función módulo</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/estilo.css'/>
		</head>
		<body>";
echo"		<h1>Función Módulo</h1>
			<form method='GET' action='funcion moduloR.php' align='center'>
				<label>Introduzca un número entero:</label>
				<input type='number' name='numero1' required/>
				<br/><br/>
				<label>Introduzca otro número entero:</label>
				<input type='number' name='numero2' required/>
				<br/><br/><br/>
				<input type='submit'/>";
echo"		</form>
			<br/><br/><br/>
			<div>
				<a href='Menu.php'>Menú principal</a>
			</div>
		</body>
		</html>";
?>