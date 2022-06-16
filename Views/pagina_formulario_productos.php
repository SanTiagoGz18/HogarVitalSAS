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
	<b><label for="">* Codigo del Producto: </label></b>
	<b><label for="" id="lnombre">* Nombre del Producto: </label></b>
	<br>
	<input type="text" name="id_producto" placeholder="Ingrese el codigo del producto..." class="icodigo" required="">
	<input type="text" name="nombre_producto" placeholder="Ingrese el nombre del producto..." class="inombre" required="">
	<br>
	<br>
	<br>
	<b><label for="">* Cantidad Productos: </label></b>
	<b><label for="" id="lfechaven">Fecha Vencimiento: </label></b>
	<br>
	<input type="text" name="cantidad_producto" placeholder="Ingrese la cantidad de productos..." class="icantidad" required="">
	<input type="date" name="fecha_vencimiento" id="ifechaven">
	<br>
	<br>
	<br>
	<b><label for=""> * Fecha Recepción: </label></b>
	<b><label for="" id="lmarca">* Marca: </label></b>
	<br>
	<input type="date" name="fecha_vencimiento" id="ifecharec" required="">
	<select name="marca" id="imarca" required>
	<?php 
	$marca="SELECT * FROM marca";
	$resultado=mysqli_query($conexion,$marca);
	while($fila=mysqli_fetch_array($resultado)){
		echo "<option value='nombre_marca'>".$fila['nombre_marca']."</option>";
	} ?>
	</select>
	<br>
	<br>
	<br>
	<b><label for="">* Proveedor: </label></b>
	<b><label id="lcategoria">* Categoria: </label></b>
	<br>
	<select name="nombre_proveedor" id="opcion2" required>
	<?php 
	$marca="SELECT * FROM proveedores";
	$resultado=mysqli_query($conexion,$marca);
	while($fila=mysqli_fetch_array($resultado)){
		echo "<option value='nombre_proveedor'>".$fila['nombre_proveedor']."</option>";
	} ?>
	</select>
	<select id="opcion" name="categoria" required>
        <option value="enseres">Enseres</option>
		<option value="medicamentos">Medicamentos</option>
		<option value="lavanderia">Lavanderia</option>
		<option value="oficina">Oficina</option>
        <option value="aseo">Aseo</option>
		<option value="comida">Alimento</option>
    </select>
    <br>
    <br>
	<br>
	<b><label for="">Lote Alimento: </label></b>
	<b><label id="llotem">Lote Medicamento: </label></b>
	<br>
	<select name="loteA" id="opcion3">
		<option value="nombre_loteA">No Aplica</option>
		<?php 
		$marca="SELECT * FROM lote_alimento";
		$resultado=mysqli_query($conexion,$marca);
		while($fila=mysqli_fetch_array($resultado)){
		echo "<option value='nombre_loteA'>".$fila['nombre_loteA']."</option>";
		} ?>
	</select>
	<select name="loteM" id="opcion4">
		<option value="nombre_loteM">No Aplica</option>
		<?php
		$marca="SELECT * FROM lote_medicamento";
		$resultado=mysqli_query($conexion,$marca);
		while($fila=mysqli_fetch_array($resultado)){
		echo "<option value='nombre_loteM'>".$fila['nombre_loteM']."</option>";
		} ?>
	</select>
	<input name="enviar" type="submit" value="Agregar producto" class="boton">
</form>
	<a href="../Views/Html/pagina_inicial_producto_director.html"><input type="submit" value="Volver" class="boton2"></a>
</div>
</body>
</html>