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
                <label>Nombre</label>
                <input type="text" name="descripcion" placeholder="Descripcion del reporte" required /><br>
                 <label>Alumno Responsable</label>
                 <select id="estudiante" name="estudiante">
                    <option value="pepe">Pepe</option>
                    <option value="Maria">Maria</option>
                    <option value="Juan">Juan</option>
                 <input type="submit" class="button"  name="RegistrarReporte" value="Registrar"/>
            </form>
        </div>
    </center>
</body>
</html>