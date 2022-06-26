<?php
include("../../../../../Models/conexion.php");

if(isset($_POST['modificar'])){

    $id_producto=$_POST['id_producto'];

    $verificar_codigo=mysqli_query($conexion, "SELECT * FROM productos WHERE id_producto='$id_producto'");

		if(mysqli_num_rows($verificar_codigo)<1){
			header("location:../../../../Html/Verifications/VerificationsProducts/no_existe_modificar_producto.html");
			exit();
		}

    $resultado=mysqli_query($conexion, "SELECT * FROM ((((productos INNER JOIN categoria ON productos.categoria_id=categoria.id_categoria)INNER JOIN marca ON productos.marca_id=marca.id_marca)INNER JOIN proveedores_productos ON productos.id_producto=proveedores_productos.producto_id)INNER JOIN proveedores ON proveedores_productos.proveedor_id=proveedores.id_proveedor) WHERE id_producto='$id_producto'");
    $filas=mysqli_fetch_array($resultado);
        if($filas['id_producto']==$id_producto){?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Producto - Hogar Vital</title>
	 <link rel="stylesheet" href="../../../../css/estilo_pagina_editar_perfil.css">
    <link rel="icon" type="imagenes/png" href="../../../../imagenes/logo_icon.ico">
    <meta charset="utf-8">
</head>
<body>
<div class="perfil">
	<div class="info"> 
		<div class="info2">
		<form action="../../../../../Controller/Update/Admin/modificar_productos.php" method="post">
            <br>
            <br>
			<label for="documento">Codigo: </label>
			<input type="text" name="id_producto" class="input2P" value="<?php echo $filas['id_producto']?>" required>
			<br>
			<br>
			<br>
			<label for="nombre_producto">Nombre: </label>
			<input type="text" name="nombre_producto" class="inputNP" value="<?php echo $filas['nombre_producto']?>" required>
			<br>
			<br>
			<br>
			<label for="cantidad_producto">Cantidad: </label>
			<input type="text" name="cantidad_producto" class="inputCP" value="<?php echo $filas['cantidad_producto']?>" required>
			<br>
			<br>
			<br>
			<label for="">categoria: </label>
			<select name="categoria" class="inputCTP" required>
		        <option value="no"></option>
		        <?php
		        $resultado=mysqli_query($conexion,"SELECT * FROM categoria");
		        while($fila=mysqli_fetch_array($resultado)){?>
		        <option value="<?php echo $fila['id_categoria']?>"><?php echo $fila['nombre_categoria']?></option><?php
		        } ?>
	        </select>
			<br>
			<br>
			<br>
			<label for="">Marca: </label>
			<select name="marca" class="inputMP" required>
		        <option value="no"></option>
		        <?php
		        $resultado=mysqli_query($conexion,"SELECT * FROM marca");
		        while($fila=mysqli_fetch_array($resultado)){?>
		        <option value="<?php echo $fila['id_marca']?>"><?php echo $fila['nombre_marca']?></option><?php
		        } ?>
	        </select>
			<br>
			<br>
			<br>
			<label for="">Proveedor: </label>
			<select name="proveedor" class="inputPP" required>
		        <option value="no"></option>
		        <?php 
		        $resultado=mysqli_query($conexion,"SELECT * FROM proveedores");
		        while($fila=mysqli_fetch_array($resultado)){?>
		        <option value="<?php echo $fila['id_proveedor'] ?>"><?php echo $fila['nombre_proveedor']?></option>";
		        <?php
		        } ?>
	        </select>
			<input type="submit" name="modificado" value="Guardar" class="boton4">
			</form>
			<a href="../../../pagina_inicial_producto_director.php"><input type="submit" value="Cancelar" class="boton3"></a>
		</div>
	</div>
</div>
</body>
</html>
<table>
<tbody>
		   <tr class="perfil2">
		    <td id="a1PR" class="campo1"><?php echo "Codigo: "; echo $filas['id_producto']?></td>
		    <td id="a2PR" class="campo2"><?php echo "Nombre: "; echo $filas['nombre_producto']?></td>
		    <td id="a3PR" class="campo3"><?php echo "Cantidad: "; echo $filas['cantidad_producto']?></td>
		    <td id="a4PR" class="campo4"><?php echo "Categoria: "; echo $filas['nombre_categoria']?></td>
		    <td id="a5PR" class="campo5"><?php echo "Marca: "; echo $filas['nombre_marca']?></td>
		    <td id="a6PR" class="campo6"><?php echo "Proveedor: "; echo $filas['nombre_proveedor']?></td>
		</tr>
<?php }} ?>
</tbody>
</table>