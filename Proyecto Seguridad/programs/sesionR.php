<?php
	$usuario=$_POST['usu'];
	$contra=$_POST['contra'];
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
			<title>Inicio de sesión</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/sesion.css'/>
		</head>
		</head>
		<body>
			<img src='../resources/images/Iniciar sesion.png'/>
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
						$verificar_contra = mysqli_query($conn,"SELECT * FROM usuarios WHERE contrasena = '".$cifcont."';");
						$numCon=mysqli_num_rows($verificar_contra);
						if($numCon==0)
						{
							echo"<h1>La contraseña introducida no es correcta</h1>";
							echo"<br/><br/><br/><br/>";
							echo"<div>";
							echo"	<b><a href='sesion.php'>Volver a intentarlo</a></b>";
							echo"</div>";
						}
						else
						{
							echo"<h1>BIENVENIDO <br/><span>".$usuario."</span></h1><br/><br/>";
							echo"<h1 class='Inicio'><a href='Menu.php'>Vamos YA!!!</a></h1>";
						}
					}
					else
					{
						echo "<h1>No existe el Usuario Introducido</h1>";
						echo"<br/><br/><br/><br/>";
						echo"<div>";
						echo"	<b><a href='sesion.php'>Volver a intentarlo</a></b>";
						echo"</div>";
					}
				}
				else
				{
					echo "<h1>Contraseña o Nombre de Usuario no válid@(s).</h1>";
					echo"<br/><br/><br/><br/>";
					echo"<div>";
					echo"	<b><a href='sesion.php'>Volver a intentarlo</a></b>";
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