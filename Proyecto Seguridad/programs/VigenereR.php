<?php
	$cad=$_POST['texto'];
	$llave='PROYECTOSEGURIDADCARLOSHVIGENE';
	//$llave=$_POST['llave'];
	$valcad='/^[A-Z]{1,30}$/';
	//$valllave='/^[A-Z]{1,30}$/';
	$cad2=preg_match($valcad,$cad);
	//$llave2=preg_match($valllave,$llave);
	$arre=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>Vigenere</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/resultados.css'/>
		</head>
		<body>";
			if($cad2==1 /*&& $llave2==1*/)
			{
				echo"<h1>Mensaje Original</h1>";
				echo $cad;
				echo"<br/><br/><br/>";
				echo"<h1>Mensaje cifrado (con la llave 'PROYECTOSEGURIDADCARLOSHVIGENE')</h1>";
				$len=strlen($cad);
				$cif=array();
				for($x=0;$x<$len;$x++)
				{
					$corx=substr($cad,$x,1);
					$pos=array_search($corx,$arre);
					$cif=$pos;
					$cori=substr($llave,$x,1);
					$pos2=array_search($cori,$arre);
					$cif2=$pos2;
					$cifrado=($cif+$cif2)%26;
					$resul=$arre[$cifrado];
					echo $resul;
				}
			}
			else
			{
				echo"<h1>Texto introducido no válido. Es necesario introducir 30 caracteres, SOLO MAYÚSCULAS.</h1>";
			}
echo"		<br/><br/><br/>";
echo"		<div>
				<a href='Vigenere.php'>Volver a intentarlo</a>
			</div>
		</body>
	</html>";	
?>