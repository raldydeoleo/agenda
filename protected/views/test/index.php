<h1>Hola Mundo!</h1> 
<?php 

$conexion= mysql_connect("localhost", "root","netpro2016");
	mysql_select_db("Test1", $conexion);
/*
	$registros = mysql_query("select * from tbl_user", $conexion);
		while ($fila = mysql_fetch_array($registros)){
			echo "<b>Nombre: </b>", $fila["username"];
			echo "<br><b>Password: </b>" , $fila["password"]; 
			echo "<p>";

		}
         */
?>