<?php
include("../../../../../Models/conexion.php");

if(isset($_POST['modificar'])){

    $id_loteM=$_POST['id_loteM'];

    $verificar_id_loteM=mysqli_query($conexion, "SELECT * FROM lote_medicamento WHERE id_loteM='$id_loteM'");

	if(mysqli_num_rows($verificar_id_loteM)<1){
		header("location:../../../../Html/Verifications/VerificationsProducts/no_existe_modificar_lote_medicamento.html");
		exit();
	}

    $resultado=mysqli_query($conexion, "SELECT * FROM lote_medicamento WHERE id_loteM='$id_loteM'");
    $filas=mysqli_fetch_array($resultado);
        if($filas['id_loteM']==$id_loteM){?>

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
		<form action="../../../../../Controller/Update/Employee/modificar_lote_medicamento_empleado.php" method="post">
			<label for="id_marca">Codigo Lote: </label>
			<input type="text" name="id_loteM" class="inputIM" value="<?php echo $filas['id_loteM']?>">
			<br>
			<br>
			<br>
			<label for="">Nombre del lote: </label>
			<input type="text" name="nombre_loteM" class="inputLM" value="<?php echo $filas['nombre_loteM']?>">
			<input type="submit" name="modificado" value="Guardar" class="boton4P">
			</form>
			<a href="../../../Tables/Employee/pagina_tabla_lote_medicamento_empleado.php"><input type="submit" value="Cancelar" class="boton3P"></a>
		</div>
	</div>
</div>
</body>
</html>
<table>
<tbody>
		   <tr class="perfil2P">
		    <td id="a1P" class="campo1P"><?php echo "Codigo: "; echo $filas['id_loteM']?></td>
		    <td id="a2P" class="campo2L"><?php echo "Nombre del lote: "; echo $filas['nombre_loteM']?></td>
		</tr>
<?php }} ?>
</tbody>
</table>