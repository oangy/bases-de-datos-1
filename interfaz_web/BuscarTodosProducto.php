
<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");

	

	
	$query = "SELECT * FROM producto";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "No hay ningun producto";
		
	}
	else if ($result){

			?>
				<h2>Producto</h2>

				<table border='1' widht="29%">
					<tr>
						<th>Codigo</th>
						<th>Nombre</th>
                        <th>Precio</th>
                        <th>Grado alcohol</th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
							$codigo = $row["codigo"];
							$nombre = $row["nombre"];
                            $precio = $row["precio"];
                            $grado_alcohol = $row["grado_alcohol"];
						?>
							<tr>
								<td><?php echo $codigo ?></td>
								<td><?php echo $nombre ?></td>
                                <td><?php echo $precio ?></td>
                                <td><?php echo $grado_alcohol ?></td>
							</tr>	
						<?php
						}
					?>

				</table>	
			<?php
		}
	



?>

</body>
</html>