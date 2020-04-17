function eliminarDatos(){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			
		} 
	});
}

function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatos.php",
		data:$('#frminsert').serialize(),
		success:function(r){
			if (r==1) {
				$('#frminsert')[0].reset();
				mostrar();
				swal("Archivo subido con exito","success");
			}else{
				swal("Error al subir el fichero","error")
			}
		}
	});
	return false;
}

$(document).ready(function() {
                $('.editbtn').on('click', function() {
                    $('#actualizarModal').modal('show');

                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#id').val(data[0]);
                    $('#sustancia').val(data[1]);
                    $('#fichero').val(data[2]);
                    
                });
            });

