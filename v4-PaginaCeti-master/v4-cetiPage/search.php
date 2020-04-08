<?php  $datosTabla = "";

    if (isset($_POST['search'])) {

      if (count($results) > 0) {
        echo '<table class="table table-dark">
            <thead>
              <tr class = "font-weight-bold">
                <td>Nombre</td>
                <td>Archivo</td>
                <td>Utima modificacion</td>
                <td>Descargar</td>
              </tr>
            </thead>';
        foreach ($results as $value) {
          $datosTabla = $datosTabla.'<tr>
                  <td>'.$value['sustancia'].'</td>
                  <td>'.$value['url'].'</td>
                  <td>'.$value['fecha'].'</td>
                  <td>
                    <span class="btn btn-info btn-lg" data-toggle="modal" data-target="#actualizarModal">
                      <i class="fas fa-edit"></i>
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
?>