<?php

include("../../../Models/conexion.php");

if (isset($_POST['eliminar'])){
    if(isset($_POST['id_marca'])){
        
        $id_marca=$_POST["id_marca"];

        $verificar_marca=mysqli_query($conexion, "SELECT * FROM marca WHERE id_marca='$id_marca'");

		if(mysqli_num_rows($verificar_marca)<1){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/no_existe_marca.html");
			exit();
		}

        $verificar_key=mysqli_query($conexion, "SELECT * FROM productos WHERE marca_id='$id_marca'");

        if(mysqli_num_rows($verificar_key)>0){
            header("location:../../../Views/Html/Verifications/VerificationsProducts/no_eliminar_marca.html");
            exit();
        }

		$delete="DELETE FROM marca WHERE id_marca = '".$id_marca."'";
        
        $respuesta=mysqli_query($conexion,$delete);
            
        if ($respuesta) {
            header("location:../../../Views/Html/Verifications/VerificationsProducts/correcto_eliminar_marca.html");
        }else{
            echo "No se elimino el marca";
        }
    }
}


?>