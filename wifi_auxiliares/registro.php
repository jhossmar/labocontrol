<?php
	$pcs= $_POST['pc'];
	$monitores= $_POST['monitor'];
	$mouses= $_POST['mouse'];
	$cables_red= $_POST['cable_red'];
	$antenas= $_POST['antena'];
	$conexion= mysql_connect("localhost","root","");
	mysql_select_db("laboratorio_computo", $conexion);
	mysql_query("INSERT INTO labo_control(pcs , monitores, mouses, cable_red, antenas) VALUES ($pcs , $monitores , $mouses, $cables_red, $antenas) ", $conexion);
	echo "datos ingresados";
?>