<?php

require("conexion.php");
extract($_POST);

$query = "UPDATE producto SET nombre='$nombre_n',precio='$precio_n',grado_alcohol='$grado_alcohol_n' WHERE codigo='$codigo_v'";

$result= mysqli_query($conexion,$query);

if($result){
	echo "El producto se ha  actualizado correctamente";
}else{
    echo "El producto no se actualizo";
    echo $query;
}

?>