<?php
	$cuenta=$_POST['cuenta'];
	function simple ($cad)
	{
		$rev=strrev($cad);
		$len=strlen($rev);
		$rev2=str_split($rev);
		for($i=0;$i<$len;$i++)
		{
			$arre[$i]="$.#-1".$rev2[$i]."4#$0.1,2$3?";
			$cifrar=implode($arre);
		}
		return $cifrar;
	}
	$cuen='/^[0-9]{9}$/';
	$val=preg_match($cuen,$cuenta);
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Cifrado Simple</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/resultados.css'/>
		</head>
		<body>";
echo"		<h1>Tu número de cuenta es:</h1><br/>";
			if($val==1)
			{
				$a=simple($cuenta);
				echo $a."<br/><br/>";
			}
			else
				echo "El número de cuenta introducido es inválido.(Únicamente dígitos(9), sin guión)";
echo"		<br/><br/><br/><br/><br/><br/>
			<div>
				<a href='cifrado simple.php'>Volver a intentarlo</a>
			</div>
		</body>
		</html>";
?>