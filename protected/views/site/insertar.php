<?php
	include("conexion.php");
	//include("nuevocontacto.php")
    
    
$user = $_POST["nombre"];
$pass = $_POST["pw"]; 

    /*
    if(isset($_POST['nombre']) && !empty($_POST['nombre']) && (isset($_POST['pw']) && !empty($_POST['pw'] ))
		{  */
			$con=mysql_connect($host,$user,$pw) or die("problemas al conectar");
			mysql_select_db($db, $con) or die("problemas con la base de datos");
		
			mysql_query("INSERT INTO tbl_user(username,password) VALUES ('$user','$pass')", $con);
			echo "datos insertados correctamente.";
	
     /*
		}

 	else echo "PROBLEMAS AL INSERTAR DATOS."   */
?>