<?php

include("../Models/conexion.php");

if (isset($_POST['eliminar'])){
    if(isset($_POST['id_proveedor'])){
        
        $id_proveedor=$_POST["id_proveedor"];

        $verificar_proveedor=mysqli_query($conexion, "SELECT * FROM proveedores WHERE id_proveedor='$id_proveedor'");

		if(mysqli_num_rows($verificar_proveedor)<1){
			header("location:../Views/Html/no_existe_proveedor.html");
			exit();
		}

		$delete="DELETE FROM proveedores WHERE id_proveedor = '".$id_proveedor."'";
        
        $respuesta=mysqli_query($conexion,$delete);
            
        if ($respuesta) {{}
            header("location:../Views/Html/correcto_eliminar_proveedor.html");
        }else{
            echo "No se elimino el proveedor";
        }
    }
}


?>