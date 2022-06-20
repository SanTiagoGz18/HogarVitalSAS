<?php include ("../../../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eliminar Personal - Hogar Vital</title>
    <link rel="stylesheet" href="../../css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="../../imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>Eliminar Personal</h1>
      <form action="../../../Controller/Delete/Admin/eliminar_personal.php" method="post">
        <b><p>Confirme el numero de documento</p></b>
        <br>
        <br>
        <label for="usuario">Documento:</label>
        <input name="id_usuario" type="text" placeholder="Ingrese el numero documento" class="campos" required>
        <input name="eliminar" type="submit" value="Eliminar el empleado" class="boton">
        </form>
        <a href="../Tables/Admin/pagina_tabla_empleado.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>