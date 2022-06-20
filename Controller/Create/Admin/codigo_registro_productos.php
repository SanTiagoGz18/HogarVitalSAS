<?php

include("../Models/conexion.php");

if (isset($_POST['enviar'])){
	if(isset($_POST['id_producto']) && (isset($_POST['cantidad_producto']))){
		$id_producto=$_POST["id_producto"];
		$nombre_producto=$_POST["nombre_producto"];
		$cantidad_producto_ingresada=$_POST["cantidad_producto"];
		$precio_producto=$_POST["precio_producto"];
		$fecha_vencimiento=$_POST["fecha_vencimiento"];
		$marca=$_POST["marca"];
		$nombre_proveedor=$_POST["nombre_proveedor"];
		$categoria=$_POST["categoria"];
		$loteA=$_POST["loteA"];
		$loteM=$_POST["loteM"];

		$verificar_id=mysqli_query($conexion, "SELECT * FROM productos WHERE id_producto='$id_producto'");

		$filas=mysqli_fetch_array($verificar_id);
		$cantidad=$filas['cantidad_producto'];
		
		$cantidad_final=$cantidad+$cantidad_producto_ingresada;

		if(mysqli_num_rows($verificar_id)>0){
				$update="UPDATE productos SET nombre_producto = '".$nombre_producto."', cantidad_producto = '".$cantidad_final."', fecha_actualizacion_producto = NOW() WHERE id_producto = '".$id_producto."'";

				$res=mysqli_query($conexion,$update);
				if($res){
					header("location:../Views/Html/repetido_productos_director.html");
					exit();
				}
		}

		$verificar_marca=mysqli_query($conexion, "SELECT * FROM marca WHERE nombre_marca='$marca'");
		
		$filas2=mysqli_fetch_array($verificar_marca);

		$id_marca=$filas2['id_marca'];
		
		if($_REQUEST['categoria'] == 'enseres'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada',NOW(),NOW(),'$id_marca', 1)";
		}else if($_REQUEST['categoria'] == 'medicamentos'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',2)";
		}else if($_REQUEST['categoria'] == 'lavanderia'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',3)";
		}else if($_REQUEST['categoria'] == 'oficina'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',4)";
		}else if($_REQUEST['categoria'] == 'aseo'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',5)";
		}else if($_REQUEST['categoria'] == 'comida'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto,  fecha_registro_producto, fecha_actualizacion_producto, marca_id, categoria_id) VALUES ('$id_producto','$nombre_producto','$cantidad_producto_ingresada','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',6)";
		}

		$respuesta=mysqli_query($conexion,$insert);

		if ($respuesta) {
			header("location:../Views/Html/correcto_productos.html");
		}else{
			echo "mal";
		}

	}
}


?>