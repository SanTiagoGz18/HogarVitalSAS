<?php
include("../Models/conexion.php");
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
	<img src="../Views/imagenes/perfil.png" id="img1">
</div>
<div class="perfil1">
	<div class="info"></div>
	<div class="boy"><a href="pagina_editar_perfil_tabla_empleado.php"><input type="submit" value="Editar Perfil" class="boton3"></a></div>
	<div class="icono">
			<a href="../Views/pagina_tabla_empleado.php"><input type="image" id="home" alt="Volver" src="imagenes/home.png"></a><i class="fab fa-Volver"></i>
			<span>Volver</span>
		</div>
</div>
</body>
</html>
<table>
<tbody>
<?php
	$select="SELECT * FROM usuarios";
	$resultado=mysqli_query($conexion,$select);
	$filas=mysqli_fetch_array($resultado);?>
		
		<tr class="perfil2">
			<td id="a1" class="campo1"><?php echo "Documento: "; echo $filas['id_usuario']?></td>
			<td id="a2" class="campo2"><?php echo "Tipo: "; echo $filas['tipo_documento']?></td>
			<td id="a3" class="campo3"><?php echo "Nombres: "; echo $filas['nombre_usuario']?></td>
			<td id="a4" class="campo4"><?php echo "Apellidos: "; echo $filas['apellido_usuario']?></td>
			<td id="a5" class="campo5"><?php echo "correo: "; echo $filas['correo']?></td>
			<td id="a6" class="campo6"><?php echo "telefono: "; echo $filas['telefono']?></td>
			<td id="a7" class="campo7"><?php echo "dirección: "; echo $filas['direccion']?></td>
		</tr>
</tbody>
</table>