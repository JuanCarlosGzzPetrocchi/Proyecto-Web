<?php
    $con=mysqli_connect("localhost","root","root","escuela");
    include_once 'dbConnect.php';
    session_start(); 
    if($_SESSION['usuarionombre']==''){
        header("Location: ../Maestro/loginMaestro.php");
    }

    $masid= $_SESSION['usuarioid'];
    $user = $_SESSION['usuarionombre']; 
    $query = "SELECT * FROM clase WHERE maestroid= $masid";
    $response = mysqli_query($con, $query);

    $resultado = array();
    $i = 0;


    while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
        $id= $row['id'];
        $query2 ="SELECT COUNT(clase.id) as count FROM clase JOIN unionClaseEstudiante ON clase.id=unionClaseEstudiante.claseid WHERE clase.id = $id";
        $response2 = mysqli_query($con, $query2);
        $numEstudiantes = mysqli_fetch_assoc($response2);

        $send = urlencode($row['id']);
        $resultado[$i] = "<tr>" . 
                "<td name='nombre'>" . $row['nombre'] . "</td>" . 
                "<td name='horario'>" . $row['horario'] . "</td>" . 
                "<td ='salon'>" . $row['salon'] ."</td>" . 
                "<td>" . $numEstudiantes['count'] . "</td>" . 
                "<td> <a href='../Maestro/verEstudiantes.php?id=$send' type='button' class='btn btn-info'> Ver Estudiantes </a> </td>" . 
                "<td> <a href='../Maestro/modificarClase.php?id=$send' type='button' class='btn btn-warning'> Modificar </a> </td>" . 
                "<td> <a href='../dataAccess/borrarclase.php?id=$send' type='button' class='btn btn-danger'> Borrar </a> </td>" . 
            "</tr>";

        $i = $i + 1;
    }

?>