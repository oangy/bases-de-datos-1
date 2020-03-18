<html>
<head>
	<title>Actualizar Solista</title>
</head>
<body>
<?php


	require("conexion.php");
	extract($_POST);

	if($documento==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "SELECT * FROM solista WHERE documento='$documento'";

		$result = mysqli_query($conexion,$query);
		$r= mysqli_query($conexion,$query);
		
		if(!$r or (($r->fetch_row())==0)){
			
			
			echo "No se ha encontrado el solista";
			
		}
		else if ($result){


			while($row = $result->fetch_array()){
				$telefono = $row["documento"];
				$nombre = $row["nombre"];
				$instrumentos =$row["instrumentos"];


	?>
		<form action="ActualizarSolistaPro.php" method="POST">
			
			<input type="hidden" name="documento_v" value=<?php echo $documento ?>>
			<label>Documento: </label>
			<label><?php echo $documento ?> </label><br><br>
			<label>Nombre: </label>
			<input type="text" name="nombre_n" value=<?php echo $nombre ?>><br><br>
			<label>Instrumentos :</label>
			<input type="text" name="instrumentos_n" value=<?php echo $instrumentos?>><br>
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