<?php

include("../../../Models/conexion.php");

if (isset($_POST['modificado'])){
    if(isset($_POST['id_producto']) && ($_POST['cantidad_producto'])){
        $id_producto=$_POST["id_producto"];  
		$nombre_producto=$_POST["nombre_producto"];
		$cantidad_producto=$_POST["cantidad_producto"];
        $categoria=$_POST["categoria"];
        $marca=$_POST["marca"];
		$nombre_proveedor=$_POST["proveedor"];

        $verificar_producto=mysqli_query($conexion, "SELECT * FROM productos WHERE id_producto='$id_producto'");

		if(mysqli_num_rows($verificar_producto)<1){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/no_existe_modificar_producto_empleado.html");
			exit();
		}

        if($_REQUEST['categoria'] == 'no'){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/agregue_categoria_empleado.html");
			exit();
		}
        if($_REQUEST['marca'] == 'no'){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/agregue_marca_empleado.html");
			exit();
		}
		if($_REQUEST['proveedor'] == 'no'){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/agregue_proveedor_empleado.html");
			exit();
		}

        $update="UPDATE productos SET nombre_producto = '".$nombre_producto."', cantidad_producto = '".$cantidad_producto."', categoria_id='".$categoria."', marca_id='".$marca."', fecha_actualizacion_producto = NOW() WHERE id_producto = '".$id_producto."'";

		$res=mysqli_query($conexion,$update);
		if($res){
            $update2=mysqli_query($conexion, "UPDATE proveedores_productos SET proveedor_id='".$nombre_proveedor."' WHERE producto_id = '".$id_producto."'");
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/correcto_modificar_productos_empleado.html");
			exit();
		}

    }
}

?>