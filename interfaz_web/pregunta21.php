<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");

	

	
	$query = "SELECT id_empleado AS 'documento', COUNT(*) as 'numero_de_contratos' FROM CONTRATO  WHERE(id_empleado in ((SELECT documento FROM empleado))) GROUP BY documento";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "Error ";
		
	}
	else if ($result){

			?>
				<h2>Numero de contratos que tiene un empleado</h2>

				<table border='1' widht="29%">
					<tr>
						<th>documento</th>
						<th>numero de contratos</th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
							$documento = $row["documento"];
							$numero_de_contratos = $row["numero_de_contratos"];
						?>
							<tr>
								<td><?php echo $documento ?></td>
								<td><?php echo $numero_de_contratos ?></td>
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