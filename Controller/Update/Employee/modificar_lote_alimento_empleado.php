<?php

include("../../../Models/conexion.php");

if (isset($_POST['modificado'])){
    if(isset($_POST['id_loteA']) && ($_POST['nombre_loteA'])){
        $id_loteA=$_POST["id_loteA"];
		$nombre_loteA=$_POST["nombre_loteA"];

        $verificar_loteA=mysqli_query($conexion, "SELECT * FROM lote_alimento WHERE id_loteA='$id_loteA'");

		if(mysqli_num_rows($verificar_loteA)<1){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/no_existe_modificar_lote_alimento_empleado.html");
			exit();
		}

		$update="UPDATE lote_alimento SET nombre_loteA = '".$nombre_loteA."' WHERE id_loteA = '".$id_loteA."'";

        $respuesta=mysqli_query($conexion,$update);
            
        if ($respuesta) {{}
            header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/correcto_modificar_lote_alimento_empleado.html");
        }else{
            echo "La actualización no se efectuo";
        }
    }
}


?>