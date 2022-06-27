<?php
include ("../../../../Models/conexion.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Proveedor - Productos Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../css/estilo_pagina_tablas.css">
	<link rel="icon" type="imagenes/logo.png" href="../../../../imagenes/logo_icon.ico">
</head>
<body>
	<div>
		<img src="../../../imagenes/agregar_proveedor.png" class="imgp">
		<a href="../../../../Views/Php/Registers/Proveedor/employee/codigo_registro_proveedor_empleado.php"><input type="submit" id="boton" value="Agregar Proveedor"></a> 
		
		<img src="../../../imagenes/editar_proveedor.png" class="imgp1">
		<a href="../../Update/Employee/Confirms/modificar_proveedor_confirm_empleado.php"><input type="submit" id="boton3" value="Modificar Proveedor"></a>

	</div>
	<div class="icono">
			<a href="../../../../Views/Html/pagina_inicial_empleado.html"><input type="image" id="home" alt="Volver" src="../../../imagenes/home.png"></a><i class="fab fa-Volver"></i>
			<span>Volver</span>
		</div>
	<h1 class="titulo">PROVEEDORES</h1>
	<hr width="50%" size="5" color="white" style="top: 10%; position:relative">
	<br>
	<div class="contenido2">
</body>
</html>
<table border="4" class="tabla">
<tbody>
	<tr class="tr">
		<td>CODIGO</td>
		<td>NOMBRE DEL PROVEEDOR</td>
	</tr>
<?php 
$select="SELECT * FROM proveedores";
$resultado=mysqli_query($conexion,$select);
while($fila=mysqli_fetch_array($resultado)){?>
	<tr>
		<td><?php echo $fila['id_proveedor'];?> </td>
		<td><?php echo $fila['nombre_proveedor']?></td>
		</td>
	</tr>
	</div>
<?php } ?>
</tbody>
</table>