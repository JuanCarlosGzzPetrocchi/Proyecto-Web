<?php

    session_start(); 
    $user = $_SESSION['usuarionombre'];

    if($_SESSION['usuarionombre']==''){
        header("Location: ../Maestro/loginMaestro.php");
    } 
    
    $con=mysqli_connect("localhost","root","root","escuela");

    include_once 'dbConnect.php';
    $id = $_GET['id']; //id de la clase
    $id2 = urlencode($id); //ide de la clase 
    $query = "SELECT unionClaseEstudiante.id as id,clase.nombre AS clase, estudiante.nombre AS estudiante, unionClaseEstudiante.calificacion AS calificacion FROM clase JOIN unionClaseEstudiante ON clase.id = unionClaseEstudiante.claseid JOIN estudiante ON estudiante.id = unionClaseEstudiante.estudianteid WHERE clase.id= $id";

    $response = mysqli_query($con, $query);

    $resultado = array();
    $i = 0;

    while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
        $clasenombre= $row['clase'];
        $send = urlencode($row['id']);
        $resultado[$i] = "<tr>" . 
                "<td>" . $row['estudiante'] . "</td>" .
                "<td>" . $row['calificacion'] . "</td>" . 
                "<td> <a href='../Maestro/cambiarCalificacion.php?id=$send' type='button' class='btn btn-primary'>Cambiar calificacion</a> </td>" . 
                "<td> <a href='../../dataAccess/quitarEstudiante.php?id=$send' type='button' class='btn btn-danger'>Eliminar estudiante</a> </td>" . 
             "</tr>";

        $i = $i + 1;
    }

    $buttons = "<a href='../Maestro/agregarEstudianteaClase.php?id=$id2' type='button' class='btn btn-success' >Agregar estudiante a esta clase</a>
                <a href='../Maestro/VerClases.php?id=$id' type='button' class='btn btn-info'>Regresar</a>";
?>