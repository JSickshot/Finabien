<!DOCTYPE html>
<html>

<head>
    <title>Bitacora de mantenimiento</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bita.css">
    <script src="inventario.js"></script>

</head>

<body>
        <form action="pdf.php" method="post" onsubmit="mostrarAlerta()">

            <div class="container">
                <img class="image" src="../imagenes/logo-05.png"
                    alt="Descripción de la imagen" style="margin-left: 800px;">
            </div>

            <h2>Gerencia de monitoreo y videovigilancia</h2>
            <h2>Coordinación de Mantenimiento Técnico</h2>
            <h2>Bitácora de mantenimiento</h2>

            <div class="formulario">
                <div class="form-group">
                    <label for="fecha">FECHA:</label>
                    <input type="date" name="fecha" id="fecha" required readonly>
                </div>

                <div class="form-group">
                    <label for="reporte" style="margin-left: 760px;">Reporte CNM:</label>
                    <input type="text" name="reporte" maxlength="4" pattern="[0-9]{1,5}" title="MANEJA 4 NUMEROS"
                        required>
                </div>

                <label for="REGISTRO">REGISTRO: (SI CUENTA CON VENTANILLA REMOTA, FAVOR DE ESCRIBIR " VR- ")</label>
                <input type="text" name="registro" maxlength="8" id="registro" required oninput="obtenerDatos()">

                <label for="GERENCIA">GERENCIA:</label>
                <input type="text" name="gerencia" id="gerencia" required readonly>

                <label for="SUCURSAL">SUCURSAL:</label>
                <input type="text" name="sucursal" id="sucursal" required readonly>

                <label for="Nombre">Nombre:</label>
                <input type="text" name="Nombre" required>

                <label for="Tecnico">Tecnico que lo atendio:</label>
                <select name="tecnico" id="tecnico" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Mario Alberto de la Torre Medina">Mario Alberto de la Torre Medina</option>
                    <option value="Fernando David Ramírez Gonzalez">Fernando David Ramírez Gonzalez</option>
                    <option value="Ilse Ivonne Ortega Hidalgo">Ilse Ivonne Ortega Hidalgo</option>
                    <option value="Mercedes Morales Morales">Mercedes Morales Morales</option>
                </select>
                <br>
                </br>


            </div>
            

            <script>

            function mostrarAlerta() {

                alert("El formulario se ha enviado con éxito.");
            }

            </script>
        </form>
    </form>
</body>

</html>