<html>
<head>
	<title>Actualizar producto</title>
</head>
<body>
<?php


	require("conexion.php");
	extract($_POST);

	if($codigo==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "SELECT * FROM producto WHERE codigo='$codigo'";

		$result = mysqli_query($conexion,$query);
		$r= mysqli_query($conexion,$query);
		
		if(!$r or (($r->fetch_row())==0)){
			
			
			echo "No se ha encontrado el producto";
			
		}
		else if ($result){


			while($row = $result->fetch_array()){
				$codigo = $row["codigo"];
				$nombre = $row["nombre"];
                $precio =$row["precio"];
                $grado_alcohol =$row["grado_alcohol"];


	?>
		<form action="ActualizarProductoPro.php" method="POST">
			
			<input type="hidden" name="codigo_v" value=<?php echo $codigo ?>>
			<label>Codigo: </label>
			<label><?php echo $codigo ?> </label><br><br>
			<label>Nombre: </label>
			<input type="text" name="nombre_n" value=<?php echo $nombre ?>><br><br>
			<label>Precio :</label>
            <input type="number" name="precio_n" value=<?php echo $precio?>><br>
            <label>Grado Alcohol :</label>
			<input type="number" name="grado_alcohol_n" value=<?php echo $grado_alcohol?>><br>
			<input type="submit" value="Editar">
			
			<input type="hidden" name="codigo" value=<?php echo $codigo ?>>
			
		</form>


	<?php
			}

		}
	}

?>





</body>
</html>