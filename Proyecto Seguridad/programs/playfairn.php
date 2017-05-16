<?php
echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>Playfair-n</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/estilo.css'/>
		</head>
		<body>";
echo"		<h1>Playfair-n</h1>
			<br/><br/><br/>
			<form method='POST' action='playfairnR.php' align='center'>
				<label>Introduzca una cadena de caracteres: (Sin espacios) </label><br/><br/>
				<input type='text' size='60' maxlength='80' name='cadena' placeholder='Caracteres alfanuméricos (letras y dígitos) solamente.SIN ACENTOS.' required/><br/><br/>
				<label>Introduce un dígito: <label><br/><br/>
				<input type='text' size='1' maxlength='1' name='num' required/><br/><br/>
				<input type='submit' value='Enviar'/>
			</form>
			<div>
				<a href='Menu.php'>Menú principal</a>
			</div>
		</body>
		</html>";
	/*function playfair($str, $n)
	{
		$arre=array();
		$arref = array();
		$fin=array();
		$x=0;
		$str=str_split($str,$n);
		foreach($str as $pal)
		{
			$arre[]=$pal;
			$arre2=str_split($arre["$x"]);
			$arref[]=$arre2;
			$x++;
		}
		for($x=0;$x<$n;$x++)
			foreach ($arref as $play => $let) 
			{
				$fin[]=$let[$x];
				$pro=implode('', $fin);
			}
	    echo $pro."<br/>";
	}
	function playfairinv($str, $n)
	{
		$arre=array();
		$arref = array();
		$fin=array();
		$x=0;
		$str=str_split($str,$n);
		foreach($str as $pal)
		{
			$arre[]=$pal;
			$arre2=str_split($arre["$x"]);
			$arref[]=$arre2;
			$x++;
		}
		for($x=$n;$x>=0;$x--)
			foreach ($arref as $play => $let) 
			{
				$fin[]=$let[$x];
				$pro=implode('', $fin);
			}
	    echo $pro."<br/>";
	}
	echo "Practica de playfair (Arriba a la izquierda y de arriba a la derecha)<br/>";
	  	$n=7;
		$pal='hola mundo, como esta';
		playfair($pal, $n);
		echo "<br/>";
		playfairinv($pal, $n);*/
?>