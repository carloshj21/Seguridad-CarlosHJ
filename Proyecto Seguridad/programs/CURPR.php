<?php
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>CURP</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/formul.css'/>
		</head>
		<body>";	
			$arre=array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'A'=>10,'B'=>11,'C'=>12,'D'=>13,'E'=>14,'F'=>15,'G'=>16,
						'H'=>17,'I'=>18,'J'=>19,'K'=>20,'L'=>21,'M'=>22,'Ñ'=>23,'N'=>24,'O'=>25,'P'=>26,'Q'=>27,'R'=>28,'S'=>29,'T'=>30,'U'=>31,'V'=>32,
						'W'=>33,'X'=>34,'Y'=>35,'Z'=>36);
			//vocal primera apellido-------------------------------------------
			function v1p1 ($apellido)
			{
				$i=1;
				while($apellido[$i]!='a' && $apellido[$i]!='e' && $apellido[$i]!='i' && $apellido[$i]!='o' && $apellido[$i]!='u')
					$i++;
				$b=$apellido[$i];
				return $b;
			}
			//consonante primera------------------------------------------------
			function ca1 ($cadena)
			{
				$i=1;
				while($cadena[$i]=='a' || $cadena[$i]=='e' || $cadena[$i]=='i' || $cadena[$i]=='o' || $cadena[$i]=='u')
					$i++;
				$c=$cadena[$i];
				return $c;
			}
			//Cambiar CURP a valores numéricos------------------------------------
			function cambiarNum($a,$arre)
			{
				$en=strtr($a,$arre);
				return $en;
			}
			//Nombre---------------------------------------------------------------
			$nom=$_GET['nom'];
			$nom1=array('Á'=>'A','É'=>'E','Í'=>'I','Ó'=>'O','Ú'=>'U','á'=>'a','é'=>'e','í'=>'i','ó'=>'o','ú'=>'u');
			$nom2=array_keys($nom1);
			$nom3=$nom;
			foreach($nom2 as $val)
				$nom3=str_replace($val,$nom1[$val],$nom3);
			$z1=strstr($nom3,' ');
			$z2=ltrim($z1); 
			$a3=strstr($z2,' ');
			//----------------------------------------------------------------------
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
			//Fecha nacimiento--------------------------------------------------------
			$fecha=$_GET['fechnac'];
			$año2=substr($fecha,0,4);
			$año=substr($fecha,2,2);
			$mes=substr($fecha,5,2);
			$dia=substr($fecha,8,2);
			//Sexo---------------------------------------------------------------------
			$sexo=$_GET['sexo'];
			$a=substr($sexo,0,1);
			//Lugar nacimiento---------------------------------------------------------
			$lugar=$_GET['lugar'];
			//Código Único  (17)-------------------------------------------------------
			if($año2<2000)
				$cod1=0;
			else	
				$cod1='A';
			//CURP sin el último caracter-----------------------------------------------
			$curp=$pla.$x1.$pla2.$pln.$año.$mes.$dia.$a.$lugar.$x2.$x3.$x4.$cod1;
			$curp1=strtoupper($curp);
			//Codificación caracter 18--------------------------------------------------
			$car1=substr($curp1,0,1);
			$c1=cambiarNum($car1,$arre);
			$c1c=$c1*18;
			$car2=substr($curp1,1,1);
			$c2=cambiarNum($car2,$arre);
			$c2c=$c2*17;
			$car3=substr($curp1,2,1);
			$c3=cambiarNum($car3,$arre);
			$c3c=$c3*16;
			$car4=substr($curp1,3,1);
			$c4=cambiarNum($car4,$arre);
			$c4c=$c4*15;
			$car5=substr($curp1,4,1);
			$c5=cambiarNum($car5,$arre);
			$c5c=$c5*14;
			$car6=substr($curp1,5,1);
			$c6=cambiarNum($car6,$arre);
			$c6c=$c6*13;
			$car7=substr($curp1,6,1);
			$c7=cambiarNum($car7,$arre);
			$c7c=$c7*12;
			$car8=substr($curp1,7,1);
			$c8=cambiarNum($car8,$arre);
			$c8c=$c8*11;
			$car9=substr($curp1,8,1);
			$c9=cambiarNum($car9,$arre);
			$c9c=$c9*10;
			$car10=substr($curp1,9,1);
			$c10=cambiarNum($car10,$arre);
			$c10c=$c10*9;
			$car11=substr($curp1,10,1);
			$c11=cambiarNum($car11,$arre);
			$c11c=$c11*8;
			$car12=substr($curp1,11,1);
			$c12=cambiarNum($car12,$arre);
			$c12c=$c12*7;
			$car13=substr($curp1,12,1);
			$c13=cambiarNum($car13,$arre);
			$c13c=$c13*6;
			$car14=substr($curp1,13,1);
			$c14=cambiarNum($car14,$arre);
			$c14c=$c14*5;
			$car15=substr($curp1,14,1);
			$c15=cambiarNum($car15,$arre);
			$c15c=$c15*4;
			$car16=substr($curp1,15,1);
			$c16=cambiarNum($car16,$arre);
			$c16c=$c16*3;
			$suma=$c1c+$c2c+$c3c+$c4c+$c5c+$c6c+$c7c+$c8c+$c9c+$c10c+$c11c+$c12c+$c13c+$c14c+$c15c+$c16c;
			$modulo=$suma%10;
			$modulo2=10-$suma%10;
			//CURP con el último caracter ya real y verídico------------------------------------------
			$curp2=$curp1.$modulo2;
echo"		<fieldset>
				<h3>Nombre:</h3>
				<h1>".$nom."</h1><br/>
				<h3>CURP:</h3>
				<h1>".($curp2)."</h1><br/>
			</fieldset>
			<a href='CURP.php'>Volver a intentarlo</a>
		</body>
	</html>";
?>