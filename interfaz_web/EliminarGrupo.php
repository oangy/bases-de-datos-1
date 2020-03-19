<?php
	require("conexion.php");
	
	extract($_POST);

	if($codigo==null){
		echo "Campo vacio";
	}
	else{
		
		
		$query = "SELECT codigo FROM grupo WHERE codigo = '$codigo'";
		$confir = mysqli_query($conexion, $query) or die (mysqli_error($conexion));
		if(!$confir or (($confir->fetch_row())==0)){
			
			echo "No se ha encontrado el grupo";
			
		}
		else{
		$query2 = "DELETE FROM grupo WHERE codigo='$codigo'";
		$result = mysqli_query($conexion, $query2) or die (mysqli_error($conexion));
		
			
			echo "El grupo ha sido eliminado exitosamente";
		}
	}

?>