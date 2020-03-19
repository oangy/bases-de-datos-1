
<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");

	

	
	$query = "SELECT * FROM empleado";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "No hay ningun empleado";
		
	}
	else if ($result){

			?>
				<h2>Empleado</h2>

				<table border='1' widht="29%">
					<tr>
						<th>Documento</th>
						<th>Nombre</th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
							$documento = $row["documento"];
							$nombre = $row["nombre"];
						?>
							<tr>
								<td><?php echo $documento ?></td>
								<td><?php echo $nombre ?></td>
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