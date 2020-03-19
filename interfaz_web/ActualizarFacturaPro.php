<?php

require("conexion.php");
extract($_POST);

$query = "UPDATE factura SET id_noche='$id_noche_n',id_empleado='$id_empleado_n' WHERE codigo='$codigo_v'";

$result= mysqli_query($conexion,$query);

if($result){
	echo "La factura se ha  actualizado correctamente";
}else{
    echo "La factura no se actualizo";
    echo $query;
}

?>