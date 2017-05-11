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
			<form method='GET' action='cifrado simetricoR.php' align='center'>
				<label>Escriba algo:</label><br/><br/>
				<input type='text' name='texto' size='35' maxlength='30' placeholder='Máximo 30 caracteres'required/>
				<input type='submit'/>";
echo"		</form>
			<br/><br/><br/>
			<div>
				<a href='Menu.php'>Menú principal</a>
			</div>
		</body>
		</html>";		
?>