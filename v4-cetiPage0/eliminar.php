<?php     
    require_once('loginRequest.php');

    //valor que recibe del form de adminsearch.php
    $sustancia = $_POST["sustancia"];
    //se convierte a la ruta del documento
    $del = "ficherosSubidos/$sustancia.pdf";
   
    $sql = $db -> prepare("DELETE FROM document WHERE sustancia = :sustancia");
    $sql -> bindValue(':sustancia',$sustancia);
    $hey = trim($_POST['sustancia']);

    $sql -> execute();

    if($sql -> rowCount()>0){
        $count = $sql -> rowCount();
        //Esta parte elimina, e imprime si hubo errores en el proceso
        if (isset($del)){
            $proceso = unlink($del);
            if(!$proceso){
                echo "Error al eliminar el archivo";
            }else{
                echo "El registro se elimino exitosamente";
                header("location:admin.php");
            }    
        }
      
    }else{
        

        print_r($sql->errorInfo()); 
    }
?>
