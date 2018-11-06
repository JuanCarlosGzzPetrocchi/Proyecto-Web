<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';

$id = $_GET['id'];
$query = "SELECT * FROM reporte WHERE id = $id LIMIT 1";
$response = mysqli_query($con, $query);
$reporte = mysqli_fetch_assoc($response);

if(isset($_POST['ModificarReporte'])) {
$descripcion = $_POST['descripcion'];
$estudiante = $_POST['estudiante'];


$sql = "UPDATE reporte SET descripcion = '$descripcion', estudiante = '$estudiante' WHERE id ='$id'";
if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}



}

?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Modificar Reporte</title>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Modificar Reporte</h3>
            <form method="post">
                <label>Descripcion de incidente</label>
                <input type="text" name="descripcion" placeholder="Descripcion del reporte" value="<?php echo $reporte['descripcion'];?>" required /><br>
                 <label>Alumno Responsable</label>
                 <select id="estudiante" name="estudiante">
                    <option value="1">Pepe</option>
                    <option value="2">Maria</option>
                    <option value="3">Juan</option>
                 <input type="submit" class="button"  name="ModificarReporte" value="Modificar"/>
            </form>
            <a href="../Vistas/VerReportes.php">Regresar</a>
        </div>
    </center>
</body>
</html>