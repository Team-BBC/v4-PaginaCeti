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

function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/actualizarFila.php",
		data:$('#frminsertu').serialize(),
		success:function(r){
			if(r==1){
				$('#frminsertu')[0].reset();
				mostrar();
				swal("Archivo actualizado con exito", "success");
			}else{
				swal("Error al actualizar archivo", "error");
			}
		}
	});
	return false;
}

