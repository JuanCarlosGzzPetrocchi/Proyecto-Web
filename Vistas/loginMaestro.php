<?php
$con=mysqli_connect("localhost","root","root","escuela");

include_once 'dbConnect.php';

if(isset($_POST['loginMaestro'])) {
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

$query = "SELECT * FROM maestro WHERE nombre='$nombre'";

$response = mysqli_query($con, $query);
$row = mysqli_fetch_array($response,MYSQLI_ASSOC);
session_start();
if($row["clave"] == $clave)
{
$_SESSION['usuarionombre'] = $row['nombre'];
$_SESSION['usuarioid'] = $row['id'];
header("Location: VistaPrincipalMaestro.php");
}
else{
echo("Wrong Credentials");
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
            <h3>Login de Maestro</h3>
            <form method="post">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Tu Nombre" required />
                 <label>Contraseña</label>
                 <input type="password" name="clave" placeholder="Tu Contraseña" required />
                 <input type="submit" class="button"  name="loginMaestro" value="Entrar"/>
            </form>
        </div>
    </center>
    <a href="../Vistas/registromaestro.php">Registrar nuevo maestro</a>
</body>
</html>