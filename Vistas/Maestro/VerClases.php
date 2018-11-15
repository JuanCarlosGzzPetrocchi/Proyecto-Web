<?php include('verClaseLogic.php');?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ver Clases</title>
        
    </head>
    <body>
        
        <h3>Bienvenido Profesor <?php echo $user; ?></h3>
        
        <table>
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

        <a href="../Maestro/agregarClase.php">Agregar Clase</a><br>
        <a href="../Maestro/VistaPrincipalMaestro.php">Regresar</a>

    </body>
</html>