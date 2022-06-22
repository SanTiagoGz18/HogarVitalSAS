<?php
include("../Models/conexion.php");
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Oficina - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_pagina_tablas_productos.css">
	<link rel="icon" type="imagenes/logo.png" href="imagenes/logo_icon.ico">
</head>
<body>
	<div class="icono">
		<a href="../Views/Html/pagina_inicial_producto_empleado.html"><input type="image" id="home" alt="Volver" src="imagenes/home.png"></a><i class="fab fa-Volver"></i>
		<span>Volver</span>
	</div>
	<h1 class="titulo">OFICINA</h1>
	<hr width="50%" size="5" color="white" style="top: 14%; position:absolute; left: 25%;">
	<div class="contenido">
    	<div id="t1"><p>CODIGO</p></div>
		<div id="t2"><p>NOMBRE</p></div>
		<div id="t3"><p>CANTIDAD</p></div>
		<div id="t4"><p>DETALLES</p></div>
</body>
</html>
<table border="4" class="tabla">
<tbody>
<?php 
$select="SELECT * FROM productos WHERE id_tipo_producto='4'";
$resultado=mysqli_query($conexion,$select);
while($fila=mysqli_fetch_array($resultado)){?>
	<tr>
		<td><?php echo $fila['id_producto']?> </td>
		<td><?php echo $fila['nombre_producto']?></td>
		<td><?php echo $fila['cantidad_producto']?></td>
		<td><a href="../Views/Html/pagina_productos_detalle_empleados.html"><img src="imagenes/detalles.png" alt="detalles" class="boton"></a></td>
		</td>
	</tr>
	</div>
<?php } ?>
</tbody>
</table>