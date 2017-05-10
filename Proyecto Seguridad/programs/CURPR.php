<?php
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>CURP</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/formul.css'/>
		</head>
		<body>";	
	//vocal primera apellido--------
	function v1p1 ($apellido)
	{
		$i=1;
		while($apellido[$i]!='a' && $apellido[$i]!='e' && $apellido[$i]!='i' && $apellido[$i]!='o' && $apellido[$i]!='u')
			$i++;
		$b=$apellido[$i];
		return $b;
	}
	//consonante primera------------
	function ca1 ($cadena)
	{
		$i=1;
		while($cadena[$i]=='a' || $cadena[$i]=='e' || $cadena[$i]=='i' || $cadena[$i]=='o' || $cadena[$i]=='u')
			$i++;
		$c=$cadena[$i];
		return $c;
	}
	//Nombre------------------
	$nom=$_GET['nom'];
	$nom1=array('Á'=>'A','É'=>'E','Í'=>'I','Ó'=>'O','Ú'=>'U','á'=>'a','é'=>'e','í'=>'i','ó'=>'o','ú'=>'u');
	$nom2=array_keys($nom1);
	$nom3=$nom;
	foreach($nom2 as $val)
		$nom3=str_replace($val,$nom1[$val],$nom3);
	$z1=strstr($nom3,' ');
	$z2=ltrim($z1); 
	$a3=strstr($z2,' ');
	//------
	$a1=strstr($nom3,' ',TRUE);
	$a2=strstr($z2,' ',TRUE);
	$n=ltrim($a3);
	$pla=substr($nom3,0,1);
	$pla2=substr($a2,0,1);
	$pln=substr($n,0,1);
	$x1=v1p1($a1);
	$x2=ca1($a1);
	$x3=ca1($a2);
	$x4=ca1($n);
	//Fecha nacimiento--------
	$fecha=$_GET['fechnac'];
	$año2=substr($fecha,0,4);
	$año=substr($fecha,2,2);
	$mes=substr($fecha,5,2);
	$dia=substr($fecha,8,2);
	//Sexo-------------------
	$sexo=$_GET['sexo'];
	$a=substr($sexo,0,1);
	//Lugar nacimiento--------
	$lugar=$_GET['lugar'];
	//Código Único
	if($año2<2000)
		$cod1=0;
	else	
		$cod1='A';
	//curp------------------
	$curp=$pla.$x1.$pla2.$pln.$año.$mes.$dia.$a.$lugar.$x2.$x3.$x4.$cod1;
	$curp1=strtoupper($curp);
			echo"	<fieldset>
					<h3>Nombre:</h3>
					<h1>".$nom."</h1><br/>
					<h3>CURP:</h3>
					<h1>".utf8_decode($curp1)."</h1><br/>
				</fieldset>
			<a href='CURP.php'>Volver a intentarlo</a>
			</body>
			</html>";
?>