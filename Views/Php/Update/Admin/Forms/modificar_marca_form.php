<?php
include("../../../../../Models/conexion.php");

if(isset($_POST['modificar'])){

    $id_marca=$_POST['id_marca'];

    $verificar_id_marca=mysqli_query($conexion, "SELECT * FROM marca WHERE id_marca='$id_marca'");

	if(mysqli_num_rows($verificar_id_marca)<1){
		header("location:../../../../Html/Verifications/VerificationsProducts/no_existe_modificar_marca.html");
		exit();
	}

    $resultado=mysqli_query($conexion, "SELECT * FROM marca WHERE id_marca='$id_marca'");
    $filas=mysqli_fetch_array($resultado);
        if($filas['id_marca']==$id_marca){?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Marca - Hogar Vital</title>
	 <link rel="stylesheet" href="../../../../css/estilo_pagina_editar_perfil.css">
    <link rel="icon" type="imagenes/png" href="../../../../imagenes/logo_icon.ico">
    <meta charset="utf-8">
</head>
<body>
<div class="perfilP">
	<div class="infoP"> 
		<div class="info2P">
		<form action="../../../../../Controller/Update/Admin/modificar_marca.php" method="post">
			<label for="id_marca">Codigo Marca: </label>
			<input type="text" name="id_marca" class="inputIM" value="<?php echo $filas['id_marca']?>">
			<br>
			<br>
			<br>
			<label for="nombre_marca">Nombre de la marca: </label>
			<input type="text" name="nombre_marca" class="inputNM" value="<?php echo $filas['nombre_marca']?>">
			<input type="submit" name="modificado" value="Guardar" class="boton4P">
			</form>
			<a href="../../../Tables/Admin/pagina_tabla_marca.php"><input type="submit" value="Cancelar" class="boton3P"></a>
		</div>
	</div>
</div>
</body>
</html>
<table>
<tbody>
		   <tr class="perfil2P">
		    <td id="a1P" class="campo1P"><?php echo "Codigo: "; echo $filas['id_marca']?></td>
		    <td id="a2P" class="campo2P"><?php echo "Nombre de la marca: "; echo $filas['nombre_marca']?></td>
		</tr>
<?php }} ?>
</tbody>
</table>