<?php
include ("../Models/conexion.php"); 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>empleados - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_pagina_tablas.css">
	<link rel="icon" type="imagenes/logo.png" href="imagenes/logo_icon.ico">
</head>
<body>
	<div>
		<img src="imagenes/registro.png" class="imgp">
		<a href="../Views/codigo_registro.php"><input type="submit" id="boton" value="Agregar personal"></a> 
	</div>
	<div class="icono">
			<a href="../Views/Html/pagina_inicial.html"><input type="image" id="home" alt="Volver" src="imagenes/home.png"></a><i class="fab fa-Volver"></i>
			<span>Volver</span>
		</div>
	<h1 class="titulo">empleados</h1>
	<hr width="50%" size="5" color="white" style="top: 10%; position:relative">
	<br>
	<div class="contenido">
		<div id="t1"><p>DOCUMENTO</p></div>
		<div id="t2"><p>TIPO</p></div>
		<div id="t3"><p>NOMBRES</p></div>
		<div id="t4"><p>APELLIDOS</p></div>
		<div id="t5"><p>DETALLES</p></div>
</body>
</html>
<table border="4" class="tabla">
<tbody>
<?php 
$select="SELECT * FROM usuarios";
$resultado=mysqli_query($conexion,$select);
while($fila=mysqli_fetch_array($resultado)){?>
	<tr>
		<td><?php echo $fila['id_usuario'];?> </td>
		<td><?php echo $fila['tipo_documento']?></td>
		<td><?php echo $fila['nombre_usuario']?> </td>
		<td><?php echo $fila['apellido_usuario']?> </td>
		<td><a href="../Views/pagina_perfil_tabla_empleado.php"><img src="imagenes/detalle_empleado.png" alt="detalles" class="boton"></a></td>
		</td>
	</tr>
	</div>
<?php } ?>
</tbody>
</table>