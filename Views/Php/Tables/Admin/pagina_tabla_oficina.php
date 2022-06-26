<?php
include("../../../../Models/conexion.php");
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Oficina - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../css/estilo_pagina_tablas_productos.css">
	<link rel="icon" type="imagenes/logo.png" href="../../../imagenes/logo_icon.ico">
</head>
<body>
	<div class="icono">
		<a href="../../../Php/pagina_inicial_producto_director.php"><input type="image" id="home" alt="Volver" src="../../../imagenes/home.png"></a><i class="fab fa-Volver"></i>
		<span>Volver</span>
	</div>
	<h1 class="titulo">OFICINA</h1>
	<hr width="50%" size="5" color="white" style="top: 14%; position:absolute; left: 25%;">
	<br>
	<div class="contenido">
</body>
</html>
<table border="4" class="tabla">
<tbody>
	<tr class="tr">
		<td>CODIGO</td>
		<td>NOMBRE</td>
		<td>CANTIDAD</td>
		<td>FECHA REGISTRO</td>
		<td>FECHA EDITADO</td>
		<td>FECHA RECEPCIÓN</td>
		<td>PROVEEDOR</td>
		<td>CATEGORIA</td>
		<td>MARCA</td>
		<td>ACCIONES</td>
	</tr>
<?php 
$select="SELECT * FROM ((((productos INNER JOIN categoria ON productos.categoria_id=categoria.id_categoria)INNER JOIN marca ON productos.marca_id=marca.id_marca)INNER JOIN proveedores_productos ON productos.id_producto=proveedores_productos.producto_id)INNER JOIN proveedores ON proveedores_productos.proveedor_id=proveedores.id_proveedor)WHERE categoria_id='4'";
$resultado=mysqli_query($conexion,$select);
while($fila=mysqli_fetch_array($resultado)){?>
	<tr>
		<td><?php echo $fila['id_producto']?> </td>
		<td><?php echo $fila['nombre_producto']?></td>
		<td><?php echo $fila['cantidad_producto']?></td>
		<td><?php echo $fila['fecha_registro_producto']?></td>
		<td><?php echo $fila['fecha_actualizacion_producto']?></td>
		<td><?php echo $fila['fecha_proveedor']?></td>
		<td><?php echo $fila['nombre_proveedor']?></td>
		<td><?php echo $fila['nombre_categoria']?></td>
		<td><?php echo $fila['nombre_marca']?></td>
		<td><a href="../../../Html/pagina_modificar_eliminar_director.html"><img src="../../../imagenes/detalles.png" alt="detalles" class="boton"></a></td>
	</tr>
<?php } ?>
</tbody>
</table>