<?php

include("../../../Models/conexion.php");


if (isset($_POST['enviar'])){
	if(isset($_POST['nombre_marca'])){	
		$nombre_marca=$_POST['nombre_marca'];

		$verificar_marca=mysqli_query($conexion, "SELECT * FROM marca WHERE nombre_marca='$nombre_marca'");

		if(mysqli_num_rows($verificar_marca)>0){
			header("location:../../../Views/Html/Verifications/repetido_marca.html");
			exit();
		}

		$insert="INSERT INTO marca (nombre_marca) VALUES ('$nombre_marca')";

		$respuesta=mysqli_query($conexion,$insert);

		if ($respuesta) {
			header('Location:../../../Views/Html/Verifications/VerificationsProducts/correcto_registro_marca.html');
		}
	}
	
}

?>