<?php
include("../Models/conexion.php");
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Aseo - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_pagina_tablas_productos.css">
	<link rel="icon" type="imagenes/logo.png" href="imagenes/logo_icon.ico">
</head>
<body>
	<div class="icono">
		<a href="../Views/Html/pagina_inicial_producto_director.html"><input type="image" id="home" alt="Volver" src="imagenes/home.png"></a><i class="fab fa-Volver"></i>
		<span>Volver</span>
	</div>
	<h1 class="titulo">ASEO</h1>
	<hr width="50%" size="5" color="white" style="top: 14%; position:absolute; left: 25%;">
	<div class="contenido">
		<div id="t1"><p>CODIGO</p></div>
		<div id="t2"><p>NOMBRE</p></div>
		<div id="t3"><p>CANTIDAD</p></div>
		<div id="t4"><p>FECHA</p></div>
		<div id="t5"><p>REGISTRO</p></div>
		<div id="t6"><p>FECHA</p></div>
		<div id="t7"><p>ACTUALIZADO</p></div>
		<div id="t8"><p>CATEGORIA</p></div>
		<div id="t9"><p>MARCA</p></div>
		<div id="t10"><p>MODIFICAR/</p></div>
		<div id="t11"><p>ELIMINAR</p></div>
</body>
</html>
<table border="4" class="tabla">
<tbody>
	<br>
	<br>
<?php 
$select="SELECT * FROM ((productos INNER JOIN categoria ON productos.categoria_id=categoria.id_categoria)INNER JOIN marca ON productos.marca_id=marca.id_marca)WHERE categoria_id='5'";
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
		<td><a href="../Views/Html/pagina_perfil_tabla_empleado.html"><img src="imagenes/detalles.png" alt="detalles" class="boton"></a></td>
		</td>
	</tr>
	
	</div>
<?php } ?>
</tbody>
</table>