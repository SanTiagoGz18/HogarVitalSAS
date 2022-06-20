<?php include ("../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eliminar Proveedores - Hogar Vital</title>
    <link rel="stylesheet" href="../Views/css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>Eliminar Proveedores</h1>
      <form action="../Controller/eliminar_proveedor.php" method="post">
        <b><p>Confirme el codigo del proveedor</p></b>
        <br>
        <br>
        <label for="proveedor">Codigo:</label>
        <input name="id_proveedor" type="text" placeholder="Ingrese el codigo del proveedor" class="campos" required>
        <input name="eliminar" type="submit" value="Eliminar el proveedor" class="boton">
        </form>
        <a href="pagina_tabla_proveedor.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>