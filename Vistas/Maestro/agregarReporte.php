<?php include('../../Controller/Maestro/agregarReporteLogic.php');?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>RegistrarReporte</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Registro de Reporte</h3>

            <form method='post'>
            <label>Nombre del estudiante: </label><br>
            <select id='reporte' name='Estudiante'>
            <?php 
                foreach($resultado as $valor){
                    echo $valor;
                }  
            ?>
            </select> <br>
            <label>Descripcion del incidente: </label><br>
            <textarea id='desc' name='Descripcion' placeholder='Descripcion del reporte' required/> </textarea><br>
            <input type='submit' type='button' class='btn btn-success'  name='RegistrarReporte' value='Agregar'/>
            <a href="../Maestro/VerReportes.php" type="button" class="btn btn-info">Regresar</a>
            </form>   
        </div>
    </center>
</body>
</html>