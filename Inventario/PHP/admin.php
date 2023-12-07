<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finabien";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

function buscarRegistros($conn, $query) {
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "
        <tr>
            <th>REGION</th>
            <th>ENTIDAD</th>
            <th>REGISTRO</th>
            <th>SUCURSAL CON EQUIPO</th>
            <th>NOMBRE_SUCURSAL</th>
            <th>ESTADO_SUCURSAL</th>
            <th>TIPO_COMUNICACIÓN</th>
            <th>TIPO_EQUIPO</th>
            <th>MODELO</th>
            <th>IP_CAMARA</th>
            <th>ESTATUS_EQUIPO</th>
            <th>NUM_SERIE_EQUIPO</th>
            <th>NUM__INV_EQUIPO</th>
            <th>ESTATUS_SISTEMA_ALMACENAMIENTO</th>
            <th>MODELO_ALMACENAMIENTO</th>
            <th>NUM_SERIE_ALMACENAMIENTO</th>
            <th>NUM_INVENTARIO_ALMACENAMIENTO</th>
            <th>OBSERVACIONES</th>
            <th>NUM_REP</th>
            <th>FECHA_REPORTE (XX/XX/XXXX)</th>
            <th>OFICIO_LLEGADA_CNM </th>
            <th>FECHA_LLEGADA</th>
            <th>NUM._SERVICIO</th>
            <th>FECHA DE SERVICIO</th>
            <th>OFICIO RESPUESTA SERVICIO</th>
            <th>PROCEDE SINIESTRO (SI O NO)</th>
            <th>FECHA SOLICITUD DICTAMEN</th>
            <th>NUM OFICIO SOLICITUD DICTECNICO</th>
            <th>ESTATUS SINIESTRO</th>
            <th>DICTAMEN TECNICO</th>
            <th>FECHA ENVIO DICTAMENTECNICO</th>
            <th>OFICIO ENVIO DICTECNICO</th>
            <th>NUM SINIESTRO CAMARA</th>
            <th>NUM SINIESTRO ALMACENAMIENTO</th>
            <th>NUM SINIESTRO ALARMA</th>
            <th>FECHA DE ADJUDICACION</th>
            <th>NUM REMISION CAMARA</th>
            <th>NUM REMISION ALMACENAMIENTO</th>
            <th>NUM REMISION ALARMA</th>
            <th>FECHA DE ENTREGA CNM</th>
            <th>QUIEN RECIBE CNM</th>
            <th>EQUIPO EN SOPORTE 1=SI, 2=ENVIADO</th>
            <th>FECHA DE ENTREGA ENVIO GERENCIA</th>
            <th>OFICIO ENVIO DICTECNICO</th>
            <th>OFICIO DE ENVIO</th>
            <th>GERENCIA ENVIADA</th>
            <th>ACUSE DE RESGUARDO </th>
            <th>FECHA DE INSTALACION CAMARA</th>
            <th>FECHA INSTALACION ALMACENAMIENTO</th>
            <th>FECHA INSTALACION ALARMA</th>
            <th>FECHA INSTALACION CAMARA2</th>
            <th>FECHA DE INTALACION ALMACENAMIENTO 3</th>
            <th>FECHA DE INSTALACION ALARMA4</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['REGION']}</td>
                <td>{$row['ENTIDAD']}</td>
                <td>{$row['REGISTRO']}</td>
                <td>{$row['SUCURSAL_EQUIP']}</td>
                <td>{$row['NOMBRE_SUC']}</td>
                <td>{$row['ESTADO_SUC']}</td>
                <td>{$row['TIPO_COMM']}</td>
                <td>{$row['TIPO_EQUI']}</td>
                <td>{$row['MODELO']}</td>
                <td>{$row['IP_CAM']}</td>
                <td>{$row['ESTATUS_EQUIPO']}</td>
                <td>{$row['SERIE']}</td>
                <td>{$row['INVENTARIO']}</td>
                <td>{$row['ESTATUS_ALMAC']}</td>
                <td>{$row['MODELO_ALMAC']}</td>
                <td>{$row['NUM_SERIE']}</td>
                <td>{$row['NUM_INV_ALMAC']}</td>
                <td><a href='editar.php?id={$row['ID']}'>Editar</a></td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "NO EXISTE ESE REGISTRO";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $registroBuscar = $_POST['registro_buscar'];

    $query = "SELECT * FROM validainv WHERE REGISTRO = '$registroBuscar'";

    buscarRegistros($conn, $query);
}

$conn->close();
?>

<a href="cerrar-sesion.php">Cerrar Sesión</a>
<a href="admin.html">Otra consulta</a>

