<?php

include("../../../Models/conexion.php");


if (isset($_POST['enviar'])){
	if(isset($_POST['nombre_proveedor'])){
		$nombre_proveedor=$_POST['nombre_proveedor'];

		$verificar_proveedor=mysqli_query($conexion, "SELECT * FROM proveedores WHERE nombre_proveedor='$nombre_proveedor'");

		if(mysqli_num_rows($verificar_proveedor)>0){
			header("location:../../../Views/Html/VerificationsEmployee/Employee/repetido_proveedor_empleado.html");
			exit();
		}

		$insert="INSERT INTO proveedores (nombre_proveedor) VALUES ('$nombre_proveedor')";

		$respuesta=mysqli_query($conexion,$insert);

		if ($respuesta) {
			header('Location:../../../Views/Html/Verifications/VerificationsProducts/correcto_registro_proveedor_empleado.html');
		}
	}
	
}

?>
