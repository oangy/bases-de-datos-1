<?php

require("conexion.php");
extract($_POST);

$query = "UPDATE noche SET nombre='$nombre_n',id_grupo='$id_grupo_n',id_solista='$id_solista_n' WHERE fecha='$fecha_v'";

$result= mysqli_query($conexion,$query);

if($result){
	echo "La noche se ha  actualizado correctamente";
}else{
    echo "La noche no se actualizo";
    echo $query;
}

?>