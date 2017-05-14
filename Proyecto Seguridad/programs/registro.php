<?php
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>Registro</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/.css'/>
		</head>
		<body>
			<h1>Registro</h1>
			<form method='GET' action='registroR.php'>
				<label>Nombre de usuario</label><br/>
				<input type=text size='60' maxlength='15' name='usuario' placeholder='Máximo 15 caracteres alfanuméricos (letras, dígitos y @/./+/-/_) solamente.' required/>
				<br/><br/>
				<label>Contraseña</label><br/>
				<input type='password' size='60' maxlength='30' name='contraseña' required/><br/>
				<label class='cont'>Mínimo 8 caracteres.Longitud máxima: 30 caracteres alfanuméricos (letras, dígitos y @/./+/-/_) solamente.</label>
				<br/><br/>
				<input type='submit' value='Registrarse'/>
			</form>	
			<br/><br/><br/><br/>
			<div>
				<a href='inicio.php'>Inicio</a><br/><br/>
			</div>
		</body>
	</html>";
?>