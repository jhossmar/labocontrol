<?php
$nombre= $_POST['usuario'];
$password= $_POST['contrasenia'];
$conexion = mysql_connect("localhost" , "root" , "");
mysql_select_db("cuentas_wifi", $conexion);
mysql_query("INSERT INTO usuarios (nombre , password) VALUES('$nombre' ,'$password')",$conexion);
echo "bienvenido $nombre";
?>