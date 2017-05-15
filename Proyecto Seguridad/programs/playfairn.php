<?php
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Playfair-n</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/estilo.css'/>
		</head>
		<body>";
echo"		<h1>Playfair-n</h1>
			<br/><br/><br/>
			<form method='POST' action='playfairnR.php' align='center'>
				<label>Introduzca una cadena de caracteres: (Sin espacios) </label><br/><br/>
				<input type='text' size='60' maxlength='80' name='cadena' placeholder='Caracteres alfanuméricos (letras y dígitos) solamente.SIN ACENTOS.' required/><br/><br/>
				<label>Introduce un dígito: <label><br/><br/>
				<input type='text' size='1' maxlength='1' name='num' required/><br/><br/>
				<input type='submit' value='Enviar'/>
			</form>
			<div>
				<a href='Menu.php'>Menú principal</a>
			</div>
		</body>
		</html>";
?>