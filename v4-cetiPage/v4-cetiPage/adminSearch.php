<?php  

  
$datosTabla = "";

    if (isset($_POST['search'])) {
$round = count($results);
      if ($round > 0) {
        echo '<table class="table table-dark">
            <thead class="text-center">
              <tr class = "font-weight-bold">
                <td style="display:none;">id </td>
                <td>Nombre</td>
                <td>Archivo</td>
                <td>Utima modificacion</td>
                <td>Editar</td>
                <td>Eliminar</td>
                <td>Descargar</td>
              </tr>
            </thead>';
        foreach ($results as $value) {
          $datosTabla = $datosTabla.'<tr>
                  <td style="display:none;"> '.$value['id'].' </td>
                  <td >'.$value['sustancia'].'</td>
                  <td>'.$value['url'].'</td>
                  <td>'.$value['fecha'].'</td>
                  <td>

                    <span class="btn btn-warning btn-lg editbtn" >
                      <img src="editar.png">
                    </span>
                  </td>
                  <td class="text-center">   
                  <span class="btn btn-danger btn-sm" >
                    <img src="borrar.png">
                    </span>
                  </td>
                  <td class="text-center">
                    <span class="btn btn-info btn-sm ">                      
                      <a href = '.$value['url'].' target="_blank">
                      <img src="descargar.png">
                      </a>
                    </span>
                    
                  </td>
                </tr>';        
                echo $datosTabla;;  
          //printf("<div>%s - %s</div>", $r['name'], $r['email']);
        }
        echo "</table>";
      } else {
        echo "No results found";
      }
    }

    echo '';
?>
