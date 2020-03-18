<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
	require("conexion.php");
	extract($_GET);
	
	if($codigo==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "INSERT INTO factura VALUES
		('$codigo','$id_noche','$id_empleado'); ";

		$result = mysqli_query($conexion,$query);

		if($result){
			echo "Factura insertado correctamente";
		}else{    
			echo "Error al insertar factura";
		}
	}
?>