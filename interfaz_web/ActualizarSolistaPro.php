<?php

require("conexion.php");
extract($_POST);

$query = "UPDATE solista SET nombre='$nombre_n',instrumentos='$instrumentos_n' WHERE documento='$documento_v'";

$result= mysqli_query($conexion,$query);

if($result){
	echo "El solista se ha  actualizado correctamente";
}else{
    echo "El solista no se actualizo";
    echo $query;
}



?>