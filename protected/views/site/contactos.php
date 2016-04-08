<h1>Contactos Registrados </h1> 

<?php 

	$conexion= mysql_connect("localhost", "root","netpro2016");
	mysql_select_db("Test1", $conexion);

	$registrosc = mysql_query("select * from agenda", $conexion);
		
		while ($fila = mysql_fetch_array($registrosc))
		{
			
			<table border=0.5>
			<tr><td>echo "<b>Nombre: </b>"; </td><td>echo $fila["nom_contact"];</td>
			<tr><td>echo "<br><b>Apellido: </b>";</td><td>echo $fila["ape_contact"];</td></tr>
			<tr><td>echo "<b>Correo Electronico:</b>";</td><td>echo "$fila["correo_contact];</td> 
			echo "<p>";

            </table>

		}
?>