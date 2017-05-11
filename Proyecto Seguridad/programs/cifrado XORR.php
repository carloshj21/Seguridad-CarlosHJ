<?php
	$carac=$_GET['caracter'];
	function strToBin($input)
	{
		if (!is_string($input))
			return false;
		$value = unpack('H*', $input);
		return bindec(base_convert($value[1], 16, 2));
	}
	$a=strToBin($carac);
	$b=$a^(1111);
	$b &=(0xFFFFFFFF);
	$car='/^[A-z0-9]$/';
	$val=preg_match($car,$carac);
 echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Cifrado XOR</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/resultados.css'/>
		</head>
		<body>";
echo"		<h1>Cifrado XOR de '".$carac."'</h1>";
			if($val==1)
				echo $b;
			else
echo"			Valor introducido: Inválido";
echo"		<br/><br/><br/><br/><br/><br/>";
echo"		<div>
				<a href='cifrado XOR.php'>Volver a intentarlo</a>
			</div>
		</body>
		</html>";
?>