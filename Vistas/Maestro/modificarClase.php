<?php include('../../Controller/Maestro/modificarClaseLogic.php');?>

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
                 <input type="submit" type="button" class="btn btn-warning" name="ModificarClase" value="Modificar"/>
                 <a href="../Maestro/VerClases.php" type="button" class="btn btn-info">Regresar</a>
            </form>
        </div>
    </center>
</body>
</html>