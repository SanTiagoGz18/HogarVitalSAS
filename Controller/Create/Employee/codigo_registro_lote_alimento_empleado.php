<?php

include("../../../Models/conexion.php");


if (isset($_POST['enviar'])){
	if(isset($_POST['nombre_loteA'])){	
		$nombre_loteA=$_POST['nombre_loteA'];

		$verificar_lote=mysqli_query($conexion, "SELECT * FROM lote_alimento WHERE nombre_loteA='$nombre_loteA'");

		if(mysqli_num_rows($verificar_lote)>0){
			header("location:../../../Views/Html/Verifications/VerificationsEmployee/repetido_lote_alimento_empleado.html");
			exit();
		}

		$insert="INSERT INTO lote_alimento (nombre_loteA) VALUES ('$nombre_loteA')";

		$respuesta=mysqli_query($conexion,$insert);

		if ($respuesta) {
			header('Location:../../../Views/Html/Verifications/VerificationsProducts/Employee/correcto_registro_lote_alimento_empleado.html');
		}
	}
	
}

?>