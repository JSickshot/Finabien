<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tablas HTML</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Policiaco.css">
    <script src="../JavaScript/policiaco.js"></script>
</head>

<body>
            <tr>
                <td colspan="2" class="blue-box">
                    <h2>Validar Inventario</h2>
                </td>
            </tr>
            <tr>
                
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
        
    </form>

    <script>
        function mostrarAlerta() {
            alert("El formulario se ha enviado con  éxito.");
        }
    </script>
</body>

</html>
