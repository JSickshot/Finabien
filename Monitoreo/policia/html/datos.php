<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "proyectoprueba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$registro = $_POST["registro"];

$sql = "SELECT gerencia, sucursal, region FROM inventario WHERE registro = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $registro);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $gerencia = $row["gerencia"];
    $sucursal = $row["sucursal"];
    $region = $row["region"];
} else {
    $gerencia = "No se encontraron datos";
    $sucursal = "No se encontraron datos";
    $region = "No se encontraron datos";
}

$response = array(
    'gerencia' => $gerencia,
    'sucursal' => $sucursal,
    'region' => $region
);

header('Content-Type: application/json');
echo json_encode($response);
?>
