<?php

include("../../../Models/conexion.php");

if (isset($_POST['modificado'])){
    if(isset($_POST['id_proveedor']) && ($_POST['nombre_proveedor'])){
        $id_proveedor=$_POST["id_proveedor"];  
		$nombre_proveedor=$_POST["nombre_proveedor"];

        $verificar_proveedor=mysqli_query($conexion, "SELECT * FROM proveedores WHERE id_proveedor='$id_proveedor'");

		if(mysqli_num_rows($verificar_proveedor)<1){
			header("location:../../..//Views/Html/Verifications/VerificationsProducts/no_existe_modificar_proveedor.html");
			exit();
		}

		$update="UPDATE proveedores SET nombre_proveedor = '".$nombre_proveedor."' WHERE id_proveedor = '".$id_proveedor."'";

        $respuesta=mysqli_query($conexion,$update);
            
        if ($respuesta) {{}
            header("location:../../../Views/Html/Verifications/VerificationsProducts/correcto_modificar_proveedor.html");
        }else{
            echo "La actualización no se efectuo";
        }
    }
}


?>