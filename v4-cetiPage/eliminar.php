<?php     
    require_once('loginRequest.php');
    $sustancia = $_POST["sustancia"];

   
    $sql = $db -> prepare("DELETE FROM document WHERE sustancia = :sustancia");
    $sql -> bindValue(':sustancia',$sustancia);
    $hey = trim($_POST['sustancia']);

    $sql -> execute();

    if($sql -> rowCount()>0){
        $count = $sql -> rowCount();
        echo "<div class='content alert alert-primary' > 

        Gracias: $count registro ha sido eliminado  </div>";
    }else{
        echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";

        print_r($sql->errorInfo()); 
    }
?>
