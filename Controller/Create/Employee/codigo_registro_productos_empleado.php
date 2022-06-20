<?php

include("../Models/conexion.php");

if (isset($_POST['enviar'])){
	if(isset($_POST['id_producto']) && (isset($_POST['fecha_ingreso']))){
		$id_producto=$_POST["id_producto"];
		$nombre_producto=$_POST["nombre_producto"];
		$cantidad_producto=$_POST["cantidad_producto"];
		$precio_producto=$_POST["precio_producto"];
		$fecha_ingreso=$_POST["fecha_ingreso"];
		$fecha_vencimiento=$_POST["fecha_vencimiento"];
		$marca=$_POST["marca"];
		$tipo_producto=$_POST["tipo_producto"];

		$verificar_id=mysqli_query($conexion, "SELECT * FROM productos WHERE id_producto='$id_producto'");

		if(mysqli_num_rows($verificar_id)>0){
			header("location:../Views/Html/repetido_productos_empleado.html");
			exit();
		}

		//$verificar_enseres=mysqli_query($conexion, "SELECT * FROM tipo_productos WHERE tipo_producto_id=1");
		//$verificar_medicamentos=mysqli_query($conexion, "SELECT * FROM tipo_productos WHERE tipo_producto_id=2");
		//$verificar_lavanderia=mysqli_query($conexion, "SELECT * FROM tipo_productos WHERE tipo_producto_id=3");
		//$verificar_oficina=mysqli_query($conexion, "SELECT * FROM tipo_productos WHERE tipo_producto_id=4");
		//$verificar_aseo=mysqli_query($conexion, "SELECT * FROM tipo_productos WHERE tipo_producto_id=5");
		//$verificar_comida=mysqli_query($conexion, "SELECT * FROM tipo_productos WHERE tipo_producto_id=6");
		
		if($_REQUEST['tipo_producto'] == 'enseres'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto, precio_producto, fecha_ingreso, fecha_vencimiento, marca, id_tipo_producto) VALUES ('$id_producto','$nombre_producto','$cantidad_producto','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',1)";
		}else if($_REQUEST['tipo_producto'] == 'medicamentos'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto, precio_producto, fecha_ingreso, fecha_vencimiento, marca, id_tipo_producto) VALUES ('$id_producto','$nombre_producto','$cantidad_producto','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',2)";
		}else if($_REQUEST['tipo_producto'] == 'lavanderia'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto, precio_producto, fecha_ingreso, fecha_vencimiento, marca, id_tipo_producto) VALUES ('$id_producto','$nombre_producto','$cantidad_producto','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',3)";
		}else if($_REQUEST['tipo_producto'] == 'oficina'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto, precio_producto, fecha_ingreso, fecha_vencimiento, marca, id_tipo_producto) VALUES ('$id_producto','$nombre_producto','$cantidad_producto','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',4)";
		}else if($_REQUEST['tipo_producto'] == 'aseo'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto, precio_producto, fecha_ingreso, fecha_vencimiento, marca, id_tipo_producto) VALUES ('$id_producto','$nombre_producto','$cantidad_producto','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',5)";
		}else if($_REQUEST['tipo_producto'] == 'comida'){
			$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto, precio_producto, fecha_ingreso, fecha_vencimiento, marca, id_tipo_producto) VALUES ('$id_producto','$nombre_producto','$cantidad_producto','$precio_producto','$fecha_ingreso','$fecha_vencimiento','$marca',6)";
		}

		//$insert="INSERT INTO productos(id_producto, nombre_producto, cantidad_producto, precio_producto, fecha_ingreso, marca, id_tipo_productos) VALUES ('$id_producto','$nombre_producto','$cantidad_producto','$precio_producto','$fecha_ingreso','$marca','$tipo_producto')";

		$respuesta=mysqli_query($conexion,$insert);

		if ($respuesta) {
			header("location:../Views/Html/correcto_productos_empleado.html");
		}else{
			echo "mal";
		}

	}
}


?>