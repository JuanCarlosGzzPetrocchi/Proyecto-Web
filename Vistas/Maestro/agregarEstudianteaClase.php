<?php include('../../Controller/Maestro/agregarEstudianteaClaseLogic.php');?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Agregar estudiante</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Agregar estudiante</h3>

            <form method='post'>
                <label>Nombre:</label> <br>
                <select id='estudiante' name='estudiante'>
                <?php 
                    foreach($resultado as $valor){
                        echo $valor;
                    }  
                ?>
                </select> <br>
                <label>Calificacion:</label> <br>
                <input type='text' name='calificacion' placeholder='Calificacion' required /> </br>
                <input type='submit' type='button' class='btn btn-success' name='AgregarEstudiante' value='Agregar'/>
                <?php
                    echo $button;
                ?>
            </form>
        </div>
    </center>
</body>
</html>