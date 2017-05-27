<?php
	$nombre=$_POST['usuario'];
	$password=$_POST['contrasenia'];
	$servidor="localhost";
	$user="root";
	$pw= "";
	$database= "cuentas_wifi";
	$conexion= mysql_connect($servidor, $user, $pw) OR DIE('error en la conexion mysql');
	mysql_select_db($database, $conexion) OR DIE ('PROBLEMAS EN LA SELECCION DE BASE DE DATOS');;
		$consulta1= mysql_query("SELECT * FROM administradores WHERE nombre= '$nombre'");
		$fila= mysql_fetch_array($consulta1);
		if(empty($fila)){
			echo 'datos incorrectos';
			echo '<form action= "ingresar_admin.html">
					<input type="submit" value="volver a intentar">
					</form>';
		}else{
		    
		
			do {
				if($fila['nombre']== $nombre && $fila ['password']==$password ){
				header('location: crear_cuenta.html');
			}else{
				echo "contrasenia incorrecta";
				}
			}
			while(empty($fila));
			
			}
		

?>