<?php
include ("../../../../Models/conexion.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lotes alimentos - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../css/estilo_pagina_tablas.css">
	<link rel="icon" type="imagenes/logo.png" href="../../../imagenes/logo_icon.ico">
</head>
<body>
	<div>
		<img src="../../../imagenes/agregar_lote_alimento.png" class="imgM"> 
		<a href="../../../Php/Registers/Lotes/codigo_registro_lote_alimento.php"><input type="submit" id="boton" value="Agregar Lote"></a> 
		
		<img src="../../../imagenes/editar_lote_alimento.png" class="imgM2">
		<a href="../../../Php/Update/Admin/Confirms/modificar_lote_alimento_confirm.php"><input type="submit" id="boton3" value="Modificar Lote"></a>

		<img src="../../../imagenes/eliminar_lote_alimento.png" class="imgM3">
		<a href="../../../Php/Delete/eliminar_lote_alimento_confirm.php"><input type="submit" id="boton4" value="Eliminar Lote"></a>

	</div>
	<div class="icono">
			<a href="../../../Html/pagina_lotes.html"><input type="image" id="home" alt="Volver" src="../../../imagenes/home.png"></a><i class="fab fa-Volver"></i>
			<span>Volver</span>
		</div>
	<h1 class="titulo">LOTES ALIMENTOS</h1>
	<hr width="50%" size="5" color="white" style="top: 10%; position:relative">
	<br>
	<div class="contenido2">
</body>
</html>
<table border="4" class="tabla">
<tbody>
	<tr class="tr">
		<td>CODIGO</td>
		<td>NOMBRE DEL LOTE</td>
	</tr>
<?php 
$select="SELECT * FROM lote_alimento";
$resultado=mysqli_query($conexion,$select);
while($fila=mysqli_fetch_array($resultado)){?>
	<tr>
		<td><?php echo $fila['id_loteA'];?> </td>
		<td><?php echo $fila['nombre_loteA']?></td>
		</td>
	</tr>
	</div>
<?php } ?>
</tbody>
</table>