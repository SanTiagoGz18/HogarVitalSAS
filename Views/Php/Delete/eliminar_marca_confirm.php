<?php include ("../../../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eliminar Marcas - Hogar Vital</title>
    <link rel="stylesheet" href="../../css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="../../imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>Eliminar Marcas</h1>
      <form action="../../../Controller/Delete/Admin/eliminar_marca.php" method="post">
        <b><p>Confirme el codigo de la marca</p></b>
        <br>
        <br>
        <label for="marca">Codigo:</label>
        <input name="id_marca" type="text" placeholder="Ingrese el codigo de la marca" class="campos" required>
        <input name="eliminar" type="submit" value="Eliminar la marca" class="boton">
        </form>
        <a href="../Tables/Admin/pagina_tabla_marca.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>