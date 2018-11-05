<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ModificarClase</title>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Modificar Clase</h3>
            <form method="post">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre de clase" required /><br>
                 <label>Horario</label>
                 <input type="text" name="horario" placeholder="Horario de clase" required /><br>
                 <label>Salon</label>
                 <input type="text" name="salon" placeholder="Salon de clase" required /><br>
                 <input type="submit" class="button"  name="ModificarClase" value="Modificar"/>
            </form>

            <a href="../Vistas/modificarCalificaciones.php">Modificar Calificaciones/Eliminar Estudiante</a><br>
            <a href="../Vistas/agregarEstudiante.php">Agregar Estudiante</a>
        </div>
    </center>
</body>
</html>