<html>
<head>
	<title>Actualizar Factura</title>
</head>
<body>
<?php


	require("conexion.php");
	extract($_POST);

	if($codigo==null){
		echo "Campo vacio";
	}
	
	else{
		$query = "SELECT * FROM factura WHERE codigo='$codigo'";

		$result = mysqli_query($conexion,$query);
		$r= mysqli_query($conexion,$query);
		
		if(!$r or (($r->fetch_row())==0)){
			
			
			echo "No se ha encontrado el factura";
			
		}
		else if ($result){


			while($row = $result->fetch_array()){
				$codigo = $row["codigo"];
				$id_noche = $row["id_noche"];
				$id_empleado =$row["id_empleado"];


	?>
		<form action="ActualizarFacturaPro.php" method="POST">
			
			<input type="hidden" name="codigo_v" value=<?php echo $codigo ?>>
			<label>Codigo: </label>
			<label><?php echo $codigo ?> </label><br><br>
			<label>Id Noche: </label>
			<input type="date" name="id_noche_n" value=<?php echo $id_noche ?>><br><br>
			<label>Id Empleado :</label>
			<input type="text" name="id_empleado_n" value=<?php echo $id_empleado?>><br>
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