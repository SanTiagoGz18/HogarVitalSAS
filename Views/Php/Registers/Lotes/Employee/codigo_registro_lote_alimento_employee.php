<?php
include("../../../../../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar - Hogar Vital</title>
	<link rel="stylesheet" type="text/css" href="../../../../css/estilo_registro.css">
	<link rel="icon" type="imagenes/png" href="../../../../imagenes/logo_icon.ico">
	<meta charset="utf-8">
</head>
<body>
<div class="contenido2">
<img src="../../../../imagenes/logo.jpeg" class="img">
<div  class="titulo"><h2>Registrar Lotes Alimentos</h2></div>
<form action="../../../../../Controller/Create/Employee/codigo_registro_lote_alimento_empleado.php" method="post">
	<b><label for="marca" id="lmarca">Nombre del lote: </label></b>
	<br>
	<input type="text" name="nombre_loteA" placeholder="Ingrese el nombre del lote..." id="imarca" required="">
	<br>
	<br>
	<br>
	<br>
	<input type="submit" value="Registrar" class="boton" name="enviar">
</form>
<center><a href="../../../Tables/Employee/pagina_tabla_lote_alimento_empleado.php"><input type="submit" value="Volver"  name="volver "class="boton2" style="margin-top:-6%"></a></center>
</div>
</body>
</html>