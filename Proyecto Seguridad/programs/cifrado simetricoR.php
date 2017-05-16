<?php
	$cad=$_POST['texto'];
	$llave=$_POST['llave'];
	$valcad='/^[a-z]{1,30}$/';
	$valllave='/^[1-3a-c]{1}$/';
	$cad2=preg_match($valcad,$cad);
	$llave2=preg_match($valllave,$llave);
	$arre1=array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'a'=>4,'b'=>5,'c'=>6,);
	$arre2=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','a','b','c','d','e','f');
	$arre3=array('f','e','d','c','b','a','z','y','x','w','v','u','t','s','r','q','p','o','n','m','l','k','j','i','h','g','f','e','d','c','b','a');
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>Cifrado simétrico</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/resultados.css'/>
		</head>
		<body>";
			if($cad2==1 && $llave2==1)
			{
				echo "<h1>Mensaje Cifrado</h1>";
				$len=strlen($cad);
				$cam=strtr($llave,$arre1);
				$cif=[];
				for($x=0;$x<$len;$x++)
				{
					$corx=substr($cad,$x,1);
					$pos=array_search($corx,$arre2);
					$pos2=$pos+=$cam;
					$cif[$x]=$arre2[$pos2];
					$cif2=implode($cif);
				}
				echo $cif2;
				echo "<br/><br/><br/><br/><h1>Si aplicamos el método de descifrado...<br/>Vuelve el mensaje original!</h1>";
				for($x=0;$x<$len;$x++)
				{
					$corx=substr($cif2,$x,1);
					$pos=array_search($corx,$arre3);
					$pos2=$pos+=$cam;
					$cif3[$x]=$arre3[$pos2];
					$cif4=implode($cif3);
				}
				echo $cif4;
			}
			else
			{
				echo"<h1>Datos introducidos no válidos</h1>";
			}

echo"		<br/><br/><br/>";
echo"		<div>
				<a href='cifrado simetrico.php'>Volver a intentarlo</a>
			</div>
		</body>
	</html>";	
?>