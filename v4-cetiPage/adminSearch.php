<?php  $datosTabla = "";

    if (isset($_POST['search'])) {

      if (count($results) > 0) {
        echo '<table class="table table-dark">
            <thead class="text-center">
              <tr class = "font-weight-bold">
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
                  <td>'.$value['sustancia'].'</td>
                  <td>'.$value['url'].'</td>
                  <td>'.$value['fecha'].'</td>
                  <td>
                    <span class="btn btn-warning btn-lg" onclick="obtenerDatos('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
                      <img src="editar.png">
                    </span>
                  </td>
                  <td class="text-center"> 
                    <form  onsubmit=\"return confirm("Eliminar");\" method="post" action="eliminar.php">
                    
                      <input type="hidden" name="sustancia" id="sustancia" value='.$value['sustancia'].'>
                      
                      <button class="btn btn-danger btn-lg" name= "eliminar"><img src="borrar.png"> </button>
                    </form>                    
                               
                  </td>
                  <td class="text-center">
                    <span class="btn btn-info btn-lg ">                      
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
?>
