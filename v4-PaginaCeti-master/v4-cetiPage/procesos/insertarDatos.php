<?php 
	require_once "../crud/crud.php";
	$datos = array(
		'nombre'=> $_POST['nombre'],

	);

	echo Crud::insertarDatos($datos);
 ?>