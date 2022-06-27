<?php
include("../../../../../Models/conexion.php");

if(isset($_POST['modificar'])){

    $id_loteA=$_POST['id_loteA'];

    $verificar_id_loteA=mysqli_query($conexion, "SELECT * FROM lote_alimento WHERE id_loteA='$id_loteA'");

	if(mysqli_num_rows($verificar_id_loteA)<1){
		header("location:../../../../Html/Verifications/VerificationsProducts/Employee/no_existe_modificar_lote_alimento_empleado.html");
		exit();
	}

    $resultado=mysqli_query($conexion, "SELECT * FROM lote_alimento WHERE id_loteA='$id_loteA'");
    $filas=mysqli_fetch_array($resultado);
        if($filas['id_loteA']==$id_loteA){?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Lote - Hogar Vital</title>
	 <link rel="stylesheet" href="../../../../css/estilo_pagina_editar_perfil.css">
    <link rel="icon" type="imagenes/png" href="../../../../imagenes/logo_icon.ico">
    <meta charset="utf-8">
</head>
<body>
<div class="perfilP">
	<div class="infoP"> 
		<div class="info2P">
		<form action="../../../../../Controller/Update/Employee/modificar_lote_alimento_empleado.php" method="post">
			<label for="id_marca">Codigo Lote: </label>
			<input type="text" name="id_loteA" class="inputIM" value="<?php echo $filas['id_loteA']?>">
			<br>
			<br>
			<br>
			<label for="nombre_marca">Nombre del lote: </label>
			<input type="text" name="nombre_loteA" class="inputLA" value="<?php echo $filas['nombre_loteA']?>">
			<input type="submit" name="modificado" value="Guardar" class="boton4P">
			</form>
			<a href="../../../Tables/Admin/pagina_tabla_lote_alimento.php"><input type="submit" value="Cancelar" class="boton3P"></a>
		</div>
	</div>
</div>
</body>
</html>
<table>
<tbody>
		   <tr class="perfil2P">
		    <td id="a1P" class="campo1P"><?php echo "Codigo: "; echo $filas['id_loteA']?></td>
		    <td id="a2P" class="campo2L"><?php echo "Nombre del lote: "; echo $filas['nombre_loteA']?></td>
		</tr>
<?php }} ?>
</tbody>
</table>