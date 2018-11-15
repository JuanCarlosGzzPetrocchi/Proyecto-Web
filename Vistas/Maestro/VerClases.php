<?php include('verClaseLogic.php');?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ver Clases</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <center>
        <h3>Clases que imparte <?php echo $user; ?></h3>
        <table class="table">
            <tr>
                <th>Clase</th>
                <th>Horario</th> 
                <th>Salon</th> 
                <th>Maestro</th>
            </tr>
            <?php 
                foreach($resultado as $valor){
                    echo $valor;
                }  
            ?>
        </table>
        </center>
        

        <a href="../Maestro/agregarClase.php" type="button" class="btn btn-success">Agregar Clase</a><br>
        <a href="../Maestro/VistaPrincipalMaestro.php" type="button" class="btn btn-info">Regresar</a>

    </body>
</html>