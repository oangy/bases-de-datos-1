<?php
	require("conexion.php");
	
	extract($_POST);

	if($documento==null){
		echo "Campo vacio";
	}
	else{
		
		
		$query = "SELECT documento FROM empleado WHERE documento = '$documento'";
		$confir = mysqli_query($conexion, $query) or die (mysqli_error($conexion));
		if(!$confir or (($confir->fetch_row())==0)){
			
			echo "No se ha encontrado el empleado";
			
		}
		else{
		$query2 = "DELETE FROM empleado WHERE documento='$documento'";
		$result = mysqli_query($conexion, $query2) or die (mysqli_error($conexion));
		
			
			echo "El empleado ha sido eliminado exitosamente";
		}
	}

?>