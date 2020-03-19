<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");

	

	
	$query = "SELECT COUNT(solista.documento) AS numero_solistas FROM solista WHERE solista.instrumentos LIKE 'saxofon'";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "Error ";
		
	}
	else if ($result){

			?>
				<h2>Numero de solistas que tocan saxofon</h2>

				<table border='1' widht="29%">
					<tr>
						<th>Numero Solistas</th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
							$numero_solistas = $row["numero_solistas"];
						?>
							<tr>
								<td><?php echo $numero_solistas ?></td>
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