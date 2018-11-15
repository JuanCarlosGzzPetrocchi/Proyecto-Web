<?php include('../../Controller/Maestro/registromaestroLogic.php');?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <center>
        <div id="signup">       
            <h3>Registro de Maestro</h3>
            <form method="post">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Tu Nombre" required />
                 <label>Contraseña</label>
                 <input type="password" name="clave" placeholder="Tu Contraseña" required /> <br>
                 <input type="submit" type="button" class="btn btn-success" name="RegistrarMaestro" value="Registrar"/>
            </form>
        </div>
    </center>
    <a href="../Maestro/loginMaestro.php" type="button" class="btn btn-info">Regresar</a>
</body>
</html>