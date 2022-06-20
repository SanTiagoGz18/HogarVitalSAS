<?php

include("../../../Models/conexion.php");


if (isset($_POST['enviar'])){
	if(isset($_POST['correo']) && (isset($_POST['contrasena']))){
		$id_usuario=$_POST["id_usuario"];
		$tipo_documento=$_POST["tipo_documento"];
		$nombre_usuario=$_POST["nombre_usuario"];
		$apellido_usuario=$_POST["apellido_usuario"];
		$correo=$_POST["correo"];
		$contrasena=$_POST["contrasena"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];

		$verificar_documento_correo=mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='$id_usuario' or correo='$correo'");

		if(mysqli_num_rows($verificar_documento_correo)>0){
			header("location:../Views/Html/repetido.html");
			exit();
		}

		$insert="INSERT INTO usuarios (id_usuario ,tipo_documento ,nombre_usuario ,apellido_usuario ,correo ,contrasena ,telefono ,direccion, cargo_id, fecha_registro_usuario, fecha_actualizacion_usuario) 
		VALUES ('$id_usuario','$tipo_documento','$nombre_usuario','$apellido_usuario','$correo','$contrasena','$telefono','$direccion', 2, NOW(), NOW())";


		$respuesta=mysqli_query($conexion,$insert);

		if ($respuesta) {
			header('Location:../Views/Html/correcto_registro.html');
		}
	}
	
}

?>
