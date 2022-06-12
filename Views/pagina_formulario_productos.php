<?php 
include ("../Models/conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Agregados - Hogar Vital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_pagina_formulario_productos.css">
	<link rel="icon" type="imagenes/logo.png" href="imagenes/logo_icon.ico">
</head>
<body>
<div class="contenido">
<img src="imagenes/logo.jpeg" class="img">
<div  class="titulo"><h2>Registro de productos</h2></div>
<form action="../Controller/codigo_registro_productos.php" method="post">
	<b><label for="">Codigo del producto: </label></b>
	<br>
	<input type="text" name="id_producto" placeholder="Ingrese el codigo del producto..." class="input" required="">
	<br>
	<br>
	<b><label for="">Nombre del producto: </label></b>
	<br>
	<input type="text" name="nombre_producto" placeholder="Ingrese el nombre del producto..." class="input" required="">
	<br>
	<br>
	<b><label for="">Cantidad productos: </label></b>
	<br>
	<input type="text" name="cantidad_producto" placeholder="Ingrese la cantidad de productos..." class="input" required="">
	<br>
	<br>
	<b><label for="">Fecha ingreso: </label></b>
	<b><label for="" id="lfecha">Fecha Vencimiento: </label></b>
	<br>
	<input type="date" name="fecha_ingreso" id="ifechain" class="input" required="">
	<input type="date" name="fecha_vencimiento" id="ifechaven" class="input">
	<br>
	<br>
	<b><label for="">Precio: </label></b>
	<br>
	<input type="text" name="precio_producto" placeholder="Ingrese el precio del productos..." class="input" required="">
	<br>
	<br>
	<b><label for="">Marca: </label></b>
	<b><label id="lcategoria">Categoria: </label></b>
	<br>
	<select name="marca" id="opcion2">
	<?php 
	$marca="SELECT * FROM marca";
	$resultado=mysqli_query($conexion,$marca);
	while($fila=mysqli_fetch_array($resultado)){
		echo "<option value='nombre_marca'>".$fila['nombre_marca']."</option>";
	} ?>
	</select>
	<select id="opcion" name="tipo_producto">
        <option value="enseres">Enseres</option>
		<option value="medicamentos">Medicamentos</option>
		<option value="lavanderia">Lavanderia</option>
		<option value="oficina">Oficina</option>
        <option value="aseo">Aseo</option>
		<option value="comida">Comida</option>
    </select>
    <br>
    <br>
	<input name="enviar" type="submit" value="Agregar producto" class="boton">
</form>
	<a href="../Views/Html/pagina_inicial_producto_director.html"><input type="submit" value="Volver" class="boton2"></a>
</div>
</body>
</html>