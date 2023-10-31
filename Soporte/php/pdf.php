<?php
require_once '../lib/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "finabien";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
    }

    $fecha = $_POST["fecha"];
    $reporte = $_POST["reporte"];
    $registro = $_POST["registro"];
    $gerencia = $_POST["gerencia"];
    $sucursal = $_POST["sucursal"];
    $nombre = $_POST["Nombre"];
    $tecnico = $_POST["tecnico"];
    $correctivo_checkbox = isset($_POST["correctivo"])  ? $_POST["correctivo"] : "";
    $preventivo_checkbox = isset($_POST["preventivo"]) ? $_POST["preventivo"] : "";
    $revision_camaras = isset($_POST["servicio"]) && in_array("revision_camaras", $_POST["servicio"]) ? "si" : "no";
    $limpieza_camaras = isset($_POST["servicio"]) && in_array("limpieza_camaras", $_POST["servicio"]) ? "si" : "no";
    $limpieza_sistema_alarmas = isset($_POST["servicio"]) && in_array("limpieza_sistema_alarmas", $_POST["servicio"]) ? "on" : "off";
    $observaciones = $_POST["observaciones"];

    $servicios_seleccionados = isset($_POST["servicio"]) ? $_POST["servicio"] : array();
    $servicios_limpieza = in_array("revision_camaras", $servicios_seleccionados) ? "on" : "off";
    $servicios_limpieza .= in_array("limpieza_camaras", $servicios_seleccionados) ? ",on" : ",off";
    $servicios_limpieza .= in_array("limpieza_sistema_alarmas", $servicios_seleccionados) ? ",on" : ",off";


    $sql_bitacora = "INSERT INTO bitacora_mantenimiento (fecha, reporte, registro, gerencia, sucursal, 
    nombre, tecnico, correctivo, preventivo, revision_camaras, limpieza_camaras, limpieza_sistema_alarmas, servicios_limpieza, observaciones)
            VALUES ('$fecha', '$reporte', '$registro', '$gerencia', '$sucursal', '$nombre', '$tecnico', '$correctivo_checkbox', 
            '$preventivo_checkbox', '$revision_camaras', '$limpieza_camaras', '$limpieza_sistema_alarmas', '$servicios_limpieza', '$observaciones')";

    if ($conn->query($sql_bitacora) === TRUE) {
        $bitacora_id = $conn->insert_id;

        if (isset($_POST["tabla-camaras"])) {
            $camaras = $_POST["tabla-camaras"];
            foreach ($camaras as $camara) {
              $tipo_camara = $camara[0];
                $modelo_camara = $camara[1];
                $no_serie_camara = $camara[2];
                $no_inventario_camara = $camara[3];
                $estatus_camara = $camara[4];
                
                $sql_camara = "INSERT INTO camaras (bitacora_id, tipo, modelo, no_serie, no_inventario, estatus)
                        VALUES ('$bitacora_id', '$tipo_camara', '$modelo_camara', '$no_serie_camara', '$no_inventario_camara', '$estatus_camara')";
                
                $conn->query($sql_camara);
            }
        }

        if (isset($_POST["tabla-alarma"])) {
            $alarmas = $_POST["tabla-alarma"];
            foreach ($alarmas as $alarma) {
           $modelo_alarma = $alarma[0];
                $no_serie_alarma = $alarma[1];
                $no_inventario_alarma = $alarma[2];
                $no_sensores_movimiento = $alarma[3];
                $no_sensores_magneticos = $alarma[4];
                $no_boton = $alarma[5];
                $estatus_alarma = $alarma[6];
                
                $sql_alarma = "INSERT INTO alarmas (bitacora_id, modelo, no_serie, no_inventario, no_sensores_movimiento, no_sensores_magneticos, no_boton, estatus)
                        VALUES ('$bitacora_id', '$modelo_alarma', '$no_serie_alarma', '$no_inventario_alarma', '$no_sensores_movimiento', '$no_sensores_magneticos', '$no_boton', '$estatus_alarma')";
                
                $conn->query($sql_alarma);
            }
        }
        $conn->close();
        
        $contenidoHTML = <<<HTML
        <!DOCTYPE html>
<html>
<head>
    
    <style>

        body {
    font-size: 6px;
}

.formulario select {
    width: 100%;
    padding: 8px;
    border: 1px solid #b39230;
    border-radius: 4px;
    background-color: transparent;
    font-size: 16px;
}


.container {
    position: absolute;
    display: flex;
    align-items: left;
    width: 200px;
    margin: 0 auto;
}



.formulario {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    box-sizing: border;
    
}

.formulario label {
    margin-right: 10px;
}

.formulario input[type="text"] {
    border: none;
    background-color: transparent;
    padding: 5px;
    border-bottom: 2px solid #cda343;
    transition: border-color 0.3s ease-in-out;
}

.formulario input[type="text"]:focus {
    border-color: black;
}

.rectangulo {
    width: 20%;
    background-color: #FFFFFF;
    padding: 5px;
    text-align: center;
    border: none;
}

table {
    width: 60%;
    border-collapse: collapse;
}

th {
    background-color: #00853c;
    text-align: left;
    padding: 8px;
}

td {
    border: 1px solid #cda343;
    padding: 8px;
}

input {
    width: 100%;
    border: none;
    background-color: transparent;
}


@media (max-width: 768px) {
    body {
        font-size: 14px;
    }
}


@media (min-width: 800px) {
    body {
        font-size: 16px;
    }
}

img {
    max-width: 100%;
    height: auto;
}


@media screen and (max-width: 768px) {
    img {
        max-width: 80%; 
    }
}


.form-group {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }
  


    </style>
</head>
<body>
    <h1>Bitácora de Mantenimiento</h1>
    <p><b>Fecha:</b> $fecha, &nbsp; <b>Reporte CNM:</b> $reporte, &nbsp; <b>Registro:</b> $registro</p>
    <p><b>Gerencia:</b> $gerencia,&nbsp; <b>Sucursal:</b> $sucursal,&nbsp; <b>Nombre del Tecnico:</b> $nombre</p>
    <p><b>Soporte Técnico:</b> $tecnico,</p>
    <p> <b>Correctivo:</b>  $correctivo_checkbox,&nbsp; <b>Preventivo:</b>  $preventivo_checkbox</p>
    
    <h3>Cámaras y Grabador:</h3>
    <table border="1">
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
HTML;

    
    if (isset($_POST["tabla-camaras"])) {
        $camaras = $_POST["tabla-camaras"];
        foreach ($camaras as $camara) {
            $contenidoHTML .= "<tr>";
            foreach ($camara as $valor) {
                $contenidoHTML .= "<td>$valor</td>";
            }
            $contenidoHTML .= "</tr>";
        }
    }

    $contenidoHTML .= <<<HTML
        </tbody>
    </table>

    <h3>Sistema de Alarmas:</h3>
    <table border="1">
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
HTML;

    
    if (isset($_POST["tabla-alarma"])) {
        $alarmas = $_POST["tabla-alarma"];
        foreach ($alarmas as $alarma) {
            $contenidoHTML .= "<tr>";
            foreach ($alarma as $valor) {
                $contenidoHTML .= "<td>$valor</td>";
            }
            $contenidoHTML .= "</tr>";
        }
    }

    $contenidoHTML .= <<<HTML
        </tbody>
    </table>

    <h3>Descripción de Servicio:</h3>
    <p>Servicios seleccionados:</p>
    <ul>

   
HTML;

    $serviciosSeleccionados = isset($_POST["servicio"]) ? $_POST["servicio"] : [];
    foreach ($serviciosSeleccionados as $servicio) {
        $contenidoHTML .= "<li>$servicio</li>";
    }

    $contenidoHTML .= <<<HTML
    </ul>

    <h2>Observaciones:</h2>
    <p>$observaciones</p>

    <div class="formulario">
                <div class="form-group">
                <label for="reporte" style="margin-left: 500x;">Tecnico:</label>
                    <input type="text">
                    <br>
                    <br>
                    
                    <label for="repor" style="margin-left: 0px;">Jefe de Sucursal:</label>
                    <input type="text" >
                </div>
                

             
</body>
</html>
HTML;
    
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($contenidoHTML);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        $dompdf->stream('bitacora_mantenimiento.pdf', ['Attachment' => true]);
        
    } else {
        echo "Error: " . $sql_bitacora . "<br>" . $conn->error;
    }
}

$registro = $_POST["registro"]; 

$sql = "SELECT gerencia, sucursal FROM inventario WHERE registro = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $registro);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $gerencia = $row["gerencia"];
    $sucursal = $row["sucursal"];
} else {
    $gerencia = "No se encontraron datos";
    $sucursal = "No se encontraron datos";
}

$response = array(
    'gerencia' => $gerencia,
    'sucursal' => $sucursal
);

header('Content-Type: application/json');
echo json_encode($response);


?>
