<?php
	require("conexion.php");
	
	extract($_POST);

	if($fecha==null){
		echo "Campo vacio";
	}
	else{
		
		
		$query = "SELECT fecha FROM noche WHERE fecha = '$fecha'";
		$confir = mysqli_query($conexion, $query) or die (mysqli_error($conexion));
		if(!$confir or (($confir->fetch_row())==0)){
			
			echo "No se ha encontrado la noche";
			
		}
		else{
		$query2 = "DELETE FROM noche WHERE fecha='$fecha'";
		$result = mysqli_query($conexion, $query2) or die (mysqli_error($conexion));
		
			
			echo "La noche ha sido eliminado exitosamente";
		}
	}

?>