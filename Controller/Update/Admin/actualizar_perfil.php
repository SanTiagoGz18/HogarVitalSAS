<?php

include("../../../Models/conexion.php");

if (isset($_POST['enviar'])){
    if(isset($_POST['id_usuario']) && ($_POST['nombre_usuario'])){
        $id_usuario=$_POST["id_usuario"];  
		$nombre_usuario=$_POST["nombre_usuario"];
		$apellido_usuario=$_POST["apellido_usuario"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];

		$update="UPDATE usuarios SET nombre_usuario = '".$nombre_usuario."', apellido_usuario = '".$apellido_usuario."', telefono = '".$telefono."', direccion = '".$direccion."', fecha_actualizacion_usuario = NOW() WHERE id_usuario = '".$id_usuario."'";

        $respuesta=mysqli_query($conexion,$update);
            
        if ($respuesta) {{}
            header("location:../../../Views/Html/Verifications/VerificationsEmployee/correcto_cambio_perfil.html");
        }else{
            echo "La actualización no se efectuo";
        }
    }
}


?>