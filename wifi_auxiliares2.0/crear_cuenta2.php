<?php
	$nombre= $_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$password= $_POST['password'];
	$CI=$_POST['numero_carnet'];
	$codigo_sis=$_POST['cod_sis'];
	$usuario="root";
	$pw= "";
	$servidor="localhost";
	$database="cuentas_wifi";
	if(empty($nombre)||empty($apellidos)||empty($password)||empty($CI)||empty($codigo_sis)){
		echo "todos los campos deben estar llenos";
		echo '<form action=crear_cuenta.html>
		<input type = "submit" value="volver a intentar">
		</form>';
	}else {
	$conexion= mysql_connect($servidor, $usuario, $pw) OR DIE ('error al con la conexion del server');
	mysql_select_db($database , $conexion) OR DIE('error al conectar a la base de datos');
	$peticion1 = mysql_query("INSERT INTO usuarios_wifi2 VALUES ('$nombre','$password','$apellidos','$CI','$codigo_sis')");
	$peticion2= mysql_query("SELECT * FROM usuarios_wifi2 WHERE nombre= '$nombre'");
	$fila=mysql_fetch_array($peticion2);
	if(!empty($fila)){
		echo "usted fue registrado exitosamente";
		echo'<form action=pagina_principal.html>
		<input type = "submit" value="iniciar sesion">
		</form>';
	}else {
		echo "no se que pasa";
	}
  }

 	#mysql_close($conexion);
?>