<?php include ("../../../../../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar producto - Hogar Vital</title>
    <link rel="stylesheet" href="../../../../css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="../../../../imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>Modificación de Productos</h1>
      <form action="../Forms/modificar_producto_form.php" method="post">
        <b><p>Confirme el codigo del producto</p></b>
        <br>
        <br>
        <label for="usuario">Codigo:</label>
        <input name="id_producto" type="text" placeholder="Ingrese el codigo del producto" class="campos" required>
        <input name="modificar" type="submit" value="Modificar el producto" class="boton">
        </form>
        <br>
        <a href="../../../pagina_inicial_producto_director.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>