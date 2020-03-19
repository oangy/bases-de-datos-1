<?php

require("conexion.php");
extract($_POST);

$query = "UPDATE empleado SET nombre='$nombre_n' WHERE documento='$documento_v'";

$result= mysqli_query($conexion,$query);

if($result){
	echo "El empleado se ha  actualizado correctamente";
}else{
    echo "El empleado no se actualizo";
    echo $query;
}

?>