<?php
include("../../../../Models/conexion.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Perfil - Hogar Vital</title>
	 <link rel="stylesheet" href="../../../css/estilo_pagina_perfil.css">
    <link rel="icon" type="imagenes/png" href="../../../imagenes/logo_icon.ico">
    <meta charset="utf-8">
</head>
<body>
<div class="perfil">
	<div class="info"></div>
	<div class="boy"><a href="../Employee/pagina_editar_perfil_empleado.php"><input type="submit" value="Editar Perfil" class="boton3"></a></div>
	<div class="boy2"><a href="../../../Html/pagina_inicial_empleado.html"><input type="submit" value="Volver al Inicio" class="boton3"></a></div>
</div>
</div>
</body>
</html>
<table>
<tbody>
<?php

$correo=$_SESSION['correo'];
$select="SELECT * FROM usuarios inner join cargo on usuarios.cargo_id=cargo.id_cargo where correo='$correo'";
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
			<td id="a8" class="campo8"><?php echo "cargo: "; echo $filas['nombre_cargo']?></td>
		</tr>
<?php } ?>
</tbody>
</table>