<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';
session_start(); 
if($_SESSION['usuarionombre']==''){
    header("Location: loginMaestro.php");
}
if(isset($_POST['RegistrarClase'])) {
$nombre = $_POST['nombre'];
$horario = $_POST['horario'];
$salon = $_POST['salon'];
$masid = $_SESSION['usuarioid'];

if(mysqli_query($con,"INSERT INTO clase(nombre,horario,salon,maestroid) VALUES ('$nombre','$horario','$salon',$masid)")){
echo("clase registrado");
header("Location: ../Maestro/VerClases.php");
}
else{

echo("Mission failed we'll get'em next time");
}

}
?>
<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>AgregaClase</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Registro de Clase</h3>
            <form method="post">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre de clase" required /><br>
                 <label>Horario</label>
                 <input type="text" name="horario" placeholder="Horario de clase" required /><br>
                 <label>Salon</label>
                 <input type="text" name="salon" placeholder="Salon de clase" required /><br>
                 <input type="submit" type='button' class='btn btn-success'  name="RegistrarClase" value="Registrar"/>
            </form>
        </div>
        <a href='../Maestro/VerClases.php' type='button' class='btn btn-info'>Regresar</a>
    </center>

</body>
</html>