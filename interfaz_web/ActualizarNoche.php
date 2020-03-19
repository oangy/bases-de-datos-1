<html>
<head>
	<title>Actualizar Noche</title>
</head>
<body>
<?php


	require("conexion.php");
	extract($_POST);

	if($fecha==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "SELECT * FROM noche WHERE fecha='$fecha'";

		$result = mysqli_query($conexion,$query);
		$r= mysqli_query($conexion,$query);
		
		if(!$r or (($r->fetch_row())==0)){
			
			
			echo "No se ha encontrado la noche";
			
		}
		else if ($result){


			while($row = $result->fetch_array()){
				$fecha = $row["fecha"];
				$nombre = $row["nombre"];
                $id_grupo =$row["id_grupo"];
                $id_solista =$row["id_solista"];


	?>
		<form action="ActualizarNochePro.php" method="POST">
			
			<input type="hidden" name="fecha_v" value=<?php echo $fecha ?>>
			<label>Fecha: </label>
			<label><?php echo $fecha ?> </label><br><br>
			<label>Nombre: </label>
			<input type="text" name="nombre_n" value=<?php echo $nombre ?>><br><br>
			<label>Id Grupo :</label>
            <input type="text" name="id_grupo_n" value=<?php echo $id_grupo?>><br>
            <label>Id Solista :</label>
			<input type="text" name="id_solista_n" value=<?php echo $id_solista?>><br>
			<input type="submit" value="Editar">
			
			<input type="hidden" name="fecha" value=<?php echo $fecha ?>>
			
		</form>


	<?php
			}

		}
	}

?>





</body>
</html>