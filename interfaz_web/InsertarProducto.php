<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
	require("conexion.php");
	extract($_GET);
	
	if($codigo==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "INSERT INTO producto VALUES
		('$codigo','$nombre',$precio,$grado_alcohol); ";

		$result = mysqli_query($conexion,$query);

		if($result){
			echo "Producto insertado correctamente";
		}else{    
			echo "Error al insertar producto";
		}
	}
?>