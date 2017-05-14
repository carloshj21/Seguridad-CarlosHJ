<?php
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Algoritmo Propio</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/estilo.css'/>
		</head>
		<body>";
echo"		<h1>Algoritmo Propio</h1>
			<form method='POST' action='algoritmo propioR.php' align='center'>
				<label>Introduzca un texto (preferentemente sin espacios): </label><br/><br/>
				<input type='text' name='texto' size='100px' placeholder='Sólo minúsculas' required/><br/><br/>
				<input type='submit'/>";
echo"		</form>
			<br/><br/><br/>
			<div>
				<a href='Menu.php'>Menú principal</a>
			</div>
		</body>
		</html>";
?>