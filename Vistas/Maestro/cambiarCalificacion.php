<?php include('../../Controller/Maestro/CambiarCalificacionLogic.php');?>

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
            <h3>Cambiar calificacion de <?php echo $cambio['nombre'];?></h3>
            <form method="post">
                <label>Calificacion Actual</label>
                <input type="text" name="calificacion" placeholder="Calificacion" value="<?php echo $cambio['calificacion'];?>"required /><br>
                 <input type="submit" type="button" class="btn btn-success" name="CambiarCalificacion" value="Cambiar"/>
            </form>
        
        </div>
    </center>
</body>
</html>