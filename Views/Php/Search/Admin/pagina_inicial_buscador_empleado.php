<?php
include("../../../../Models/conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buscador empleado - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../css/estilo_pagina_inicial_buscador.css">
	<link rel="icon" type="imagenes/logo.png" href="../../../imagenes/logo_icon.ico">
</head>
<body>
	<h1 id="titulo">Buscador de empleados</h1>
	<hr width="50%" size="5" color="white" style="position:relative; margin-left: 25%;">
	<form action="pagina_inicial_buscador_empleado.php" method="post">
		<div class="contenido">
			<div class="contenido2">
				<input type="text" name="busqueda" class="buscar" placeholder="Ingrese el empleado a buscar...">
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
		<td>DOCUMENTO</td>
		<td>TIPO</td>
		<td>NOMBRES</td>
		<td>APELLIDOS</td>
		<td>CORREO ELECTRONICO</td>
		<td>TELEFONO</td>
		<td>DIRECCIÓN</td>
		<td>CARGO</td>
		<td>FECHA REGISTRO</td>
		<td>FECHA ACTUALIZADO</td>
		<td>ACCIONES</td>
	</tr>
</body>
</html>
<tbody>
<?php

if(isset($_POST['busqueda'])){
	$busqueda=$_POST['busqueda'];
	$resultado=mysqli_query($conexion,"SELECT * FROM usuarios INNER JOIN cargo ON usuarios.cargo_id=cargo.id_cargo WHERE id_usuario LIKE '%$busqueda%' OR tipo_documento LIKE '%$busqueda%' OR nombre_usuario LIKE '%$busqueda%' OR apellido_usuario LIKE '%$busqueda%' OR correo LIKE '%$busqueda%' OR telefono LIKE '%$busqueda%' OR direccion LIKE '%$busqueda%' OR nombre_cargo LIKE '%$busqueda%' OR fecha_registro_usuario LIKE '%$busqueda%' OR fecha_actualizacion_usuario LIKE '%$busqueda%'");
	
	while($fila=mysqli_fetch_array($resultado)){?>
		<tr>
		<td><?php echo $fila['id_usuario'];?> </td>
		<td><?php echo $fila['tipo_documento']?></td>
		<td><?php echo $fila['nombre_usuario']?> </td>
		<td><?php echo $fila['apellido_usuario']?> </td>
		<td><?php echo $fila['correo']?> </td>
		<td><?php echo $fila['telefono']?> </td>
		<td><?php echo $fila['direccion']?> </td>
		<td><?php echo $fila['nombre_cargo']?> </td>
		<td><?php echo $fila['fecha_registro_usuario']?> </td>
		<td><?php echo $fila['fecha_actualizacion_usuario']?> </td>
		<td><a href="../../Update/Admin/Confirms/modificar_personal_confirm_buscar.php"><img src="../../../imagenes/detalle_empleado.png" alt="detalles" class="botonad"></a></td>
		</tr>
	</div>
	</div>
<?php }} ?>
</tbody>
</table>