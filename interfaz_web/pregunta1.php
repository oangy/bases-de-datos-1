
<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");

	

	
	$query = "SELECT * FROM grupo WHERE numero_de_integrantes > 3";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "No hay ningun grupo con mas de 3 integrantes";
		
	}
	else if ($result){

			?>
				<h2>Grupos con mas de 3 integrantes</h2>

				<table border='1' widht="29%">
					<tr>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Numero de integrantes</th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
							$codigo = $row["codigo"];
							$nombre = $row["nombre"];
							$numero_de_integrantes = $row["numero_de_integrantes"];
						?>
							<tr>
								<td><?php echo $codigo ?></td>
								<td><?php echo $nombre ?></td>
								<td><?php echo $numero_de_integrantes ?></td>
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