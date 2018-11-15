<?php include('../../Controller/Maestro/modificarReporteLogic.php');?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Modificar Reporte</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Modificar Reporte</h3>
            <form method="post">
                <label>Descripcion de incidente</label>
                <input type="text" name="descripcion" placeholder="Descripcion del reporte" value="<?php echo $reporte['descripcion'];?>" required /><br>
             
                 <input type="submit" type="button" class="btn btn-success"  name="ModificarReporte" value="Modificar"/>
                 <a href="../Maestro/VerReportes.php" type="button" class="btn btn-info">Regresar</a>
            </form>
        </div>
    </center>
</body>
</html>