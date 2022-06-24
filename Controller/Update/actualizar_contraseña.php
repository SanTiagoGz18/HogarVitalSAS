<?php

include("../../Models/conexion.php");

if (isset($_POST['cambiar'])){
	if(isset($_POST['id_usuario']) && (isset($_POST['contrasena']))){
        $id_usuario=$_POST["id_usuario"];
		$contrasena=$_POST["contrasena"];
		$ncontrasena=$_POST["ncontrasena"];

		if($contrasena==$ncontrasena){
			$update="UPDATE usuarios SET contrasena = '".$contrasena."' WHERE id_usuario = '".$id_usuario."'";
			
			$respuesta=mysqli_query($conexion,$update);

			if ($respuesta) {
				header("location:../../Views/Html/Verifications/correcto.html");
			}
		}else{
			header("location:../../Views/Html/Verifications/no_correcto_contraseña.html");
		}
	}
}


?>