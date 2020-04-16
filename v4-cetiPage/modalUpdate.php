<?php 
  if (isset($_POST['search'])) {

      if (count($results) > 0) {


        //modal
  echo '<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Hoja de Seguridad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form id="f_prog" action="actualizarFila.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" id="id"value='.$value['id'].'>
                      <label>Nombre de Sustancia</label>
                      <input type="text" value='.$value['sustancia'].' name="sustancia" id="sustancia" class="form-control form-control-sm">
                      <div class="form-group">
                        <label for="formGroupExampleInput2">PDF '.$value['url'].' </label>
                        <div class="custom-file">
                          <input type="file"  class="custom-file-input" name="fichero" id="fichero" required>
                          <label class="custom-file-label" for="archivopdf" data-browse="Seleccionar">Escojer PDF Nuevo</label>
                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                      </div>
                      </br>              
                      </br>
                      <input type="submit" class="btn btn-warning" value="Actualizar"  name="ok" id="ok">
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>';
   }
 } 

  
?>
  
