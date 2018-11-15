<?php
  $con=mysqli_connect("localhost","root","root","escuela");
  include_once 'dbConnect.php';
  session_start(); 
  
  if($_SESSION['usuarionombre']==''){
      header("Location: ../Maestro/loginMaestro.php");
  } 

  $masid= $_SESSION['usuarioid'];
  $user = $_SESSION['usuario']; 
  $query = "SELECT reporte.id as id, descripcion, maestro.nombre AS maestro, estudiante.nombre AS estudiante FROM reporte JOIN maestro ON reporte.maestroid = maestro.id JOIN estudiante ON reporte.estudianteid = estudiante.id where maestro.id=$masid";
  $response = mysqli_query($con, $query);

  $resultado = array();
  $i = 0;

  while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
    $send = urlencode($row['id']);
    $resultado[$i] = "<tr>" . 
            "<td>" . $row['descripcion'] . "</td>" .
            "<td>" . $row['estudiante'] ."</td>" .
            "<td> <a href='../Maestro/modificarReporte.php?id=$send' type='button' class='btn btn-primary'>Modificar</a> </td>" . 
            "<td> <a href='../../dataAccess/borrarreporte.php?id=$send' type='button' class='btn btn-danger'>Borrar</a> </td>" . 
          "</tr>";
          
    $i = $i + 1;
  }

?>