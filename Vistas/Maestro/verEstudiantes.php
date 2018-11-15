<?php include('../../Controller/Maestro/verEstudiantesLogic.php');?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login Maestro</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <center>
            <div id="signup">       
                <h3>Estudiantes en clase de: <?php echo $clasenombre;?></h3>
            
            
            </div>
            <table class='table'>
                <tr>
                    <th>Estudiante</th> 
                    <th>Promedio</th> 
                </tr>
                <?php
                    foreach($resultado as $valor){
                        echo $valor;
                    }
                ?>
            </table>
                <?php echo $buttons; ?>
        </center>
    </body>
</html>