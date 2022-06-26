<?php

include("../../../Models/conexion.php");

if (isset($_POST['modificado'])){
    if(isset($_POST['id_loteM']) && ($_POST['nombre_loteM'])){
        $id_loteM=$_POST["id_loteM"];
		$nombre_loteM=$_POST["nombre_loteM"];

        $verificar_loteM=mysqli_query($conexion, "SELECT * FROM lote_medicamento WHERE id_loteM='$id_loteM'");

		if(mysqli_num_rows($verificar_loteM)<1){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/no_existe_modificar_lote_medicamento.html");
			exit();
		}

		$update="UPDATE lote_medicamento SET nombre_loteM = '".$nombre_loteM."' WHERE id_loteM = '".$id_loteM."'";

        $respuesta=mysqli_query($conexion,$update);
            
        if ($respuesta) {{}
            header("location:../../../Views/Html/Verifications/VerificationsProducts/correcto_modificar_lote_medicamento.html");
        }else{
            echo "La actualización no se efectuo";
        }
    }
}


?>