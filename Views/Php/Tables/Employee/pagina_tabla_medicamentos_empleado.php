<?php
include("../../../../Models/conexion.php");
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Medicamentos - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../css/estilo_pagina_tablas_productos.css">
	<link rel="icon" type="imagenes/logo.png" href="../../../imagenes/logo_icon.ico">
</head>
<body>
	<div class="icono">
		<a href="../../../Html/pagina_inicial_producto_empleado.html"><input type="image" id="home" alt="Volver" src="../../../imagenes/home.png"></a><i class="fab fa-Volver"></i>
		<span>Volver</span>
	</div>
	<h1 class="titulo">MEDICAMENTOS</h1>
	<hr width="50%" size="5" color="white" style="top: 14%; position:absolute; left: 25%;">
	<div class="contenido">
</body>
</html>
<table border="4" class="tabla">
<tr class="tr">
		<td>CODIGO</td>
		<td>NOMBRE</td>
		<td>CANTIDAD</td>
		<td>FECHA REGISTRO</td>
		<td>FECHA EDITADO</td>
		<td>CATEGORIA</td>
		<td>MARCA</td>
		<td>PROVEEDOR</td>
		<td>FECHA RECEPCIÓN</td>
		<td>FECHA VENCIMIENTO</td>
		<td>LOTE</td>
		<td>MODIFICAR ELIMINAR</td>
	</tr>
<tbody>
<?php 
$select="SELECT * FROM ((((((productos
inner join categoria on categoria.id_categoria = productos.categoria_id)
inner join marca on marca.id_marca = productos.marca_id)
inner join proveedores_productos on productos.id_producto = proveedores_productos.producto_id)
inner join proveedores on proveedores.id_proveedor = proveedores_productos.proveedor_id)
inner join medicamento on medicamento.id_producto_medicamento = productos.id_producto)
inner join lote_medicamento on lote_medicamento.id_loteM = medicamento.loteM_id)";
$resultado=mysqli_query($conexion,$select);
while($fila=mysqli_fetch_array($resultado)){?>
	<tr>
		<td><?php echo $fila['id_producto']?> </td>
		<td><?php echo $fila['nombre_producto']?></td>
		<td><?php echo $fila['cantidad_producto']?></td>
		<td><?php echo $fila['fecha_registro_producto']?></td>
		<td><?php echo $fila['fecha_actualizacion_producto']?></td>
		<td><?php echo $fila['nombre_categoria']?></td>
		<td><?php echo $fila['nombre_marca']?></td>
		<td><?php echo $fila['nombre_proveedor']?></td>
		<td><?php echo $fila['fecha_proveedor']?></td>
		<td><?php echo $fila['fecha_vencimientoM']?></td>
		<td><?php echo $fila['nombre_loteM']?></td>
		<td><a href=""><img src="../../../imagenes/detalles.png" alt="detalles" class="boton"></a></td>
	</tr>
	</div>
<?php } ?>
</tbody>
</table>