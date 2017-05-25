<?php
	$nombre= $_POST['usuario'];
	$password= $_POST['contrasenia'];
	$server="localhost";
	$usuario= "root";
	$pw="";
	$database="cuentas_wifi";
	$conexion= mysql_connect($server, $usuario, $pw);
	if (!$conexion) {
		die ('error al conectar a la base de datos'.myql_error());
	}
		mysql_select_db($database, $conexion) OR DIE ('PROBLEMAS EN LA SELECCION DE BASE DE DATOS');;
		$consulta1= mysql_query("SELECT * FROM usuarios_wifi WHERE nombre= '$nombre'");
		$fila= mysql_fetch_array($consulta1);
		if(empty($fila)){
			header('location: wifi2.html');
		}else{
		    
		foreach ($fila as $nombre => $value ) {
			# code...
	    }	

			do {
				if($fila['nombre']== $nombre && $fila ['password']==$password ){
				echo "datos ingresados correctamente";
			}else{
				echo "contrasenia incorrecta";
				}
			}
			while(empty($fila));
			
			}
		



		


?>