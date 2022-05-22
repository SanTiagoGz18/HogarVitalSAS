<?php
include("../Models/conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buscador producto - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_pagina_inicial_buscador.css">
	<link rel="icon" type="imagenes/logo.png" href="imagenes/logo_icon.ico">
</head>
<body>
	<h1 id="titulo">Buscador de productos</h1>
	<hr width="50%" size="5" color="white" style="position:relative; margin-left: 25%;">
	<form action="pagina_inicial_buscador_producto.php" method="post">
		<div class="contenido">
			<div class="contenido2">
				<input type="text" name="busqueda" class="buscar" placeholder="Ingrese el producto a buscar...">
				<div class="botona">
					<div class="botonao">
						<a href=""><input type="image" name="enviar" id="boton" src="imagenes/lupa.png"></a>
					</div>
				</div>
			</div>
		</div>
	</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<div class="contenido3">
<br>
<br>
<br>
	<div id="t1"><p>CODIGO</p></div>
	<div id="t2"><p>NOMBRE</p></div>
	<div id="t3"><p>CANTIDAD</p></div>
	<div id="t4"><p>DETALLES</p></div>
<table border="4" class="tabla">
	<div class="icono">
	<a href="../Views/Html/pagina_buscador_productos_director.html"><input type="image" id="home" alt="Volver" src="imagenes/home.png"></a><i class="fab fa-Volver"></i>
	<span>Volver</span>
</div>
</body>
</html>
<tbody>
<?php

if(isset($_POST['busqueda'])){
	$busqueda=$_POST['busqueda'];
	$resultado=mysqli_query($conexion,"SELECT * FROM productos WHERE nombre_producto LIKE '%$busqueda%'");
	
	while($fila=mysqli_fetch_array($resultado)){
		
		$id = $fila['id_producto'];
		$nombre  = $fila['nombre_producto'];
		$cantidad = $fila['cantidad_producto'];

		?>
		<tr>
			<td><?php echo $id?> </td>
			<td><?php echo $nombre?></td>
			<td><?php echo $cantidad?></td>
				<td><a href="../Views/Html/pagina_productos_detalle.html"><img src="imagenes/detalles.png" alt="detalles" class="boton"></a></td>
		</tr>
		<div class="icono">
			<a href="../Views/Html/pagina_buscador_productos_director.html"><input type="image" id="home" alt="Volver" src="imagenes/home.png"></a><i class="fab fa-Volver"></i>
			<span>Volver</span>
		</div>
	</div>
	</div>
<?php }} ?>
</tbody>
</table>