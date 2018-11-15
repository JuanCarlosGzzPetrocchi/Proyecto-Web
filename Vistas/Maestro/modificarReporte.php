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


$sql = "UPDATE reporte SET descripcion = '$descripcion' WHERE id ='$id'";
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
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Modificar Reporte</h3>
            <form method="post">
                <label>Descripcion de incidente</label>
                <input type="text" name="descripcion" placeholder="Descripcion del reporte" value="<?php echo $reporte['descripcion'];?>" required /><br>
             
                 <input type="submit" type="button" class="btn btn-success"  name="ModificarReporte" value="Modificar"/>
            </form>
            <a href="../Maestro/VerReportes.php" type="button" class="btn btn-info">Regresar</a>
        </div>
    </center>
</body>
</html>