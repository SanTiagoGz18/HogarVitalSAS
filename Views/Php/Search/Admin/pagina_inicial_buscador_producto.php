<?php
include("../../../../Models/conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buscador producto - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../css/estilo_pagina_inicial_buscador.css">
	<link rel="icon" type="imagenes/logo.png" href="../../../imagenes/logo_icon.ico">
</head>
<body>
	<h1 id="titulo">Buscador de productos</h1>
	<hr width="50%" size="5" color="white" style="position:relative; margin-left: 25%;">
	<form action="pagina_inicial_buscador_producto.php" method="post">
		<div class="contenido">
			<div class="contenido2">
				<input type="text" name="busqueda" class="buscar" placeholder="Ingrese el producto a buscar...">
				<div class="botona">
						<a href=""><input type="image" name="enviar" id="boton" src="../../../imagenes/lupa2.png"></a>
				</div>
			</div>
		</div>
	</form>
	<div class="icono">
		<a href="../../../Html/pagina_buscador_productos_director.html"><input type="image" id="home" alt="Volver" src="../../../imagenes/home.png"></a><i class="fab fa-Volver"></i>
		<span>Volver</span>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<div class="contenido3">
<table border="4" class="tabla">
	<tr class="tr">
		<td>CODIGO</td>
		<td>NOMBRE</td>
		<td>CANTIDAD</td>
		<td>FECHA REGISTRO</td>
		<td>FECHA EDITADO</td>
		<td>CATEGORIA</td>
		<td>MARCA</td>
		<td>ACCIONES</td>
	</tr>
</div>
</body>
</html>
<tbody>
<?php

if(isset($_POST['busqueda'])){
	$busqueda=$_POST['busqueda'];
	$resultado=mysqli_query($conexion,"SELECT * FROM ((productos INNER JOIN categoria ON productos.categoria_id=categoria.id_categoria)INNER JOIN marca ON productos.marca_id=marca.id_marca)WHERE id_producto LIKE '%$busqueda%' OR nombre_producto LIKE '%$busqueda%' OR nombre_categoria LIKE '%$busqueda%' OR nombre_marca LIKE '%$busqueda%' OR cantidad_producto LIKE '%$busqueda%' OR fecha_registro_producto LIKE '%$busqueda%' OR fecha_actualizacion_producto LIKE '%$busqueda%'");
	
	while($fila=mysqli_fetch_array($resultado)){?>

		<tr>
			<td><?php echo $fila['id_producto']?> </td>
			<td><?php echo $fila['nombre_producto']?></td>
			<td><?php echo $fila['cantidad_producto']?></td>
			<td><?php echo $fila['fecha_registro_producto']?></td>
			<td><?php echo $fila['fecha_actualizacion_producto']?></td>
			<td><?php echo $fila['nombre_categoria']?></td>
			<td><?php echo $fila['nombre_marca']?></td>
			<td><a href="../Views/Html/pagina_productos_detalle.html"><img src="../../../imagenes/detalles.png" alt="detalles" class="boton"></a></td>
		</tr>
	</div>
	</div>
<?php }} ?>
</tbody>
</table>