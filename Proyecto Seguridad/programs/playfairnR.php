<?php
	//$cadena=$_POST['cadena'];
	//$numero=$_POST['num'];
	$cadena='Navega,veleromio,sintemor';
	$numero=5;
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
				$div=$len/$numero;
				$div2=ceil($div);
				$y=0;
				$matr=[];
				for($x=0;$x<$div2;$x++)
				{
					$cx=substr($cadena,$y,$numero);
					${'arre'.$x}=str_split($cx,1);
					$matr[$x]=${'arre'.$x};
					$y+=$numero;
				}
				echo"<h1>Mensaje original</h1>";
				echo $cadena;
				echo"<br/><br/><br/>";
				echo"<h1>Mensaje cifrado (playfair 5):</h1>";
				//print_r($matr);
				$arre0=$matr[0];
				$arre1=$matr[1];
				$arre2=$matr[2];
				$arre3=$matr[3];
				$arre4=$matr[4];
				echo $arre0[0];
				echo $arre1[0];
				echo $arre2[0];
				echo $arre3[0];
				echo $arre4[0];
				echo" ";
				echo $arre0[1];
				echo $arre1[1];
				echo $arre2[1];
				echo $arre3[1];
				echo $arre4[1];
				echo" ";
				echo $arre0[2];
				echo $arre1[2];
				echo $arre2[2];
				echo $arre3[2];
				echo $arre4[2];
				echo" ";
				echo $arre0[3];
				echo $arre1[3];
				echo $arre2[3];
				echo $arre3[3];
				echo $arre4[3];
				echo" ";
				echo $arre0[4];
				echo $arre1[4];
				echo $arre2[4];
				echo $arre3[4];
				echo $arre4[4];
				//foreach($matr as $val)
				//{
					//foreach($val as $val2)
						/*$arre0=($matr[0]);
						foreach($arre0 as $valor)
							echo $arre0[$i];*/
				//}
				/*$a=0;
				foreach($matr as $llave => $valor)
				{
					foreach($matr as $llave => $valor)
					{
						${'arre'.$llave}=$matr[$llave];
						${'cad'.$llave}=${'arre'.$llave}[$a];
						print_r(${'arre'.$llave});
						echo"<br/>";
						echo ${'cad'.$llave};
						echo"<br/>";
					}
					$a++;
				}*/
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