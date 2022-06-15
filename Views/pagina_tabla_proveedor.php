<?php
include ("../Models/conexion.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Marca - Productos Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_pagina_tablas.css">
	<link rel="icon" type="imagenes/logo.png" href="imagenes/logo_icon.ico">
</head>
<body>
	<div>
		<img src="imagenes/registro.png" class="imgp">
		<a href="../Views/codigo_registro_proveedor.php"><input type="submit" id="boton" value="Agregar Proveedor"></a> 
		
		<img src="imagenes/editar_usuario.png" class="imgp1">
		<a href="../Views/modificar_proveedor_confirm.php"><input type="submit" id="boton3" value="Modificar Proveedor"></a>

		<img src="imagenes/eliminar_usuario.png" class="imgmarca">
		<a href="../Views/modificar_personal_confirm.php"><input type="submit" id="boton2" value="Eliminar Proveedor"></a>
	</div>
	<div class="icono">
			<a href="../Views/Html/pagina_inicial.html"><input type="image" id="home" alt="Volver" src="imagenes/home.png"></a><i class="fab fa-Volver"></i>
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