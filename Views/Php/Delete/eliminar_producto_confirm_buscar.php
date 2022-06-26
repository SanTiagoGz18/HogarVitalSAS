<?php include ("../../../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eliminar Productos - Hogar Vital</title>
    <link rel="stylesheet" href="../../css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="../../imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>Eliminar Productos</h1>
      <form action="../../../Controller/Delete/Admin/eliminar_producto_buscar.php" method="post">
        <b><p>Confirme el codigo del productos</p></b>
        <br>
        <br>
        <label for="">Codigo:</label>
        <input name="id_producto" type="text" placeholder="Ingrese el codigo del producto" class="campos" required>
        <input name="eliminar" type="submit" value="Eliminar el producto" class="boton">
        </form>
        <a href="../Search/Admin/pagina_inicial_buscador_producto.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>