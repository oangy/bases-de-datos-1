<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");

	

	
	$query = "SELECT SUM(precio) AS total FROM (producto INNER JOIN factura_producto ON factura_producto.id_producto LIKE producto.codigo) ;";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "Error";
		
	}
	else if ($result){

			?>
				<h2>Total de dinero en ventas de productos</h2>

				<table border='1' widht="29%">
					<tr>
						<th>Total</th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
							$total = $row["total"];
						?>
							<tr>
								<td><?php echo $total ?></td>
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