<?php include ("../../../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eliminar Lotes - Hogar Vital</title>
    <link rel="stylesheet" href="../../css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="../../imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>Eliminar Lotes</h1>
      <form action="../../../Controller/Delete/Admin/eliminar_lote_alimento.php" method="post">
        <b><p>Confirme el codigo del lote</p></b>
        <br>
        <br>
        <label for="">Codigo:</label>
        <input name="id_loteA" type="text" placeholder="Ingrese el codigo del lote" class="campos" required>
        <input name="eliminar" type="submit" value="Eliminar el lote" class="boton">
        </form>
        <a href="../Tables/Admin/pagina_tabla_lote_alimento.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>