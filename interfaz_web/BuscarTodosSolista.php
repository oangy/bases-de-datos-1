
<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");

	

	
	$query = "SELECT * FROM solista";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "No hay ningun solista";
		
	}
	else if ($result){

			?>
				<h2>Solista</h2>

				<table border='1' widht="29%">
					<tr>
						<th>Documento</th>
						<th>Nombre</th>
						<th>Instrumentos</th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
							$documento = $row["documento"];
							$nombre = $row["nombre"];
							$instrumentos = $row["instrumentos"];
						?>
							<tr>
								<td><?php echo $documento ?></td>
								<td><?php echo $nombre ?></td>
								<td><?php echo $instrumentos ?></td>
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