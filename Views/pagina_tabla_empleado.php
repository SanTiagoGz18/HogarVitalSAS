<?php
include ("../Models/conexion.php"); 
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
		
		<img src="imagenes/registro.png" class="imgp1">
		<a href="../Views/codigo_registro_administrador.php"><input type="submit" id="boton3" value="Agregar Administrador"></a>
		
		<img src="imagenes/eliminar_usuario.png" class="imgp3">
		<a href="../Views/eliminar_personal_confirm.php"><input type="submit" id="boton4" value="Eliminar Personal"></a> 

		<img src="imagenes/editar_usuario.png" class="imgp2">
		<a href="../Views/modificar_personal_confirm.php"><input type="submit" id="boton2" value="Modificar Personal"></a> 
	</div>
	<div class="icono">
			<a href="../Views/Html/pagina_inicial.html"><input type="image" id="home" alt="Volver" src="imagenes/home.png"></a><i class="fab fa-Volver"></i>
			<span>Volver</span>
		</div>
	<h1 class="titulo">Empleados</h1>
	<hr width="50%" size="5" color="white" style="top: 10%; position:relative">
	<br>
	<div class="contenido">
		<div id="t1"><p>DOCUMENTO</p></div>
		<div id="t2"><p>TIPO</p></div>
		<div id="t3"><p>NOMBRES</p></div>
		<div id="t4"><p>APELLIDOS</p></div>
		<div id="t5"><p>CORREO ELECTRONICO</p></div>
		<div id="t6"><p>TELEFONO</p></div>
		<div id="t7"><p>DIRECCIÓN</p></div>
		<div id="t8"><p>CARGO</p></div>
		<div id="t9"><p>FECHA</p></div>
		<div id="t10"><p>REGISTRO</p></div>
		<div id="t11"><p>FECHA</p></div>
		<div id="t12"><p>ACTUALIZADO</p></div>
</body>
</html>
<table border="4" class="tabla">
<tbody>
	<br>
	<br>
<?php 
$select="SELECT * FROM usuarios INNER JOIN cargo ON usuarios.cargo_id=cargo.id_cargo";
$resultado=mysqli_query($conexion,$select);
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
		</td>
	</tr>
	</div>
<?php } ?>
</tbody>
</table>