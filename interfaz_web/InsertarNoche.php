<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
	require("conexion.php");
	extract($_GET);
	
	if($fecha==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "INSERT INTO solista VALUES
		('$fecha','$nombre','$id_grupo','$id_solista'); ";

		$result = mysqli_query($conexion,$query);

		if($result){
			echo "Noche insertado correctamente";
		}else{    
			echo "Error al insertar Noche";
		}
	}
?>