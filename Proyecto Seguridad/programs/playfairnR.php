<?php
	$cadena=$_POST['cadena'];
	$numero=$_POST['num'];
	$valcad='/^[A-z0-9.,"$%&?¿¡!]{3,}$/';
	$valnum='/^[0-9]{1}$/';
	$num=preg_match($valnum,$numero);
	$cad=preg_match($valcad,$cadena);
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Playfair-n</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/resultados.css'/>
		</head>
		<body>";
			if($num==1 && $cad==1)
			{
				$len=strlen($cadena);
				//echo $len."<br/>";
				$div=$len/$numero;
				//echo $div."<br/>";
				$div2=ceil($div);
				//echo $div2."<br/>";
				$y=0;
				for($x=0;$x<$div2;$x++)
				{
					$cx=substr($cadena,$y,$numero);
					$arrex=str_split($cx,1);
					$y+=$numero;
					//print_r($arrex);
					//echo"<br/>";
					//echo $arrex[0];					
				}
				for($x=0;$x<$div2;$x++)
				{
					for($z=0;$z<3;$z++)
					{
						echo $arrex[$z];
					}
					echo" ";
				}
			}
			else
				echo"<h1>Datos introducidos no válidos</h1>";
echo"		<br/><br/><br/><br/><br/><br/>
			<div>
				<a href='playfairn.php'>Volver a intentarlo</a>
			</div>
		</body>
		</html>";
?>