<?php
	$visa=$_POST['visa'];
	$val='/^4[0-9]{15}$/';
	$visaval=preg_match($val,$visa);
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<title>VISA</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/resultados.css'/>
		</head>
		<body>";
			$r=0;
			if($visaval==1)
			{
				$car1=substr($visa,0,1);
				$c1=$car1*2;
				if($c1>=10)
					$r++;
				$car2=substr($visa,1,1);
				$car3=substr($visa,2,1);
				$c3=$car3*2;
				if($c3>=10)
					$r++;
				$car4=substr($visa,3,1);
				$car5=substr($visa,4,1);
				$c5=$car5*2;
				if($c5>=10)
					$r++;
				$car6=substr($visa,5,1);
				$car7=substr($visa,6,1);
				$c7=$car7*2;
				if($c7>=10)
					$r++;
				$car8=substr($visa,7,1);
				$car9=substr($visa,8,1);
				$c9=$car9*2;
				if($c9>=10)
					$r++;
				$car10=substr($visa,9,1);
				$car11=substr($visa,10,1);
				$c11=$car11*2;
				if($c11>=10)
					$r++;
				$car12=substr($visa,11,1);
				$car13=substr($visa,12,1);
				$c13=$car13*2;
				if($c13>=10)
					$r++;
				$car14=substr($visa,13,1);
				$car15=substr($visa,14,1);
				$c15=$car15*2;
				if($c15>=10)
					$r++;
				$suma=$c1+$car2+$c3+$car4+$c5+$car6+$c7+$car8+$c9+$car10+$c11+$car12+$c13+$car14+$c15;
				$suma2=$suma*-1;
				$resul1=$suma2-$r;
				$resul2=$resul1%10;
				$car16=10+$resul2;
				$visa2=$car1.$car2.$car3.$car4.$car5.$car6.$car7.$car8.$car9.$car10.$car11.$car12.$car13.$car14.$car15.$car16;
				if($visa==$visa2)
				{
					echo"<h1>Número de VISA válido</h1>";
					echo $visa;
				}
				else
				{
					echo"<h1>Número de VISA no válido</h1>";
				}
			}
			else
				echo"<h1>Lo qué introdujiste no corresponde al número de una VISA</h1>";
echo"		<br/><br/><br/><br/><br/><br/>
			<div>
				<a href='VISA.php'>Volver a intentarlo</a>
			</div>
		</body>
	</html>";
?>