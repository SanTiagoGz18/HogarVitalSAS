<?php
include("../Models/conexion.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Perfil - Hogar Vital</title>
	 <link rel="stylesheet" href="../Views/css/estilo_pagina_perfil.css">
    <link rel="icon" type="imagenes/png" href="../Views/imagenes/logo_icon.ico">
    <meta charset="utf-8">
</head>
<body>
<div class="perfil">
	<div class="info"></div>
	<div class="boy"><a href="pagina_editar_perfil.php"><input type="submit" value="Editar Perfil" class="boton3"></a></div>
	<div class="boy2"><a href="../Views/Html/pagina_inicial.html"><input type="submit" value="Volver al Inicio" class="boton3"></a></div>
</div>

</body>
</html>
<table>
<tbody>
<?php

$correo=$_SESSION['correo'];
	$select="SELECT * FROM usuarios where correo='$correo'";
	$resultado=mysqli_query($conexion,$select);
	$filas=mysqli_fetch_array($resultado);
	if($filas['correo']==$correo){?>
		<tr class="perfil2">
			<td id="a1" class="campo1"><?php echo "Documento: "; echo $filas['id_usuario']?></td>
			<td id="a2" class="campo2"><?php echo "Tipo de documento: "; echo $filas['tipo_documento']?></td>
			<td id="a3" class="campo3"><?php echo "Nombres: "; echo $filas['nombre_usuario']?></td>
			<td id="a4" class="campo4"><?php echo "Apellidos: "; echo $filas['apellido_usuario']?></td>
			<td id="a5" class="campo5"><?php echo "correo: "; echo $filas['correo']?></td>
			<td id="a6" class="campo6"><?php echo "telefono/Celular: "; echo $filas['telefono']?></td>
			<td id="a7" class="campo7"><?php echo "dirección: "; echo $filas['direccion']?></td>
			<td id="a8" class="campo8">cargo: Administrador</td>
		</tr>
<?php } ?>
</tbody>
</table>