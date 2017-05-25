<?php
	$usuario="root";
	$psw="";
	$servidor= "localhost";
	$database="cuentas_wifi";
	$conexion= mysql_connect($servidor, $usuario , $psw);
	if (!$conexion) {
		die ('no se pudo conectar a la base de datos: '.mysql_error());
	}
	if(mysql_query( " CREATE DATABASE baseprueba ", $conexion)){
		echo "se a creado la base correctamente ";
	}else{
		echo "error al crear la base de datos".mysql_error();
	}
	mysql_close($conexion);
	
?>