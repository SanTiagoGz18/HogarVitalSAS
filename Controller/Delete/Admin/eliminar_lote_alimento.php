<?php

include("../../../Models/conexion.php");

if (isset($_POST['eliminar'])){
    if(isset($_POST['id_loteA'])){
        
        $id_loteA=$_POST["id_loteA"];

        $verificar_lote=mysqli_query($conexion, "SELECT * FROM lote_alimento WHERE id_loteA='$id_loteA'");

		if(mysqli_num_rows($verificar_lote)<1){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/no_existe_lote_alimento.html");
			exit();
		}

        $verificar_key=mysqli_query($conexion, "SELECT * FROM ((productos
        inner join alimento on alimento.id_producto_alimento = productos.id_producto)inner join lote_alimento on lote_alimento.id_loteA = alimento.loteA_id) WHERE loteA_id='$id_loteA'");

        if(mysqli_num_rows($verificar_key)>0){
            header("location:../../../Views/Html/Verifications/VerificationsProducts/no_eliminar_lote_alimento.html");
            exit();
        }

		$delete="DELETE FROM lote_alimento WHERE id_loteA = '".$id_loteA."'";
        
        $respuesta=mysqli_query($conexion,$delete);
            
        if ($respuesta) {
            header("location:../../../Views/Html/Verifications/VerificationsProducts/correcto_eliminar_lote_alimento.html");
        }else{
            echo "No se elimino el marca";
        }
    }
}


?>