<?php
include ("conexion.php");
?>


<html><title>Consulta de Contactos por Usuario</title>
<body>

<H1>Consulta de Contactos por Usuario</H1>

<?php
$conexion= mysql_connect("localhost", "root","netpro2016");
	mysql_select_db("Test1", $conexion);

$registros = mysql_query("select * from tbl_user", $conexion);
 		
		echo "<select name='select1'>";
		echo "<option selected=0>";
		echo "Seleccione Usuario";
		echo "</option>"; 
		while ($fila = mysql_fetch_array($registros)){
						
			echo "<option value='1'>", $fila["username"];
			echo "</option>";
			
			

		} echo "</select>";

		


?>

 
<div id="body">
 <div id="content">

    <table align="center">
    
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Telefono</th>
    <th colspan="2">Correo Electronico</th>
    </tr>
    <?php


	
 	$sql_query="SELECT * FROM tbl_user";
 	$result_set=mysql_query($sql_query);
    while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        
  
        <?php
 }      	
 ?>         

    </table>
    </div>
</div>

		
</body></html>
