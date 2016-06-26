<?php
include ("conexion.php");
?>

/*
Modificado en fecha 26/06/2016. para hacer un commit a git
y probar que se usar github.

*/
<html><title>Formulario</title>
<body>

<H1>Registro de usuarios</H1>


<form action="" method="post" name="form">
			<table border=0>
				<tr>
					<td align=left>Nombre:</td>
					<td><input type="text" size=36 name="nombre"></td>
				</tr>
				<tr> 
					<td align=left>Password:</td>
					<td><input type="password" size=36 name="pw"></td>
				</tr>
				<tr><td></td>
					<td align=right> <input type="reset" value="Borrar"> 
					<input type="submit" value="Insertar"> </td>	
				</tr>
				
			</table>
	
</form>

<?php

	if ($_POST) //Si el usuario presiona el boton del form
	{
		$nom=$_POST['nombre'];
		$clave=$_POST['pw'];
		mysql_query("INSERT INTO tbl_user (username, password) values ('$nom','$clave')") or die(mysql_error());
		echo "Registro Guardado";

	}   
?>
		
</body></html>
