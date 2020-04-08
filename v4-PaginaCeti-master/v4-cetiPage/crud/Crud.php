<?php
require_once "Conexion.php";
	class Crud extends Conexion{
		
	
		public function mostrarDatos()
		{
			$sql = "SELECT id,
							sustancia,
							url,
							fecha
							from document";

			$query = Conexion::Conectar() -> prepare($sql); 		//Ejecuta sql pero primero invoca al metodo conecar en la clase conexion.php
			$query->execute();
			return $query -> fetchAll();
			$query -> close();
		}

		public function insertarDatos($datos){
			
			$archivorecibido = $_FILES["nombrearchivo"]["tmp_name"];
			$destino = "documentos/".$datos['nombre'];

			$sql = "SELECT COUNT(sustancia) AS num FROM  document WHERE sustancia = :sustancia";	
			$stm = $db -> prepare($sql);
			$stm -> bindValue(':sustancia',$datos["nombre"]); 	
			$stm -> execute();


			$row = $stm ->fetch(PDO::FETCH_ASSOC);

			if($row['num'] > 0){
        		die('Este registro ya existe');
    		}else{
    			$consulta = "INSERT INTO document (sustancia,nombrearchivo,url,fecha)
										values(:nombre,:nombrearchivo,:url,NOW()";
				$query = Conexion::Conectar() -> prepare($consulta); 
				$query-> bindParam(":nombre",$datos["nombre"]);
				$query-> bindParam(":nombrearchivo",$datos["nombre"]);
				$query-> bindParam(":url",$destino);




				return $query->execute();
				$query ->close();
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

		}
	}
?>