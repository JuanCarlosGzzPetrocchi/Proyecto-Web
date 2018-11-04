<?php
$con=mysqli_connect("localhost","root","root","escuela");

include_once 'dbConnect.php';

if(isset($_POST['RegistrarMaestro'])) {
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

if(mysqli_query($con,"INSERT INTO maestro(nombre,clave) VALUES ('$nombre','$clave')")){
echo("Maestro registrado");
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
        <title>Registration</title>
        <link rel="stylesheet" href="styles/styles.css" type="text/css"/>
    </head>
    <body>
    <center>
        <div id="signup">       
            <h3>Registro de Maestro</h3>
            <form method="post">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Tu Nombre" required />
                 <label>Contraseña</label>
                 <input type="password" name="clave" placeholder="Tu Contraseña" required />
                 <input type="submit" class="button"  name="RegistrarMaestro" value="Registrar"/>
            </form>
        </div>
    </center>
</body>
</html>