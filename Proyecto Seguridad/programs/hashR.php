<?php
	$numero=$_POST['numero'];
	$vali='/^[0-9]{8}/';
	$num=preg_match($vali,$numero);
	function firma($num)
	{
		$a=strlen($num);
		$b=substr($num,0,6);
		$c=strrev($b);
		$d=substr($c,0,2);
		$e=decbin($d);
		$f=substr($c,2,4);
		$g="#$?!".$e."!.-¿".$f."!!.&%";
		return $g;
	}
	$hash2=firma($numero);
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Hash</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/resultados.css'/>
		</head>
		<body>";
			if($num==1)
			{
echo"			<h1>Mensaje Original</h1>";
echo			$numero."<br/><br/>";
echo"			<h1>Hash</h1>";
echo 			$hash2;
echo"			<br/><br/><br/><br/><br/><br/>";
			}
			else
echo"			<h1>Valor introducido INVÁLIDO</h1>";
echo"		<div>";
echo"			<a href='hash.php'>Volver a intentarlo</a>
			</div>
		</body>
		</html>";
?>