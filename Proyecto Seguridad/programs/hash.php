<?php
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Hash</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/estilo.css'/>
		</head>
		<body>";
echo"		<h1>Algoritmo de firma digital propio</h1>
			<form method='POST' action='hashR.php' align='center'>
				<label>Introduzca un número: </label><br/><br/>
				<input type='number' name='numero' placeholder='Mínimo 8 dígitos' required/><br/><br/>
				<input type='submit' value='Generar hash'/>";
echo"		</form>
			<br/><br/><br/>
			<div>
				<a href='Menu.php'>Menú principal</a>
			</div>
		</body>
		</html>";
?>