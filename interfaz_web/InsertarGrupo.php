<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
	require("conexion.php");
	extract($_GET);
	
	if($codigo==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "INSERT INTO grupo VALUES
		('$codigo','$nombre',$numero_de_integrantes); ";

		$result = mysqli_query($conexion,$query);

		if($result){
			echo "Grupo insertado correctamente";
		}else{
			echo "Error al insertar Grupo";
		}
	}
?>