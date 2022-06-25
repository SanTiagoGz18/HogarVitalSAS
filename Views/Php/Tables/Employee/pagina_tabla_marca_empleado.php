<?php
include ("../../../../Models/conexion.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Marca - Productos Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../css/estilo_pagina_tablas.css">
	<link rel="icon" type="imagenes/logo.png" href="../../../imagenes/logo_icon.ico">
</head>
<body>
	<div>
		<img src="../../../imagenes/agregar_marca.png" class="imgM"> 
		<a href="../../../Php/Registers/Marca/codigo_registro_marca.php"><input type="submit" id="boton" value="Agregar Marca"></a> 
		
		<img src="../../../imagenes/editar_marca.png" class="imgM2">
		<a href="../../../Php/Update/Admin/Confirms/modificar_marca_confirm.php"><input type="submit" id="boton3" value="Modificar Marca"></a>
	</div>
	<div class="icono">
			<a href="../../../Html/pagina_inicial_empleado.html"><input type="image" id="home" alt="Volver" src="../../../imagenes/home.png"></a><i class="fab fa-Volver"></i>
			<span>Volver</span>
		</div>
	<h1 class="titulo">MARCAS</h1>
	<hr width="50%" size="5" color="white" style="top: 10%; position:relative">
	<br>
	<div class="contenido2">
</body>
</html>
<table border="4" class="tabla">
<tbody>
	<tr class="tr">
		<td>CODIGO</td>
		<td>NOMBRE DE LA MARCA</td>
	</tr>
<?php 
$select="SELECT * FROM marca";
$resultado=mysqli_query($conexion,$select);
while($fila=mysqli_fetch_array($resultado)){?>
	<tr>
		<td><?php echo $fila['id_marca'];?> </td>
		<td><?php echo $fila['nombre_marca']?></td>
		</td>
	</tr>
	</div>
<?php } ?>
</tbody>
</table>