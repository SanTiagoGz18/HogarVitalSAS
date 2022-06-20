<?php
include("../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar - Hogar Vital</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_registro.css">
	<link rel="icon" type="imagenes/png" href="../Views/imagenes/logo_icon.ico">
	<meta charset="utf-8">
</head>
<body>
<div class="contenido2">
<img src="../Views/imagenes/logo.jpeg" class="img">
<div  class="titulo"><h2>Registrar Marcas</h2></div>
<form action="../Controller/registro_marca.php" method="post">
	<b><label for="marca" id="lmarca">Nombre de la marca: </label></b>
	<br>
	<input type="text" name="nombre_marca" placeholder="Ingrese el nombre de la marca..." id="imarca" required="">
	<br>
	<br>
	<br>
	<br>
	<input type="submit" value="Registrar" class="boton" name="enviar">
</form>
<center><a href="../Views/pagina_tabla_marca.php"><input type="submit" value="Volver"  name="volver "class="boton2" style="margin-top:-6%"></a></center>
<?php
include("../Controller/registro_marca.php");
?>
</div>
</body>
</html>