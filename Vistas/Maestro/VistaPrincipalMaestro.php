<?php include('vistaPrincipalMaestroLogic.php');?>

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
            <a href="../Maestro/VerClases.php">Ver Clases</a><br>
            <a href="../Maestro/VerReportes.php">Ver Reportes</a>
            <form method="post">
                <input type="submit" class="button"  name="logout" value="Logout"/>
            </form>
        </div>
    </center>
</body>