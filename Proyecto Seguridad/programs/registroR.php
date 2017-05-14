<?php
	$usuario=$_POST['usuario'];
	$contra=$_POST['contraseña'];
	$usu='/^[A-z0-9@.-_]{1,15}$/';
	$cont='/^[A-z0-9@.-_]{8,30}$/';
	$valusu=preg_match($usu,$usuario);
	$valcon=preg_match($cont,$contra);
	function firma($contr)
	{
		$a=strlen($contr);
		$b=substr($contr,0,6);
		$c=strrev($b);
		$d=substr($c,0,2);
		$e=substr($c,2,4);
		$f="#$?!".$d."!.-¿".$e."!!.&%";
		return $f;
	}
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>Registro</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/registro.css'/>
		</head>
		<body>
			<img src='../resources/images/registrar.png'/>
			<br/><br/><br/><br/><br/><br/><br/>";
			$conn=mysqli_connect('localhost','root','','seguridad');
			if($conn)
			{
				if($valcon==1 && $valusu==1)
				{
					$cifcont=firma($contra);
					$verificar_usuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE NombreUsuario = '".$usuario."';");
					$numUsu=mysqli_num_rows($verificar_usuario);
					if($numUsu>0)
					{
						echo "<h1>El usuario ya está registrado</h1><br/>";
						echo"<br/><br/><br/><br/>";
						echo"<div>";
						echo"	<b><a href='registro.php'>Volver a intentarlo</a></b>";
						echo"</div>";
					}
					else
					{
						$insertar="INSERT INTO usuarios(NombreUsuario, contrasena) VALUES ('".$usuario."','".$cifcont."');";
						$resultado= mysqli_query($conn,$insertar);
						if($resultado==FALSE)
						{
							echo "Error al registrarse<br/>";
							echo"<br/><br/><br/><br/>";
							echo"<div>";
							echo"	<b><a href='registro.php'>Volver a intentarlo</a></b>";
							echo"</div>";
						}
						else
						{
							echo"<h1>Registro exitoso</h1><br/>";
							echo"<br/><br/><br/><br/>";
							echo"<div>";
							echo"	<b><a href='sesion.php'>Iniciar sesión</a></b>";
							echo"</div>";
						}
					}
				}
				else
				{
					echo "<h1>Contraseña o Nombre de Usuario no válid@(s).</h1><br/>";
					echo"<br/><br/><br/><br/>";
					echo"<div>";
					echo"	<b><a href='registro.php'>Volver a intentarlo</a></b>";
					echo"</div>";
				}
			}
			else
				echo "<h1>Error al conectar con la base de datos</h1>";
echo"		<div>
				<b><a href='inicio.php'>Inicio</a></b><br/><br/>
			</div>
		</body>
	</html>";
?>