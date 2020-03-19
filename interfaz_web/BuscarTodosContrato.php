
<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");

	

	
	$query = "SELECT * FROM contrato";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "No hay ningun contrato";
		
	}
	else if ($result){

			?>
				<h2>Contrato</h2>

				<table border='1' widht="29%">
					<tr>
						<th>Codigo</th>
						<th>Id Noche</th>
						<th>Id empleado</th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
							$codigo = $row["codigo"];
							$id_noche = $row["id_noche"];
							$id_empleado = $row["id_empleado"];
						?>
							<tr>
								<td><?php echo $codigo ?></td>
								<td><?php echo $id_noche ?></td>
								<td><?php echo $id_empleado ?></td>
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