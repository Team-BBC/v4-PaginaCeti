<?php
	require_once('loginRequest.php');

	$idFila = $_POST["id"];
	$sustancia = $_POST["sustancia"];
	$archivoRecibido = $_FILES["fichero"]["tmp_name"];
	$destino="ficherosSubidos/$sustancia.pdf";

	//consulta update
	$sql = "UPDATE document set sustancia=:sustancia, url=:url,fecha=NOW() where id=:id";
	$stm = $db -> prepare($sql);
	
	$stm -> bindParam(':sustancia', $sustancia);
	$stm -> bindParam(':url', $destino);
	$stm -> bindParam(':id', $idFila);
	$stm -> execute();
	
	if ($_FILES["fichero"]["type"]!="application/pdf") {
      echo ("El archivo no esta en el formato adecuado <br>");
    }

    if ($_FILES["fichero"]["error"]!=0) {
      echo ("Hay un error en el archivo <br>");
    }

	if (move_uploaded_file($archivoRecibido, $destino)) {
		echo "Fichero grabado";
	}else{
		echo "error";
	}
	/*
	require_once "../crud/crud.php";
	$datos = array(
		"id" => $_POST["id"],
		"nombre" => $_POST["nombreu"],
		"fichero" => $_FILES["fichero"]
	);
	echo Crud::actualizarDatos($datos);*/

?>











