<?php include('../../Controller/Maestro/vistaPrincipalMaestroLogic.php');?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    <center>
        <div id="signup">       
            <h3>Bienvenido Profesor <?php echo $user; ?></h3>
            <img src="../../css/logo.png"></br>
            <a href="../Maestro/VerClases.php" type="button" class="btn btn-primary">Ver Clases</a>
            <a href="../Maestro/VerReportes.php" type="button" class="btn btn-primary">Ver Reportes</a>
            <form method="post">
                <input type="submit" type="button" class="btn btn-info"  name="logout" value="Logout"/>
            </form>
        </div>
    </center>
</body>