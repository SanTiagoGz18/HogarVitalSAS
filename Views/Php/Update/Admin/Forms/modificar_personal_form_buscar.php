<?php
include("../../../../../Models/conexion.php");

if(isset($_POST['modificar'])){

    $id_usuario=$_POST['id_usuario'];

    $verificar_documento=mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");

		if(mysqli_num_rows($verificar_documento)<1){
			header("location:../Views/Html/no_existe_modificar_buscar.html");
			exit();
		}

    $resultado=mysqli_query($conexion, "SELECT * FROM usuarios inner join cargo on usuarios.cargo_id=cargo.id_cargo where id_usuario='$id_usuario'");
    $filas=mysqli_fetch_array($resultado);
        if($filas['id_usuario']==$id_usuario){?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Personal - Hogar Vital</title>
	 <link rel="stylesheet" href="../../../../css/estilo_pagina_editar_perfil.css">
    <link rel="icon" type="imagenes/png" href="../../../../imagenes/logo_icon.ico">
    <meta charset="utf-8">
</head>
<body>
<div class="perfil">
	<div class="info"> 
		<div class="info2">
		<form action="../../../../../Controller/Update/Admin/modificar_personal_buscar.php" method="post">
			<label for="documento">Numero Documento: </label>
			<input type="text" name="id_usuario" class="input" value="<?php echo $filas['id_usuario']?>">
			<br>
			<br>
			<br>
			<label for="tipo_documento">Tipo de Documento: </label>
			<input type="text" name="tipo_documento" class="input4" value="<?php echo $filas['tipo_documento']?>" disabled>
			<br>
			<br>
			<br>
			<label for="nombre">Nombres Completos: </label>
			<input type="text" name="nombre_usuario" class="input2" value="<?php echo $filas['nombre_usuario']?>">
			<br>
			<br>
			<br>
			<label for="apellido">Apellidos Completos: </label>
			<input type="text" name="apellido_usuario" class="input2" value="<?php echo $filas['apellido_usuario']?>">
			<br>
			<br>
			<br>
			<label for="Correo electronico">Correo electronico: </label>
			<input type="text" name="correo" class="input5" value="<?php echo $filas['correo']?>" disabled>
			<br>
			<br>
			<br>
			<label for="telefono">Telefono/Celular: </label>
			<input type="text" name="telefono" class="input5" value="<?php echo $filas['telefono']?>" pattern="[0-9]{10}">
			<br>
			<br>
			<br>
			<label for="direccion" class="ldireccion">Dirección: </label>
			<input type="text" name="direccion" class="input5" value="<?php echo $filas['direccion']?>">
			<input type="submit" name="modificado" value="Guardar" class="boton4">
			</form>
			<a href="../../../Search/Admin/pagina_inicial_buscador_empleado.php"><input type="submit" value="Cancelar" class="boton3"></a>
		</div>
	</div>
</div>
</body>
</html>
<table>
<tbody>
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
<?php }} ?>
</tbody>
</table>