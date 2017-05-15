<?php
if(($_POST['password'])==($_POST['confirPassword']))
{
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("Login",$conexion);
	$usuario= $_POST['nombre'];
	$contra= $_POST['password'];
	$mail= $_POST['confirPassword'];

	mysql_query("INSERT INTO tabla (nombre,pw,confirpw) VALUES ('$usuario','$contra','$mail')",$conexion);

	echo "DATOS EXITOSAMENTE REGISTRADOS";
}
else
{
	echo "LOS DATOS NO HAN SIDO INGRESADOS CORRECTAMENTE";
}
?>