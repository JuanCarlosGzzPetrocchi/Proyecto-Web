<?php include('../../Controller/Maestro/verReportesLogic.php');?>

<!DOCTYPE html">
<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="../../css/css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
  </head>
  <body>

    <center>
      <h1>Reportes</h1>
      <table class="table">
      <tr>
        <th>Descripcion</th>
        <th>Estudiante</th> 
      </tr>
      <tr>
          <?php
              foreach($resultado as $valor){
                echo $valor;
              }
          ?>
      </tr>
    </table>

    </center>

    

    <a href="../Maestro/agregarReporte.php" type="button" class="btn btn-success">Agregar Reporte</a><br>
    <a href="../Maestro/VistaPrincipalMaestro.php" type="button" class="btn btn-info">Regresar</a>

  </body>
</html>