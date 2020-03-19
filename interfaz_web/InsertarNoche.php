<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
	require("conexion.php");
	extract($_GET);
	
	if($fecha==null){
		echo "Campo vacio";
	}
		
	else{
		$query = "INSERT INTO noche VALUES
		('$fecha','$nombre','$id_grupo','$id_solista'); ";
		if($id_grupo==null){
			$query = "INSERT INTO noche(fecha,nombre,id_solista) VALUES
		('$fecha','$nombre','$id_solista'); ";
		}
		if($id_solista==null){
			$query = "INSERT INTO noche(fecha,nombre,id_grupo) VALUES
		('$fecha','$nombre','$id_grupo'); ";
		}

		echo $query;

		$result = mysqli_query($conexion,$query);

		if($result){
			echo "Noche insertado correctamente";
		}else{    
			echo "Error al insertar Noche";
		}
	}
?>