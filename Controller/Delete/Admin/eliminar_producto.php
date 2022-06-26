<?php

include("../../../Models/conexion.php");

if (isset($_POST['eliminar'])){
    if(isset($_POST['id_producto'])){
        
        $id_producto=$_POST["id_producto"];

        $verificar_codigo=mysqli_query($conexion, "SELECT * FROM productos WHERE id_producto='$id_producto'");

		if(mysqli_num_rows($verificar_codigo)<1){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/no_existe_eliminar_producto.html");
			exit();
		}

        $delete="DELETE FROM proveedores_productos WHERE producto_id = '".$id_producto."'";
        
        $respuesta=mysqli_query($conexion,$delete);
            
        if ($respuesta) {
            $delete2=mysqli_query($conexion, "DELETE FROM productos WHERE id_producto = '".$id_producto."'");
            header("location:../../../Views/Html/Verifications/VerificationsProducts/correcto_eliminar_producto.html");
        }else{
            echo "No se elimino el empleado";
        }
    }
}


?>