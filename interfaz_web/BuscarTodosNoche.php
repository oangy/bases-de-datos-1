
<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");

	

	
	$query = "SELECT * FROM noche";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "No hay ninguna noche";
		
	}
	else if ($result){

			?>
				<h2>Noche</h2>

				<table border='1' widht="29%">
					<tr>
						<th>Fecha</th>
						<th>Nombre</th>
                        <th>Id Grupo</th>
                        <th>Id Empleado</th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
							$fecha = $row["fecha"];
							$nombre = $row["nombre"];
                            $id_grupo = $row["id_grupo"];
                            $id_solista = $row["id_solista"];
						?>
							<tr>
								<td><?php echo $fecha ?></td>
								<td><?php echo $nombre ?></td>
                                <td><?php echo $id_grupo ?></td>
                                <td><?php echo $id_solista ?></td>
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