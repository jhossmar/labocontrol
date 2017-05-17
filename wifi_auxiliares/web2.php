<?php
$nombre= $_POST['usuario'];
$password= $_POST['contrasenia'];
function conectarse(){
	if(!($link= mysql_connect("localhost","root"))){
		echo "error conectando a la base de datos";
		exit();
	}
	if(!mysql_select_db("usuarios", $link)){
		echo "conectado a la base de datos";
		exit();
	}
	
	return $link;
}
$con= conectarse();
$query= "SELECT * FROM usuarios_wifi WHERE usuarios='".$nombre."'AND password='".$password"'";
$q= mysql_query($query, $con);
if (mysql_result($q,0)){

	$result= mysql_result($q, 0);
	echo "usuario validado correctamente";
}else{
	echo "usuario o password erroneos";
}

echo "hola $nombre tu contrasenia es $password";
?>