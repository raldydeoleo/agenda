<?php
		$host="localhost";
		$user="root";
		$pw="netpro2016";
		$db="Test1";

		$con=mysql_connect($host,$user,$pw) or die("problemas al conectar");
		mysql_select_db($db, $con) or die("problemas con la base de datos");
		

?>