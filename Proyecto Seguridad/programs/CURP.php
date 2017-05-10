<?php
	$lugar=array('AGUASCALIENTES AS','BAJA CALIFORNIA BC','BAJA CALIFORNIA SUR BS','CAMPECHE CC','COAHUILA CL','COLIMA CM','CHIAPAS CS','CHIHUAHUA CH',
			'DISTRITO FEDERAL DF','DURANGO DG','GUANAJUATO GT','GUERRERO GR','HIDALGO HG','JALISCO JC','MÉXICO MC','MICHOACÁN MN','MORELOS MS','NAYARIT NT',
			'NUEVO LEÓN NL','OAXACA OC','PUEBLA PL','QUERÉTARO QT','QUINTANA ROO QR','SAN LUIS POTOSÍ SP','SINALOA SL','SONORA SR','TABASCO TC',
			'TAMAULIPAS TS','TLAXCALA TL','VERACRUZ VZ','YUCATÁN YN','ZACATECAS ZS');
	$lu=array('AS','BC','BS','CC','CL','CM','CS','CH','DF','DG','GT','GR','HG','JC','MC','MN','MS','NT','NL','OC','PL','QT','QR','SP','SL','SR','TC',
				'TS','TL','VZ','YN','ZS');	
	$let=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	echo"<!DOCTYPE html>
		<html lang='es'>
		<head>
			<title>CURP</title>
			<meta charset='UTF-8'/>
			<link rel='stylesheet' type='text/css' href='../styles/formu.css'/>
		</head>
		<body>
			<form method='GET' action='CURPR.php'>
			<fieldset>
				<legend>Datos personales</legend>
				<label>Nombre:</label>
				<input type='text' name='nom' size='40' maxlength='40' placeholder='Apellido Paterno, Apellido Materno y Nombre(s)'/>
				<label>Fecha de nacimiento:</label>
				<input type='date' name='fechnac'/>
				<label>Sexo:</label>
				<label class='diferente'>Hombre</label>
				<input type='radio' name='sexo' class='diferente' value='hombre'/>
				<label class='diferente' >Mujer</label>
				<input type='radio' name='sexo'  class='diferente' value='mujer'/><br/>
				<label>Lugar de Nacimiento:</label>
				<br/>
				<select name='lugar'>";
					for($i=0;$i<32;$i++)
					{
						echo"<option value='".$lu[$i]."'>".$lugar[$i]." </option>";
					}
		echo"   </select>
				<br/>
				<input type='submit' class='diferente' value='Enviar datos'/>
				<input type='reset' class='diferente'value='Borrar datos'/>
			</fieldset>
			</form>
			<a href='Menu.php'>Menú Principal</a>
		</body>
		</html>";
?>