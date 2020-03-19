<html>
<head>
	<title>Actualizar Grupo</title>
</head>
<body>
<?php


	require("conexion.php");
	extract($_POST);

	if($codigo==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "SELECT * FROM grupo WHERE codigo='$codigo'";

		$result = mysqli_query($conexion,$query);
		$r= mysqli_query($conexion,$query);
		
		if(!$r or (($r->fetch_row())==0)){
			
			
			echo "No se ha encontrado el grupo";
			
		}
		else if ($result){


			while($row = $result->fetch_array()){
				$codigo = $row["codigo"];
				$nombre = $row["nombre"];
				$numero_de_integrantes =$row["numero_de_integrantes"];


	?>
		<form action="ActualizarGrupoPro.php" method="POST">
			
			<input type="hidden" name="codigo_v" value=<?php echo $codigo ?>>
			<label>Codigo: </label>
			<label><?php echo $codigo ?> </label><br><br>
			<label>Nombre: </label>
			<input type="text" name="nombre_n" value=<?php echo $nombre ?>><br><br>
			<label>Numero de integrantes :</label>
			<input type="number" name="numero_de_integrantes_n" value=<?php echo $numero_de_integrantes?>><br>
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