<?php
    $con=mysqli_connect("localhost","root","root","escuela");
    include_once 'dbConnect.php';
    session_start(); 
    if($_SESSION['usuarionombre']==''){
        header("Location: loginMaestro.php");
    }

    $masid= $_SESSION['usuarioid'];
    $user = $_SESSION['usuarionombre']; 
    $query = "SELECT * FROM clase WHERE maestroid= $masid";
    $response = mysqli_query($con, $query);

    $resultado = array();
    $i = 0;


    while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
        $send = urlencode($row['id']);
        $resultado[$i] = "<tr>" . 
                "<td name='nombre'>" . $row['nombre'] . "</td>" . 
                "<td name='horario'>" . $row['horario'] . "</td>" . 
                "<td ='salon'>" . $row['salon'] ."</td>" . 
                "<td>" . $row['maestroid'] . "</td>" . 
                "<td> <a href='../Maestro/verEstudiantes.php?id=$send'> Ver Estudiantes </a> </td>" . 
                "<td> <a href='../Maestro/modificarClase.php?id=$send'> Modificar </a> </td>" . 
                "<td> <a href='../dataAccess/borrarclase.php?id=$send'> Borrar </a> </td>" . 
            "</tr>";

        $i = $i + 1;
    }

?>