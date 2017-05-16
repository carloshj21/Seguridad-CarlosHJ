<?php
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Vigenere</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/estilo.css'/>
		</head>
		<body>";
echo"		<h1>Cifrado Vigenere</h1>
			<form method='POST' action='VigenereR.php' align='center'>
				<label>Escriba algo:</label><br/><br/>
				<input type='text' name='texto' size='50' maxlength='30' placeholder='Máximo 30 caracteres. Sólo MAYÚSCULAS (A-Z).Sin espacios.' required/><br/><br/><br/>
				<input type='submit'/>";
echo"		</form>
			<br/><br/><br/>
			<div>
				<a href='Menu.php'>Menú principal</a>
			</div>
		</body>
		</html>";
?>