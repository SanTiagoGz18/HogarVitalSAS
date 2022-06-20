<?php
include("../../../../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar - Hogar Vital</title>
	<link rel="stylesheet" type="text/css" href="../../../css/estilo_registro.css">
	<link rel="icon" type="imagenes/png" href="../../../imagenes/logo_icon.ico">
	<meta charset="utf-8">
</head>
<body>
<div class="contenido">
<img src="../../../imagenes/logo.jpeg" class="img">
<div  class="titulo"><h2>Registrar administrador</h2></div>
<form action="../../../../Controller/Create/Admin/registro_administrador.php" method="post">
	<b><label for="tipo_documento">Documento: </label></b>
	<select id="opcion" name="tipo_documento">
		<option value="CC">Cedula de ciudadania</option>
		<option value="TI">Tarjeta de identidad</option>
		<option value="CE">Cedula de extranjeria</option>
		<option value="NIT">numero de identificacion tributaria</option>
	</select>
	<b><label for="id_usuario"  id="lnumero">Numero: </label></b>
	<input type="text" name="id_usuario" pattern="[0-9]{8-10}" minlength="6" maxlength="10" placeholder="Numero de documento..." id="idocumento" required="">
	<br>
	<br>
	<b><label for="nombre">Nombres Completos: </label></b>
	<b><label for="apellido" id="lapellidos">Apellidos completos: </label></b>
	<br>
	<input type="text" name="nombre_usuario" placeholder="Ingrese sus nombres completos..." id="inombres" required="">
	<input type="text" name="apellido_usuario" placeholder="Ingrese sus apellidos completos..." id="iapellidos" required="">
	<br>
	<br>
	<br>
	<b><label for="correo">Correo electronico: </label></b>
	<b><label for="contraseña" id="lcontraseña">Contraseña: </label></b>
	<br>
	<input type="email" name="correo" placeholder="example63@hotmail.com..." id="icorreo" required="@">
	<input type="password" name="contrasena" placeholder="Ingrese su contraseña..." id="icontraseña" required="">
	<br>
	<br>
	<br>
	<b><label for="telefono">Telefono/Celular: </label></b>
	<b><label for="direccion"  id="ldireccion">Direccion: </label></b>
	<br>
	<input type="tel" name="telefono" pattern="[0-9]{10}" placeholder="Ingrese su numero de contacto..." id="itelefono">
	<input type="text" name="direccion" placeholder="Ingrese su direccion..." id="idireccion">
	<br>
	<br>
	<br>
	<input type="submit" value="Registrar" class="boton" name="enviar2">
</form>
<center><a href="../../Tables/Admin/pagina_tabla_empleado.php"><input type="submit" value="Volver"  name="volver "class="boton2" style="margin-top:-6%"></a></center>
	
</div>
</body>
</html>