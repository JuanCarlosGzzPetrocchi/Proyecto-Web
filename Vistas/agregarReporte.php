<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';


if(isset($_POST['RegistrarReporte'])) {
$descripcion = $_POST['descripcion'];
$estudiante = $_POST['estudiante'];
$salon = $_POST['salon'];


if(mysqli_query($con,"INSERT INTO reporte(descripcion,maestroid,estudianteid) VALUES ('$descripcion','1','$estudiante')")){
echo("Reporte registrado");
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
        <title>RegistrarReporte</title>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Registro de Reporte</h3>
            <form method="post">
                <label>Descripcion de incidente</label>
                <input type="text" name="descripcion" placeholder="Descripcion del reporte" required /><br>
                 <label>Alumno Responsable</label>
                 <select id="estudiante" name="estudiante">
                    <option value="1">Pepe</option>
                    <option value="2">Maria</option>
                    <option value="3">Juan</option>
                 <input type="submit" class="button"  name="RegistrarReporte" value="Registrar"/>
            </form>
        </div>
    </center>
    <a href="../Vistas/VerReportes.php">Regresar</a>
</body>
</html>