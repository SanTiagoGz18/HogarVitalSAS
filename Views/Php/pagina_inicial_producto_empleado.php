<?php
include("../../Models/conexion.php");



?>




<!DOCTYPE html>
<html>
  <head>
    <title>Productos Empleado - Hogar Vital</title>
    <meta charset="utf-8" />
    <link rel="icon" type="imagenes/png" href="../imagenes/logo_icon.ico" />
    <link
      rel="stylesheet"
      type="text/css"
      href="../css/estilo_index_productos.css"
    />
  </head>
  <body>
    <div>
      <img src="../imagenes/agregar.png" class="imgp" />
      <a href="../Php/Registers/Products/pagina_formulario_productos_empleado.php"
        ><input type="submit" id="boton3" value="Agregar Productos"
      /></a>
      <img src="../imagenes/stock.png" id="imgS" />
    </div>
    <div class="stock">
      <h3 class="lstock">STOCK:</h3>
      <h3 class="nstock"><?php 
$select="SELECT sum(productos.cantidad_producto) FROM productos;";
$resultado=mysqli_query($conexion,$select);
$fila=mysqli_fetch_array($resultado);
echo $fila[0];?></h3>
      <a href="../Php/Tables/Employee/pagina_tabla_stock_empleado.php"><input type="submit" value="Ver" id="botonS"
      /></a>
    </div>
    <div class="Medicamentos">
      <img src="../imagenes/medicamento.png" id="img" />
      <br />
      <br />
      <a href="../Php/Tables/Employee/pagina_tabla_medicamentos_empleado.php"
        ><input type="submit" value="Medicamentos" id="boton"
      /></a>
    </div>
    <div class="lavanderia">
      <img src="../imagenes/lavanderia.png" id="img2" />
      <br />
      <br />
      <a href="../Php/Tables/Employee/pagina_tabla_lavanderia_empleado.php"
        ><input type="submit" value="Lavanderia" id="boton2"
      /></a>
    </div>
    <div class="aseo">
      <img src="../imagenes/aseo.png" id="img2" />
      <br />
      <br />
      <a href="../Php/Tables/Employee/pagina_tabla_aseo_empleado.php"
        ><input type="submit" value="Aseo" id="boton2"
      /></a>
    </div>
    <div class="comida">
      <img src="../imagenes/comida.png" id="img" />
      <br />
      <br />
      <a href="../Php/Tables/Employee/pagina_tabla_comida_empleado.php"
        ><input type="submit" value="Comida" id="boton"
      /></a>
    </div>
    <div class="oficina">
      <img src="../imagenes/oficina.png" id="img" />
      <br />
      <br />
      <a href="../Php/Tables/Employee/pagina_tabla_oficina_empleado.php"
        ><input type="submit" value="Oficina" id="boton"
      /></a>
    </div>
    <div class="enseres">
      <img src="../imagenes/enseres.png" id="img" />
      <br />
      <br />
      <a href="../Php/Tables/Employee/pagina_tabla_enseres_empleado.php"
        ><input type="submit" value="Enseres" id="boton"
      /></a>
    </div>

    <div class="icono">
      <a href="../Html/pagina_inicial_empleado.html"
        ><input
          type="image"
          id="home"
          alt="Volver"
          src="../imagenes/home.png" /></a
      ><i class="fab fa-Volver"></i>
      <span>Volver</span>
    </div>
  </body>
</html>
