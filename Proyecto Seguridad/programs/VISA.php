<?php
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>VISA</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/estilo.css'/>
		</head>
		<body>";
echo"		<h1>Validación VISA</h1>
			<form method='POST' action='VISAR.php' align='center'>
				<label>Introduzca el número de VISA a validar </label><br/><br/>
				<input type='text' name='visa' size='20px' maxlength='16' placeholder='Sólo dígitos (16)' required/><br/><br/>
				<input type='submit'/>
			</form>
			<br/><br/><br/>
			<div>
				<a href='Menu.php'>Menú principal</a>
			</div>
		</body>
		</html>";
?>