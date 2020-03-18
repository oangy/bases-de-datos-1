<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
	require("conexion.php");
	extract($_GET);
	
	if($documento==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "INSERT INTO empleado VALUES
		('$documento','$nombre'); ";

		$result = mysqli_query($conexion,$query);

		if($result){
			echo "Empleado insertado correctamente";
		}else{
			echo "Error al insertar Empleado";
		}
	}
?>