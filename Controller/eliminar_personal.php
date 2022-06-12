<?php

include("../Models/conexion.php");

if (isset($_POST['eliminar'])){
    if(isset($_POST['id_usuario'])){
        
        $id_usuario=$_POST["id_usuario"];

        $verificar_documento=mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");

		if(mysqli_num_rows($verificar_documento)<1){
			header("location:../Views/Html/no_existe.html");
			exit();
		}

        $verificar_admin=mysqli_query($conexion, "SELECT * FROM usuarios WHERE cargo_id=1");

		if(mysqli_num_rows($verificar_admin)>1){
			header("location:../Views/Html/eliminar_admin.html");
			exit();
		}

		$delete="DELETE FROM usuarios WHERE id_usuario = '".$id_usuario."'";
        
        $respuesta=mysqli_query($conexion,$delete);
            
        if ($respuesta) {{}
            header("location:../Views/Html/correcto_eliminar_personal.html");
        }else{
            echo "No se elimino el empleado";
        }
    }
}


?>