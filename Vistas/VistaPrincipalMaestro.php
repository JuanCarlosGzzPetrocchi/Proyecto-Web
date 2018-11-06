<?php
  session_start(); 
  $user = $_SESSION['usuario']; 
  
if(isset($_POST['logout'])) {
session_destroy();
header("Location: loginMaestro.php");
}


?>
<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Index</title>
        
    </head>
    <body>
    <center>
        <div id="signup">       
            <h3>Bienvenido Professor <?php echo $user?></h3>
            <a href="../Vistas/VerClases.php">Ver Clases</a><br>
            <a href="../Vistas/VerReportes.php">Ver Reportes</a>
            <form method="post">
                <input type="submit" class="button"  name="logout" value="Logout"/>
            </form>
        </div>
    </center>
</body>