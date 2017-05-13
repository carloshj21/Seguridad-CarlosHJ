<?php
	$usuario=$_GET['usuario'];
	$contra=$_GET['contraseña'];
	$cont='/^[A-z0-9@.-_]{8,30}$/';
	$val=preg_match($cont,$contra);
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
			<link rel='stylesheet' type='text/css' href='../styles/.css'/>
		</head>
		<body>";
		if($val==1)
		{
			$cifcont=firma($contra);
			echo $cifcont;
		}
		else
		{
			echo "<h1>Contraseña no válida</h1>";
			echo"<a href='registro.php'>Volver a intentarlo</a>";
		}
echo"		<div>
				<a href='inicio.php'>Inicio</a><br/><br/>
			</div>
		</body>
	</html>";
?>