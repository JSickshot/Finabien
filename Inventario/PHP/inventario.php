<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tablas HTML</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Policiaco.css">
    <script src="../JavaScript/policiaco.js"></script>
</head>

<body>
    <h2>Nota informativa</h2>
    <form action="enviar_poli.php" method="post">
        <label for="fecha">Fecha:</label><br>
        <input type="text" id="fecha" name="fecha" readonly><br>

        <label for="hora">Hora:</label><br>
        <input type="text" id="hora" name="hora" readonly><br>

        <label for="folio">Folio:</label><br>
        <input type="text" id="folio" name="folio" readonly><br>

        <h2>Ing. Alejandro Melo</h2>
        <table>
            <tr>
                <td colspan="2" class="blue-box">
                    <h2>Datos Generales</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="left-column">
                        <label for="fecha1">Fecha:</label>
                        <input type="date" id="fecha1" name="fecha1"><br>
                        <label for="hora1">Hora:</label>
                        <input type="time" id="hora1" name="hora1"><br>
                    </div>
                </td>
                <td>
                    <div class="right-column">
                        <label for="registro">Numero de Registro:</label>
                        <input type="text" name="COL3" maxlength="8" id="registro" required oninput="obtenerDatos()" autocomplete="off"><br>
        
                        <label for="sucursal">Nombre de Sucursal:</label>
                        <input type="text" id="sucursal" name="sucursal" required readonly><br>
        
                        <label for="gerencia">Estado:</label>
                        <input type="text" id="gerencia" name="gerencia" required readonly><br>
        
                        <label for="region">Region:</label>
                        <input type="text" id="region" name="region" required readonly><br>
                    </div>
                </td>
            </tr>
        </table>

        <button type="submit" name="submit" onclick="mostrarAlerta()">Enviar</button>
        

    </form>

    <script>
        function mostrarAlerta() {
            alert("El formulario se ha enviado con  éxito.");
        }
    </script>
    <a href="bienvenido.php"><button>Regresar</button></a>
</body>

</html>
