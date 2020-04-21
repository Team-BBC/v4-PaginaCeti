<?php 
//	date_default_timezone_set('America/Monterrey');
	require_once('loginRequest.php');
	
	$nombre = $_POST["nombre"];
	$archivoRecibido = $_FILES["fichero"]["tmp_name"];
	$destino="ficherosSubidos/$nombre.pdf";
//	$fecha = date('j-n-Y'). " " .date('g:i:s A');
	
	//Preparamos  la consulta
	$sql = "SELECT COUNT(sustancia) AS num FROM  document WHERE sustancia = :sustancia";	
	$stm = $db -> prepare($sql);
	$stm -> bindValue(':sustancia',$nombre); 	
	$stm -> execute();

	//se comprueba si hubo resultados en la BDD
	$row = $stm ->fetch(PDO::FETCH_ASSOC);
	if($row['num'] > 0){
        die('Este registro ya existe');
    }else{
    	//Sube archivos a la base de datos
    	$consulta =$db->  prepare("INSERT INTO document(sustancia,url,fecha) VALUES (:sustancia,:url,NOW())");
		$consulta -> bindParam(':sustancia',$nombre);
		$consulta -> bindParam(':url',$destino);
		
		$consulta->execute();

		//sube el documento pdf a la carpeta de los archivos
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
    }
 ?>
