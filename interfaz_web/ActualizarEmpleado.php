<html>
<head>
	<title>Actualizar Empleado</title>
</head>
<body>
<?php


	require("conexion.php");
	extract($_POST);

	if($documento==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "SELECT * FROM empleado WHERE documento='$documento'";

		$result = mysqli_query($conexion,$query);
		$r= mysqli_query($conexion,$query);
		
		if(!$r or (($r->fetch_row())==0)){
			
			
			echo "No se ha encontrado el empleado";
			
		}
		else if ($result){


			while($row = $result->fetch_array()){
				$documento = $row["documento"];
				$nombre = $row["nombre"];
				


	?>
		<form action="ActualizarEmpleadoPro.php" method="POST">
			
			<input type="hidden" name="documento_v" value=<?php echo $documento ?>>
			<label>Documento: </label>
			<label><?php echo $documento ?> </label><br><br>
			<label>Nombre: </label>
			<input type="text" name="nombre_n" value=<?php echo $nombre ?>><br><br>
			<input type="submit" value="Editar">
			
			<input type="hidden" name="documento" value=<?php echo $documento ?>>
			
		</form>


	<?php
			}

		}
	}

?>





</body>
</html>