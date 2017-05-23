<?php
	$usuario= $_POST['nombre'];
	$pw= $_POST['password1'];
	$confirpw= $_POST['password2'];
	if($pw==$confirpw)
	{
		$conexion=mysql_connect("localhost","root","") OR DIE ('PROBLEMAS EN LA CONEXION');
		mysql_select_db("datos",$conexion) OR DIE ('PROBLEMAS EN LA SELECCION DE BASE DE DATOS');
		mysql_query("INSERT INTO tabla (usuario,pw,confirpw) VALUES ('$usuario','$pw','$confirpw')",$conexion);
		echo "DATOS EXITOSAMENTE REGISTRADOS";
	}
	else
	{
		echo "LOS DATOS NO HAN SIDO INGRESADOS CORRECTAMENTE";
	}
?>