<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "finabien";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$registro = $_POST["registro"];

$sql = "SELECT REGION,ENTIDAD,SUCURSAL,NOMBRE_SUCURSAL,
ESTADO_SUCURSAL,TIPO_COMM_SUC,TIPO_EQUIPO, MODELO_EQUIP,
IP_CAM, ESTATUS_EQUI,SERIE,INVENTARIO,ESTATS_SISTM_ALMAC,
MODELO,NUMERO_S_ALMAC, NUM_INV_ALMACE FROM validainv09102023 WHERE registro = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $registro);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $REGION = $row["region"];
    $entidad = $row["entidad"];
    $sucursal = $row["sucursal"];
    $NOMBRE_SUCURSAL = $row["NOMBRE_SUCURSAL"];
    $estado_sucursal = $row["estado_sucursal"];
    $tipo_comm_suc = $row["tipo_comm_suc"];
    $tipo_equipo = $row["tipo_equipo"];
    $modelo_equip = $row["modelo_equip"];
    $ip_cam = $row["ip_cam"];
    $estatus_equi = $row["estatus_equi"];
    $serie = $row["serie"];
    $inventario = $row["inventario"];
    $estats_sistm_almac = $row["estats_sistm_almac"];
    $modelo = $row["modelo"];
    $numero_s_almac = $row["numero_s_almac"];
    $num_inv_almace = $row["num_inv_almace"];
    
} else {
    $REGION = $row["No se encontraron datos"];
    $entidad = $row["No se encontraron datos"];
    $sucursal = $row["No se encontraron datos"];
    $NOMBRE_SUCURSAL = $row["No se encontraron datos"];
    $estado_sucursal = $row["No se encontraron datos"];
    $tipo_comm_suc = $row["No se encontraron datos"];
    $tipo_equipo = $row["No se encontraron datos"];
    $modelo_equip = $row["No se encontraron datos"];
    $ip_cam = $row["No se encontraron datos"];
    $estatus_equi = $row["No se encontraron datos"];
    $serie = $row["No se encontraron datos"];
    $inventario = $row["No se encontraron datos"];
    $estats_sistm_almac = $row["No se encontraron datos"];
    $modelo = $row["No se encontraron datos"];
    $numero_s_almac = $row["No se encontraron datos"];
    $num_inv_almace = $row["No se encontraron datos"];
}

$response = array(
    'REGION' => $REGION,
    'ENTIDAD' => $ENTIDAD,
    'SUCURSAL' => $SUCURSAL,
    'NOMBRE_SUCURSAL' => $NOMBRE_SUCURSAL,
    'ESTADO_SUCURSAL' => $ESTADO_SUCURSAL,
    'TIPO_COMM_SUC' => $TIPO_COMM_SUC,
    'TIPO_EQUIPO' => $TIPO_EQUIPO,
    'MODELO_EQUIP' => $MODELO_EQUIP,
    'IP_CAM' => $IP_CAM,
    'ESTATUS_EQUI' => $ESTATUS_EQUI,
    'SERIE' => $SERIE,
    'INVENTARIO' => $INVENTARIO,
    'ESTATS_SISTM_ALMAC' => $ESTATS_SISTM_ALMAC,
    'MODELO' => $MODELO,
    'NUMERO_S_ALMAC' => $NUMERO_S_ALMAC,
    'NUM_INV_ALMACE' => $NUM_INV_ALMACE
);

header('Content-Type: application/json');
echo json_encode($response);
?>
