<?php
	$usuario= $_POST['nombre'];
	$pw= $_POST['password'];

	$conexion=mysql_connect("localhost","root","") OR DIE ('PROBLEMAS EN LA CONEXION');
    mysql_select_db("datos",$conexion) OR DIE ('PROBLEMAS EN LA SELECCION DE BASE DE DATOS');

	$q=mysql_query("SELECT * FROM tabla WHERE usuario='$usuario' AND pw='$pw'", $conexion);
	$result= mysql_fetch_array($q);
	if($result['pw'] == $pw)
	{
		echo "BIENVENIDO $usuario";
	    

	}
	else
	{
		echo "no puede iniciar sesion";
	}
?>