<?php include('claseAlumnoLogic.php');?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ver Clases</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    	<center>
            <h1>Clases que estas cursando</h1>

            <table class='table'>
                <tr>
                    <th>Clase</th>
                    <th>Horario</th> 
                    <th>Salon</th> 
                    <th>Maestro</th>
                    <th>Calificacion</th>
                </tr>
                <?php
                    foreach($resultado as $valor){
                        echo $valor;
                    }
                ?>
            </table>
    	</center>
        <a href="../Alumnos/VistaPrincipalEstudianteView.php" type="button" class="btn btn-info">Regresar</a>

    </body>
</html>