<?php
echo "probando";
function conectarse(){
	if(!($link= mysql_connect("localhost","root"))){
		echo "error conectando a la base de datos";
		exit();
	}
	if(mysql_select_db("usuarios", $link)){
		echo "conectado a la base de datos";
		exit();
	}
	echo "probando";
	return $link;
}

?>