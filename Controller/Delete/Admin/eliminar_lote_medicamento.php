<?php

include("../../../Models/conexion.php");

if (isset($_POST['eliminar'])){
    if(isset($_POST['id_loteM'])){
        
        $id_loteM=$_POST["id_loteM"];

        $verificar_lote=mysqli_query($conexion, "SELECT * FROM lote_medicamento WHERE id_loteM='$id_loteM'");

		if(mysqli_num_rows($verificar_lote)<1){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/no_existe_lote_medicamento.html");
			exit();
		}

        $verificar_key=mysqli_query($conexion, "SELECT * FROM ((productos
        inner join medicamento on medicamento.id_producto_medicamento = productos.id_producto)inner join lote_medicamento on lote_medicamento.id_loteM = medicamento.loteM_id) WHERE loteM_id='$id_loteM'");

        if(mysqli_num_rows($verificar_key)>0){
            header("location:../../../Views/Html/Verifications/VerificationsProducts/no_eliminar_lote_medicamento.html");
            exit();
        }

		$delete="DELETE FROM lote_medicamento WHERE id_loteM = '".$id_loteM."'";
        
        $respuesta=mysqli_query($conexion,$delete);
            
        if ($respuesta) {
            header("location:../../../Views/Html/Verifications/VerificationsProducts/correcto_eliminar_lote_medicamento.html");
        }else{
            echo "No se elimino el marca";
        }
    }
}


?>