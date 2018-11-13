<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';

$id = $_GET['id'];
$query = "SELECT unionClaseEstudiante.calificacion as calificacion, unionClaseEstudiante.claseid as claseid, estudiante.nombre as nombre  FROM unionClaseEstudiante JOIN estudiante ON unionClaseEstudiante.estudianteid = estudiante.id WHERE unionClaseEstudiante.id = $id LIMIT 1";
$response = mysqli_query($con, $query);
$cambio = mysqli_fetch_assoc($response);
$claseid = $cambio['claseid'];
if(isset($_POST['CambiarCalificacion'])) {
$calificacion = $_POST['calificacion'];


$sql = "UPDATE unionClaseEstudiante SET calificacion = '$calificacion' WHERE id ='$id'";
if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}
}

echo "<a href='../Maestro/VerEstudiantes.php?id=$claseid' type='button' class='btn btn-info'>Regresar</a>";

?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ModificarClase</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Cambiar calificacion de <?php echo $cambio['nombre'];?></h3>
            <form method="post">
                <label>Calificacion Actual</label>
                <input type="text" name="calificacion" placeholder="Calificacion" value="<?php echo $cambio['calificacion'];?>"required /><br>
                 <input type="submit" type="button" class="btn btn-success" name="CambiarCalificacion" value="Cambiar"/>
            </form>
        
        </div>
    </center>
</body>
</html>