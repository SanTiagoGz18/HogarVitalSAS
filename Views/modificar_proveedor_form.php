<?php
include("../Models/conexion.php");

if(isset($_POST['modificar'])){

    $id_proveedor=$_POST['id_proveedor'];

    $verificar_id_proveedor=mysqli_query($conexion, "SELECT * FROM proveedores WHERE id_proveedor='$id_proveedor'");

	if(mysqli_num_rows($verificar_id_proveedor)<1){
		header("location:../Views/Html/no_existe_modificar.html");
		exit();
	}

    $resultado=mysqli_query($conexion, "SELECT * FROM proveedores WHERE id_proveedor='$id_proveedor'");
    $filas=mysqli_fetch_array($resultado);
        if($filas['id_proveedor']==$id_proveedor){?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Proveedor - Hogar Vital</title>
	 <link rel="stylesheet" href="css/estilo_pagina_editar_perfil.css">
    <link rel="icon" type="imagenes/png" href="imagenes/logo_icon.ico">
    <meta charset="utf-8">
</head>
<body>
<div class="perfilP">
	<div class="infoP"> 
		<div class="info2P">
		<form action="../Controller/modificar_proveedor.php" method="post">
			<label for="id_proveedor">Codigo Proveedor: </label>
			<input type="text" name="id_proveedor" class="input" value="<?php echo $filas['id_proveedor']?>">
			<br>
			<br>
			<br>
			<label for="nombre_proveedor">Nombre del proveedor: </label>
			<input type="text" name="nombre_proveedor" class="input4P" value="<?php echo $filas['nombre_proveedor']?>">
			<input type="submit" name="modificado" value="Guardar" class="boton4P">
			</form>
			<a href="../Views/pagina_tabla_proveedor.php"><input type="submit" value="Cancelar" class="boton3P"></a>
		</div>
	</div>
</div>
</body>
</html>
<table>
<tbody>
		   <tr class="perfil2P">
		    <td id="a1P" class="campo1P"><?php echo "Codigo: "; echo $filas['id_proveedor']?></td>
		    <td id="a2P" class="campo2P"><?php echo "Nombre del proveedor: "; echo $filas['nombre_proveedor']?></td>
		</tr>
<?php }} ?>
</tbody>
</table>