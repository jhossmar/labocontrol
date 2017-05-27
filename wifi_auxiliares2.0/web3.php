<?php
	$nombre= $_POST['usuario'];
	$password= $_POST['contrasenia'];
	$server="localhost";
	$usuario= "root";
	$pw="";
	$database="cuentas_wifi";
	$conexion= mysql_connect($server, $usuario, $pw) OR DIE('error al conectar con la base de datos');
	
		mysql_select_db($database, $conexion) OR DIE ('PROBLEMAS EN LA SELECCION DE BASE DE DATOS');;
		$consulta1= mysql_query("SELECT * FROM usuarios_wifi2 WHERE nombre= '$nombre'");
		$fila= mysql_fetch_array($consulta1);
		if(empty($fila)){
			echo 'datos incorrectos';
			echo '<form action= "pagina_principal.html">
					<input type="submit" value="volver a intentar">
					</form>
					<form action= "ingresar_admin.html">
					<input type="submit" value="crear una cuenta">
					</form>'
					;
		}else{
		    
		
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