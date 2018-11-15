<?php
    $con=mysqli_connect("localhost","root","root","escuela");
    include_once 'dbConnect.php';
    session_start(); 
    if($_SESSION['usuarionombre']==''){
        header("Location: loginMaestro.php");
    }
    $masid= $_SESSION['usuarioid'];
    $query = "SELECT nombre,id FROM estudiante";
    $response = mysqli_query($con, $query);

    //Guarda en un arreglo las opciones
    $resultado = array();
    //contador
    $i = 0;

    //crea el HTML
    while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
        $nombre= $row['nombre'];
        $idEstudiante= $row['id'];
        $resultado[$i] = "<option value='$idEstudiante'>$nombre</option>";

        $i = $i + 1;
    }

    if(isset($_POST['RegistrarReporte'])) {
        $descripcion = $_POST['Descripcion'];
        $Estudiante = $_POST['Estudiante'];
        echo $descripcion;
        echo $Estudiante;

        if(mysqli_query($con,"INSERT INTO reporte(descripcion,maestroid,estudianteid) VALUES ('$descripcion',$masid,$Estudiante)")){
            echo("Reporte registrado");
            header("Location: VerReportes.php");
        }
        else{
            echo("Mission failed we'll get'em next time");
        }
    }
?>