<?php  $datosTabla = "";

    if (isset($_POST['search'])) {

      if (count($results) > 0) {
        echo '<table class="table table-dark">
            <thead>
              <tr class = "font-weight-bold">
                <td>Nombre</td>
                <td>Archivo</td>
                <td>Utima modificacion</td>
                <td class="text-center">Descargar</td>
              </tr>
            </thead>';
        foreach ($results as $value) {
          $datosTabla = $datosTabla.'<tr>
                  <td>'.$value['sustancia'].'</td>
                  <td>'.$value['url'].'</td>
                  <td>'.$value['fecha'].'</td>
                  <td class="text-center">
                    <span class="btn btn-info btn-sm ">
                       <img src="descargar.png">
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