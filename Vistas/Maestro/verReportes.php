<?php include('verReportesLogic.php');?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Index</title>
        
    </head>
    <body>
        <table>
            <tr>
                <th>Descripcion</th>
                <th>Maestro</th>
                <th>Estudiante</th> 
            </tr>
            <tr>
                <td><?php echo $descripcion ?></td>
                <td><?php echo $maestro ?></td>
                <td><?php echo $estudiante ?></td>
                <td><a href='../Maestro/modificarReporte.php?id=$send'>Modificar</a></td>
                <td><a href='../dataAccess/borrarreporte.php?id=$send'>Borrar</a></td>
                <td></td>
            </tr>
        </table>
        <a href="../Maestro/agregarreporte.php">Agregar Reporte</a><br>
        <a href="../Maestro/VistaPrincipalMaestro.php">Regresar</a>
    </body>
</html>