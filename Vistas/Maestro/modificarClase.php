<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';

$id = $_GET['id'];
$query = "SELECT * FROM clase WHERE id = $id LIMIT 1";
$response = mysqli_query($con, $query);
$clase = mysqli_fetch_assoc($response);

if(isset($_POST['ModificarClase'])) {
$nombre = $_POST['nombre'];
$horario = $_POST['horario'];
$salon = $_POST['salon'];

$sql = "UPDATE clase SET nombre = '$nombre', horario = '$horario', salon = '$salon' WHERE id ='$id'";
if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}



}

//header("Location: VerClases.php");

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
            <h3>Modificar Clase</h3>
            <form method="post">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre de clase" value="<?php echo $clase['nombre'];?>"required /><br>
                 <label>Horario</label>
                 <input type="text" name="horario" placeholder="Horario de clase" value="<?php echo $clase['horario'];?>" required /><br>
                 <label>Salon</label>
                 <input type="text" name="salon" placeholder="Salon de clase" value="<?php echo $clase['salon'];?>" required /><br>
                 <input type="submit" class="button"  name="ModificarClase" value="Modificar"/>
            </form>

            <a href="../Maestro/modificarCalificaciones.php">Modificar Calificaciones/Eliminar Estudiante</a><br>
            <a href="../Maestro/agregarEstudiante.php">Agregar Estudiante</a><br>
            <a href="../Maestro/VerClases.php">Regresar</a>
        </div>
    </center>
</body>
</html>