<?php

include("../Models/conexion.php");

if (isset($_POST['enviar'])){
    if(isset($_POST['id_usuario']) && ($_POST['nombre_usuario'])){
        $id_usuario=$_POST["id_usuario"];  
		$nombre_usuario=$_POST["nombre_usuario"];
		$apellido_usuario=$_POST["apellido_usuario"];
        $correo=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $fecha_actualizacion_usuario=$_POST["yy-m-d h:i:s a"];

		$update="UPDATE usuarios SET nombre_usuario = '".$nombre_usuario."', apellido_usuario = '".$apellido_usuario."', correo = '".$correo."', telefono = '".$telefono."', direccion = '".$direccion."', fecha_actualizacion_usuario='".$fecha_actualizacion_usuario."' WHERE id_usuario = '".$id_usuario."'";

        $respuesta=mysqli_query($conexion,$update);
            
        if ($respuesta) {{}
            header("location:../Views/Html/correcto_cambio_perfil.html");
        }else{
            echo "mal";
        }
    }
}


?>