<?php
	require("conexion.php");
	
	extract($_POST);

	if($codigo==null){
		echo "Campo vacio";
    }
    if($id_noche==null){
		echo "Campo vacio";
    }
    if($id_empleado==null){
		echo "Campo vacio";
	}
	else{
		
		
		$query = "SELECT codigo,id_noche,id_empleado FROM contrato WHERE (codigo = '$codigo' AND id_noche = '$id_noche' AND id_empleado = '$id_empleado')";
		$confir = mysqli_query($conexion, $query) or die (mysqli_error($conexion));
		if(!$confir or (($confir->fetch_row())==0)){
			
			echo "No se ha encontrado el contrato";
			
		}
		else{
		$query2 = "DELETE FROM contrato WHERE (codigo='$codigo' AND id_noche = '$id_noche' AND id_empleado = '$id_empleado')";
		$result = mysqli_query($conexion, $query2) or die (mysqli_error($conexion));
		
			
			echo "El contrato ha sido eliminado exitosamente";
		}
	}

?>