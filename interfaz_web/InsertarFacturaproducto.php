<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
	require("conexion.php");
	extract($_GET);
	
	if($id_producto==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "INSERT INTO solista VALUES
		('$id_producto','$id_factura'); ";

		$result = mysqli_query($conexion,$query);

		if($result){
			echo "Facturaproducto insertado correctamente";
		}else{    
			echo "Error al insertar facturaproducto";
		}
	}
?>