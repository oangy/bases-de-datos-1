<html>
<head>
	<title></title>
</head>
<?php


	require("conexion.php");
    extract($_GET);
	if($documento==null){
		echo "Campo vacio";
	}

	
	$query = "SELECT * FROM ((SELECT * FROM(producto INNER JOIN factura_producto ON factura_producto.id_producto LIKE producto.codigo))AS tablita) WHERE(tablita.id_factura IN (SELECT codigo FROM factura WHERE(factura.id_empleado LIKE '$documento'))) ";

	$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
	$r= mysqli_query($conexion,$query);
	if(!$r or (($r->fetch_row())==0)){
		
		
		echo "Error ";
		
	}
	else if ($result){

			?>
				<h2>Productos que ha vendido el empleado</h2>

				<table border='1' widht="29%">
					<tr>
                        <th>Codigo </th>
                        <th>Nombre </th>
                        <th>Precio </th>
                        <th>Grado Alcohol </th>
                        <th>Id Producto </th>
                        <th>Id Factura </th>
					</tr>

					<?php
						while($row = $result->fetch_array()){
                            $codigo = $row["codigo"];
                            $nombre = $row["nombre"];
                            $precio = $row["precio"];
                            $grado_alcohol = $row["grado_alcohol"];
                            $id_producto = $row["id_producto"];
                            $id_factura = $row["id_factura"];
						?>
							<tr>
                                <td><?php echo $codigo ?></td>
                                <td><?php echo $nombre ?></td>
                                <td><?php echo $precio ?></td>
                                <td><?php echo $grado_alcohol ?></td>
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