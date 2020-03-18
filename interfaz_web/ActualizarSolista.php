<html>
<head>
	<title>Actualizar Solista</title>
</head>
<body>
<?php


	require("conexion.php");
	extract($_POST);

	if($carne==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "SELECT * FROM solista WHERE documento=$documento";

		$result = mysqli_query($conexion,$query);
		$r= mysqli_query($conexion,$query);
		
		if(!$r or (($r->fetch_row())==0)){
			
			
			echo "No se ha encontrado el empleado";
			
		}
		else if ($result){


			while($row = $result->fetch_array()){
				$telefono = $row["telefono"];
				$nombre = $row["nombre"];
				$sueldo =$row["sueldo"];


	?>
		<form action="ActualizarEmpleadoPro.php" method="POST">
			
			<input type="hidden" name="carne_v" value=<?php echo $carne ?>>
			<label>Carne: </label>
			<label><?php echo $carne ?> </label><br><br>
			<label>Telefono: </label>
			<input type="number" name="telefono_n" value=<?php echo $telefono ?>><br><br>
			<label>Nombre: </label>
			<input type="text" name="nombre_n" value=<?php echo $nombre ?>><br><br>
			<label>Sueldo :</label>
			<input type="number" name="sueldo_n" value=<?php echo $sueldo?>><br>
			<input type="submit" value="Editar">
			
			<input type="hidden" name="carne" value=<?php echo $carne ?>>
			
		</form>


	<?php
			}

		}
	}

?>





</body>
</html>