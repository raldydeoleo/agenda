<h1>Lista de contactos</h1> 

<?php 

$conexion= mysql_connect("localhost", "root","netpro2016");
	mysql_select_db("Test1", $conexion);

	$registros = mysql_query("select * from agenda", $conexion);
		
		echo "<select name='select1'>"; 
		while ($fila = mysql_fetch_array($registros)){
			echo "<b>Nombre: </b>", $fila["nom_contact"];
			echo "<br><b>Apellido: </b>" , $fila["ape_contact"]; 
			echo "<br><b>Email: </b>", $fila["correo_contact"];
			
			echo "<option value='1'>", $fila["nom_contact"];
			echo "</option>";
			
			

		} echo "</select>";
         
?>