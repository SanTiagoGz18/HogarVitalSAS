<?php

include("../Models/conexion.php");

if (isset($_POST['modificado'])){
    if(isset($_POST['id_marca']) && ($_POST['nombre_marca'])){
        $id_marca=$_POST["id_marca"];  
		$nombre_marca=$_POST["nombre_marca"];

        $verificar_marca=mysqli_query($conexion, "SELECT * FROM marca WHERE id_marca='$id_marca'");

		if(mysqli_num_rows($verificar_marca)<1){
			header("location:../Views/Html/no_existe_modificar_marca.html");
			exit();
		}

		$update="UPDATE marca SET nombre_marca = '".$nombre_marca."' WHERE id_marca = '".$id_marca."'";

        $respuesta=mysqli_query($conexion,$update);
            
        if ($respuesta) {{}
            header("location:../Views/Html/correcto_modificar_marca.html");
        }else{
            echo "La actualización no se efectuo";
        }
    }
}


?>