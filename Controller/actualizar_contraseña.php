<?php

include("../Models/conexion.php");

if (isset($_POST['cambiar'])){
	if(isset($_POST['id_usuario']) && (isset($_POST['contraseña']))){
        $id_usuario=$_POST["id_usuario"];
		$contraseña=$_POST["contraseña"];
		$ncontraseña=$_POST["ncontraseña"];

		$update="update usuarios set contraseña = '".$contraseña."' where id_usuario = '".$id_usuario."'";

		$respuesta=mysqli_query($conexion,$update);

		if ($respuesta) {
			header("location:../Views/Html/correcto.html");
		}
	}
}


?>