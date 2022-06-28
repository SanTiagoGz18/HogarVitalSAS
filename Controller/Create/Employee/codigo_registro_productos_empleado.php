<?php

include("../../../Models/conexion.php");

if (isset($_POST['enviar'])){
	if(isset($_POST['id_producto']) && (isset($_POST['cantidad_producto']))){
		$id_producto=$_POST["id_producto"];
		$nombre_producto=$_POST["nombre_producto"];
		$cantidad_producto_ingresada=$_POST["cantidad_producto"];
		$fecha_vencimiento=$_POST["fecha_vencimiento"];
		$fecha_proveedor=$_POST["fecha_proveedor"];
		$marca=$_POST["marca"];
		$nombre_proveedor=$_POST["proveedor"];
		$categoria=$_POST["categoria"];
		$loteA=$_POST["loteA"];
		$loteM=$_POST["loteM"];

		/*Validaciones del formulario*/

		$verificar_id=mysqli_query($conexion, "SELECT * FROM productos WHERE id_producto='$id_producto'");

		$filas=mysqli_fetch_array($verificar_id);

		if(mysqli_num_rows($verificar_id)>0){
			$cantidad=$filas['cantidad_producto'];
		
			$cantidad_final=$cantidad+$cantidad_producto_ingresada;
			$update="UPDATE productos SET nombre_producto = '".$nombre_producto."', cantidad_producto = '".$cantidad_final."', fecha_actualizacion_producto = NOW() WHERE id_producto = '".$id_producto."'";

			$res=mysqli_query($conexion,$update);
			if($res){
				header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/repetido_productos_empleado.html");
				exit();
			}
		}

		if($_REQUEST['marca'] == 'no'){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/agregue_marca_empleado.html");
			exit();
		}
		if($_REQUEST['proveedor'] == 'no'){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/agregue_proveedor_empleado.html");
			exit();
		}
		if($_REQUEST['categoria'] == 'medicamentos' && $_REQUEST['loteM'] == 'no'){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/agregue_loteM_empleado.html");
			exit();
		}
		if($_REQUEST['categoria'] == 'medicamentos' && empty($_POST['fecha_vencimiento'])){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/agregue_fecha_empleado.html");
			exit();
		}
		if($_REQUEST['categoria'] == 'alimento' && $_REQUEST['loteA'] == 'no'){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/agregue_loteA_empleado.html");
			exit();
		}
		if($_REQUEST['categoria'] == 'alimento' && empty($_POST['fecha_vencimiento'])){
			header("location:../../../Views/Html/Verifications/VerificationsProducts/Employee/agregue_fecha_empleado.html");
			exit();
		}

		if($_REQUEST['categoria'] == 'enseres'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada',NOW(),NOW(),'$marca', 1)";
		}else if($_REQUEST['categoria'] == 'medicamentos'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada',NOW(),NOW(),'$marca',2)";
			$insert3="INSERT INTO medicamento(id_producto_medicamento, fecha_vencimientoM, loteM_id) VALUES ('$id_producto','$fecha_vencimiento','$loteM')";
		}else if($_REQUEST['categoria'] == 'lavanderia'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada',NOW(),NOW(),'$marca',3)";
		}else if($_REQUEST['categoria'] == 'oficina'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada',NOW(),NOW(),'$marca',4)";
		}else if($_REQUEST['categoria'] == 'aseo'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada',NOW(),NOW(),'$marca',5)";
		}else if($_REQUEST['categoria'] == 'alimento'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada',NOW(),NOW(),'$marca',6)";
			$insert4="INSERT INTO alimento(id_producto_alimento, fecha_vencimientoA, loteA_id) VALUES ('$id_producto','$fecha_vencimiento','$loteA')";
		}

		$respuesta=mysqli_query($conexion,$insert);

		if ($respuesta) {
			$insert2=mysqli_query($conexion, "INSERT INTO proveedores_productos(proveedor_id, producto_id, fecha_proveedor) VALUES ('$nombre_proveedor','$id_producto','$fecha_proveedor')");
			if($_REQUEST['categoria'] == 'medicamentos'){
				$respuesta2=mysqli_query($conexion,$insert3);
			}
			if($_REQUEST['categoria'] == 'alimento'){
				$respuesta3=mysqli_query($conexion,$insert4);
			}
			header("location:../Views/Html/correcto_productos_empleado.html");
		}else{
			echo "mal";
		}
	}
}

?>