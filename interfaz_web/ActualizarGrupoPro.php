<?php

require("conexion.php");
extract($_POST);

$query = "UPDATE grupo SET nombre='$nombre_n',numero_de_integrantes='$numero_de_integrantes_n' WHERE codigo='$codigo_v'";

$result= mysqli_query($conexion,$query);

if($result){
	echo "El grupo se ha  actualizado correctamente";
}else{
    echo "El grupo no se actualizo";
    echo $query;
}

?>