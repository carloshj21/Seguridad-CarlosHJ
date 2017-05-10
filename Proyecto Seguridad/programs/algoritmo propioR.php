<?php
	$texto=$_GET['texto'];
	$arre=array('a' => 'm','b' => 'q','c' => 'n','d' => 'w','e' => 'b','f' => 'e','g' => 'v','h' => 'r','i' => 'c','j' => 't','k' => 'x',
				'l' => 'y','m' => 'z','n' => 'u','o' => 'l','p' => 'i','q' => 'k','r' => 'o','s' => 'j','t' => 'p','u' => 'h','v' => 'a',
				'w' => 'g','x' => 's','y' => 'f','z' => 'd');
	$arre2=array('m' => 'a','q' => 'b','n' => 'c','w' => 'd','b' => 'e','e' => 'f','v' => 'g','r' => 'h','c' => 'i','t' => 'j','x' => 'k',
				'y' => 'l','z' => 'm','u' => 'n','l' => 'o','i' => 'p','k' => 'q','o' => 'r','j' => 's','p' => 't','h' => 'u','a' => 'v',
				'g' => 'w','s' => 'x','f' => 'y','d' => 'z');
	function encode($a,$arre)
	{
		$en=strtr($a,$arre);
		return $en;
	}
	function decode($b,$arre)
	{
		$de=strtr($b,$arre);
		return $de;
	}
	$ab=encode($texto,$arre);
	$ac=decode($ab,$arre2);
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Algoritmo Propio</title>
			<meta charset='UTF-8'/>
		</head>
		<body>";
echo"		<h1>Mensaje Original</h1>";
			echo $ac."<br/><br/>";
echo"		<h1>Mensaje Codificado</h1>";
			echo $ab;
echo"		<br/><br/><br/><br/><br/><br/>
			<a href='algoritmo propio.php'>Volver a intentarlo</a>
		</body>
		</html>";
?>