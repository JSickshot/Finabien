<!DOCTYPE html>
<html>

<head>
    <title>Bitacora de mantenimiento</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bita.css">
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
            <div class="rectangulo">

            <input type="checkbox" name="correctivo" id="checkbox-correctivo" style="margin-right: 50px;">
            <label for="checkbox-correctivo">Correctivo</label>

            <input type="checkbox" name="preventivo" id="checkbox-preventivo" style="margin-right: 10px;">
            <label for="checkbox-preventivo">Preventivo</label>
        </div>

            <div class="rectangulo">
                <h2>CÁMARAS Y GRABADOR</h2>
                <table id="tabla-camaras">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>TIPO</th>
                            <th>MODELO</th>
                            <th>NO.SERIE</th>
                            <th>NO. DE INVENTARIO</th>
                            <th>ESTATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="tabla-camaras[0][0]" value=""></td>
                            <td><input type="text" name="tabla-camaras[0][1]" value=""></td>
                            <td><input type="text" name="tabla-camaras[0][2]" value=""></td>
                            <td><input type="text" name="tabla-camaras[0][3]" value=""></td>
                            <td><input type="text" name="tabla-camaras[0][4]" value=""></td>
                            <td><input type="text" name="tabla-camaras[0][5]" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tabla-camaras[1][0]" value=""></td>
                            <td><input type="text" name="tabla-camaras[1][1]" value=""></td>
                            <td><input type="text" name="tabla-camaras[1][2]" value=""></td>
                            <td><input type="text" name="tabla-camaras[1][3]" value=""></td>
                            <td><input type="text" name="tabla-camaras[1][4]" value=""></td>
                            <td><input type="text" name="tabla-camaras[1][5]" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tabla-camaras[2][0]" value=""></td>
                            <td><input type="text" name="tabla-camaras[2][1]" value=""></td>
                            <td><input type="text" name="tabla-camaras[2][2]" value=""></td>
                            <td><input type="text" name="tabla-camaras[2][3]" value=""></td>
                            <td><input type="text" name="tabla-camaras[2][4]" value=""></td>
                            <td><input type="text" name="tabla-camaras[2][5]" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tabla-camaras[3][0]" value=""></td>
                            <td><input type="text" name="tabla-camaras[3][1]" value=""></td>
                            <td><input type="text" name="tabla-camaras[3][2]" value=""></td>
                            <td><input type="text" name="tabla-camaras[3][3]" value=""></td>
                            <td><input type="text" name="tabla-camaras[3][4]" value=""></td>
                            <td><input type="text" name="tabla-camaras[3][5]" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tabla-camaras[4][0]" value=""></td>
                            <td><input type="text" name="tabla-camaras[4][1]" value=""></td>
                            <td><input type="text" name="tabla-camaras[4][2]" value=""></td>
                            <td><input type="text" name="tabla-camaras[4][3]" value=""></td>
                            <td><input type="text" name="tabla-camaras[4][4]" value=""></td>
                            <td><input type="text" name="tabla-camaras[4][5]" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tabla-camaras[5][0]" value=""></td>
                            <td><input type="text" name="tabla-camaras[5][1]" value=""></td>
                            <td><input type="text" name="tabla-camaras[5][2]" value=""></td>
                            <td><input type="text" name="tabla-camaras[5][3]" value=""></td>
                            <td><input type="text" name="tabla-camaras[5][4]" value=""></td>
                            <td><input type="text" name="tabla-camaras[5][5]" value=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div>
                <div class="botones-cuadro">

                    <button type="button" class="btn-eliminar" data-tabla-id="tabla-camaras">Eliminar Fila
                        Cámaras/grabador</button>
                </div>
            </div>

            <div class="rectangulo">
                <h2>Sistema de alarmas</h2>
                <table id="tabla-alarma">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>MODELO</th>
                            <th>NO.SERIE</th>
                            <th>NO. DE INVENTARIO</th>
                            <th>NO. SENSORES DE MOVIMIENTO</th>
                            <th>NO. SENSORES DE MAGNETICOS</th>
                            <th>NO. BOTON</th>
                            <th>ESTATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="tabla-alarma[0][0]" value=""></td>
                            <td><input type="text" name="tabla-alarma[0][1]" value=""></td>
                            <td><input type="text" name="tabla-alarma[0][2]" value=""></td>
                            <td><input type="text" name="tabla-alarma[0][3]" value=""></td>
                            <td><input type="text" name="tabla-alarma[0][4]" value=""></td>
                            <td><input type="text" name="tabla-alarma[0][5]" value=""></td>
                            <td><input type="text" name="tabla-alarma[0][6]" value=""></td>
                            <td><input type="text" name="tabla-alarma[0][7]" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tabla-alarma[1][0]" value=""></td>
                            <td><input type="text" name="tabla-alarma[1][1]" value=""></td>
                            <td><input type="text" name="tabla-alarma[1][2]" value=""></td>
                            <td><input type="text" name="tabla-alarma[1][3]" value=""></td>
                            <td><input type="text" name="tabla-alarma[1][4]" value=""></td>
                            <td><input type="text" name="tabla-alarma[1][5]" value=""></td>
                            <td><input type="text" name="tabla-alarma[1][6]" value=""></td>
                            <td><input type="text" name="tabla-alarma[1][7]" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tabla-alarma[2][0]" value=""></td>
                            <td><input type="text" name="tabla-alarma[2][1]" value=""></td>
                            <td><input type="text" name="tabla-alarma[2][2]" value=""></td>
                            <td><input type="text" name="tabla-alarma[2][3]" value=""></td>
                            <td><input type="text" name="tabla-alarma[2][4]" value=""></td>
                            <td><input type="text" name="tabla-alarma[2][5]" value=""></td>
                            <td><input type="text" name="tabla-alarma[2][6]" value=""></td>
                            <td><input type="text" name="tabla-alarma[2][7]" value=""></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div>
                <div class="botones-cuadro">
                    <button type="button" class="btn-eliminar" data-tabla-id="tabla-alarma">Eliminar Fila
                        Alarmas</button>
                </div>
            </div>

            <div class="rectangulo">
                <h2>descripción de servicio</h2>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <input type="hidden" name="servicios_limpieza" value="no">

                        <tr>
                            <td><input type="checkbox" name="servicio[]" value="revision_camaras"> Revisión de Cámaras
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="servicio[]" value="limpieza_camaras"> Limpieza de Cámaras
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="servicio[]" value="limpieza_sistema_alarmas"> Limpieza de
                                Sistema de Alarmas</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="rectangulo">
                <h2>Observaciones</h2>
                <textarea name="observaciones" rows="10" cols="175" style="border-color: #cda343;"></textarea>
            </div>

            <input type="submit" value="Enviar" class="btn-guardar">
            <br>
            </br>
            <a href="../php/bienvenido.php" class="regresar-button">Regresar</a>
            <script src="../script/bita.js"></script>

            <script>

            function mostrarAlerta() {

                alert("El formulario se ha enviado con éxito.");
            }

            </script>
        </form>>
    </form>>
</body>

</html>