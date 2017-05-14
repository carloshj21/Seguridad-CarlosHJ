<?php
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>Iniciar sesión</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/sesion.css'/>
		</head>
		<body>
			<img src='../resources/images/Iniciar sesion.png'/>
			<br/><br/><br/><br/><br/><br/><br/>
			<form action='sesionR.php' method='POST'>
				<label>Nombre de usuario</label><br/>
				<input type='text' size='30' maxlength='15' name='usu' required/>
				<br/><br/>
				<label>Contraseña</label><br/>
				<input type='password' size='30' maxlength='30' name='contra' required/>
				<br/><br/>
				<input type='submit' value='Iniciar sesión'/>
			</form>
			<br/><br/><br/><br/><br/><br/>
			<div>
				<b><a href='inicio.php'>Inicio</a></b><br/><br/>
			</div>
		</body>
	</html>";
?>