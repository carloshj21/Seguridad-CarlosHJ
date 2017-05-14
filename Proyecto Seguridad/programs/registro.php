<?php
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>Registro</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/.css'/>
			<link rel='stylesheet' type='text/css' href='../styles/registro.css'/>
		</head>
		<body>
			<img src='../resources/images/registrar.png'/>
			<br/><br/><br/><br/><br/><br/><br/>
			<form method='POST' action='registroR.php'>
				<label>Nombre de usuario</label><br/>
				<input type=text size='60' maxlength='15' name='usuario' placeholder='Máximo 15 caracteres alfanuméricos (letras, dígitos y @/./+/-/_) solamente.' required/>
				<br/><br/><br/><br/>
				<label>Contraseña</label><br/>
				<input type='password' size='60' maxlength='30' name='contraseña' required/><br/>
				<span>Mínimo 8 caracteres.Longitud máxima: 30 caracteres alfanuméricos (letras, dígitos y @/./+/-/_) solamente.</span>
				<br/><br/>
				<input type='submit' value='Registrarse'/>
			</form>	
			<br/><br/><br/><br/>
			<div>
				<b><a href='inicio.php'>Inicio</a></b><br/><br/>
			</div>
		</body>
	</html>";
?>