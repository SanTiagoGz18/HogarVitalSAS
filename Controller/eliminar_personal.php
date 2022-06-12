<?php

include("../Models/conexion.php");

if (isset($_POST['eliminar'])){
    if(isset($_POST['id_usuario'])){
        $id_usuario=$_POST["id_usuario"];

		$update="DELETE FROM usuarios WHERE id_usuario = '".$id_usuario."'";

        $respuesta=mysqli_query($conexion,$update);
            
        if ($respuesta) {{}
            header("location:../Views/Html/correcto_eliminar_personal.html");
        }else{
            echo "No se elimino el empleado";
        }
    }
}


?>