<?php

include("../../../Models/conexion.php");


if (isset($_POST['enviar'])){
	if(isset($_POST['nombre_loteM'])){	
		$nombre_loteM=$_POST['nombre_loteM'];

		$verificar_lote=mysqli_query($conexion, "SELECT * FROM lote_medicamento WHERE nombre_loteM='$nombre_loteM'");

		if(mysqli_num_rows($verificar_lote)>0){
			header("location:../../../Views/Html/Verifications/repetido_lote_medicamento.html");
			exit();
		}

		$insert="INSERT INTO lote_medicamento (nombre_loteM) VALUES ('$nombre_loteM')";

		$respuesta=mysqli_query($conexion,$insert);

		if ($respuesta) {
			header('Location:../../../Views/Html/Verifications/VerificationsProducts/correcto_registro_lote_medicamento.html');
		}
	}
	
}

?>