<?php
include("../Models/conexion.php");
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Alimentos - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_pagina_tablas_productos.css">
	<link rel="icon" type="imagenes/logo.png" href="imagenes/logo_icon.ico">
</head>
<body>
	<div class="icono">
		<a href="../Views/Html/pagina_inicial_producto_director.html"><input type="image" id="home" alt="Volver" src="imagenes/home.png"></a><i class="fab fa-Volver"></i>
		<span>Volver</span>
	</div>
	<h1 class="titulo">ALIMENTOS</h1>
	<hr width="50%" size="5" color="white" style="top: 14%; position:absolute; left: 25%;">
	<div class="contenido">
		<div id="t12"><p>CODIGO</p></div>
		<div id="t22"><p>NOMBRE</p></div>
		<div id="t32"><p>CANTIDAD</p></div>
		<div id="t42"><p>FECHA</p></div>
		<div id="t52"><p>REGISTRO</p></div>
		<div id="t62"><p>FECHA</p></div>
		<div id="t72"><p>ACTUALIZADO</p></div>
		<div id="t82"><p>CATEGORIA</p></div>
		<div id="t92"><p>MARCA</p></div>
		<div id="t102"><p>PROVEEDOR</p></div>
		<div id="t112"><p>FECHA</p></div>
		<div id="t122"><p>RECEPCIÓN</p></div>
		<div id="t132"><p>FECHA</p></div>
		<div id="t142"><p>VENCIMIENTO</p></div>
		<div id="t152"><p>LOTE</p></div>
		<div id="t162"><p>MODIFICAR/</p></div>
		<div id="t172"><p>ELIMINAR</p></div>
</body>
</html>
<table border="4" class="tabla">
<tbody>
	<br>
	<br>
<?php 
$select="SELECT * FROM ((((((productos
inner join categoria on categoria.id_categoria = productos.categoria_id)
inner join marca on marca.id_marca = productos.marca_id)
inner join proveedores_productos on productos.id_producto = proveedores_productos.producto_id)
inner join proveedores on proveedores.id_proveedor = proveedores_productos.proveedor_id)
inner join alimento on alimento.id_producto_alimento = productos.id_producto)
inner join lote_alimento on lote_alimento.id_loteA = alimento.loteA_id)";
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
		<td><?php echo $fila['fecha_vencimientoA']?></td>
		<td><?php echo $fila['nombre_loteA']?></td>
		<td><a href="../Views/Html/pagina_perfil_tabla_empleado.html"><img src="imagenes/detalles.png" alt="detalles" class="boton"></a></td>
	</tr>
	</div>
<?php } ?>
</tbody>
</table>