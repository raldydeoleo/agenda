<?php
include ("conexion.php");
?>


<html><title>Formulario para registrar contactos</title>
<body>

<H1>Registro de contactos</H1>


<form action="" method="post" name="formRegContact">
			<table border=0>
				<tr>
					<td align=left>Nombre:</td>
					<td><input type="text" size=50 name="nombre"></td>
				</tr>
				<tr> 
					<td align=left>Apellido:</td>
					<td><input type="text" size=50 name="apellido"></td>
				</tr>
				<tr> 
					<td align=left>Email:</td>
					<td><input type="text" size=25 name="email"></td>
				</tr>
				<tr> 
					<td align=left>Telefono:</td>
					<td><input type="text" size=25 name="telefono"></td>
				</tr>
				<tr><td></td>
					<td align=right> <input type="reset" value="Limpiar"> 
					<input type="submit" value="Guardar"> </td>	
				</tr>
				
			</table>
	
</form>

<?php

	if ($_POST) //Si el usuario presiona el boton del form
	{
		$nomcontact=$_POST['nombre'];
		$apecontact=$_POST['apellido'];
		$emailcontact=$_POST['email'];
		$telcontact=$_POST['telefono'];


		mysql_query("INSERT INTO agenda (nom_contact, ape_contact, correo_contact, tel_contact ) values ('$nomcontact','$apecontact', '$emailcontact', '$telcontact')") or die(mysql_error());
		echo "Registro Guardado";

	}   
?>
		
</body></html>
