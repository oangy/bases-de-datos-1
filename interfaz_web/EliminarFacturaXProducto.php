<?php
	require("conexion.php");
	
	extract($_POST);

	if($id_producto==null){
		echo "Campo vacio";
    }
    if($id_factura==null){
		echo "Campo vacio";
	}
	else{
		
		
		$query = "SELECT id_producto,id_factura FROM factura_producto WHERE (id_producto = '$id_producto' AND id_factura = '$id_factura')";
		$confir = mysqli_query($conexion, $query) or die (mysqli_error($conexion));
		if(!$confir or (($confir->fetch_row())==0)){
			
			echo "No se ha encontrado la factura_producto";
			
		}
		else{
		$query2 = "DELETE FROM factura_producto WHERE (id_producto='$id_producto' AND id_factura = '$id_factura')";
		$result = mysqli_query($conexion, $query2) or die (mysqli_error($conexion));
		
			
			echo "La factura_producto ha sido eliminada exitosamente";
		}
	}

?>