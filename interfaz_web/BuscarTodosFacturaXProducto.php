
<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");

	

	
	$query = "SELECT * FROM factura_producto";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "No hay ninguna FacturaXProducto";
		
	}
	else if ($result){

			?>
				<h2>FacturaXProducto</h2>

				<table border='1' widht="29%">
					<tr>
						<th>Id Producto</th>
						<th>Id Factura</th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
							$id_producto = $row["id_producto"];
							$id_factura = $row["id_factura"];
						?>
							<tr>
								<td><?php echo $id_producto ?></td>
								<td><?php echo $id_factura ?></td>
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
