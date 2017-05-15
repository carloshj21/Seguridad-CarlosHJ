<?php
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Cifrado simétrico</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/estilo.css'/>
		</head>
		<body>";
echo"		<h1>Cifrado simétrico</h1>
			<form method='POST' action='cifrado simetricoR.php' align='center'>
				<label>Escriba algo:</label><br/><br/>
				<input type='text' name='texto' size='50' maxlength='30' placeholder='Máximo 30 caracteres. Sólo minúsculas (a-z).Sin espacios.' required/><br/><br/><br/>
				<label>Introduzca una llave de cifrado: </label><br/><br/>
				<input type='text' size='30' maxlength='1' name='llave' placeholder='[0-3],[a-c] (1)' required/><br/><br/>
				<input type='submit'/>";
echo"		</form>
			<br/><br/><br/>
			<div>
				<a href='Menu.php'>Menú principal</a>
			</div>
		</body>
		</html>";		
?>