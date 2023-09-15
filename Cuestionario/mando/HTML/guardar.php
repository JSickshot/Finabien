<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finabien";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

function limpiarDatos($dato)
{
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}

$servicio = limpiarDatos($_POST['servicio']);
$ayuda2 = limpiarDatos($_POST['ayuda2']);
$ayuda3 = limpiarDatos($_POST['ayuda3']);
$ayuda4 = limpiarDatos($_POST['ayuda4']);
$ayuda5 = limpiarDatos($_POST['ayuda5']);
$ayuda6 = limpiarDatos($_POST['ayuda6']);
$ayuda7 = limpiarDatos($_POST['ayuda7']);
$ayuda8 = limpiarDatos($_POST['ayuda8']);
$ayuda9 = limpiarDatos($_POST['ayuda9']);
$ayuda10 = limpiarDatos($_POST['ayuda10']);
$ayuda11 = limpiarDatos($_POST['ayuda11']);
$ayuda12 = limpiarDatos($_POST['ayuda12']);
$ayuda13 = limpiarDatos($_POST['ayuda13']);
$ayuda14 = limpiarDatos($_POST['ayuda14']);
$ayuda15 = limpiarDatos($_POST['ayuda15']);
$ayuda16 = limpiarDatos($_POST['ayuda16']);
$opiniones = limpiarDatos($_POST['opiniones']);

$stmt = $conn->prepare("INSERT INTO encuesta_mandos (
    servicio, ayuda2,ayuda3,ayuda4,ayuda5,ayuda6,ayuda7,ayuda8,ayuda9,ayuda10,
    ayuda11,ayuda12,ayuda13,ayuda14,ayuda15,ayuda16,opiniones) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param("sssssssssssssssss",
    $servicio, $ayuda2,$ayuda3,$ayuda4,$ayuda5,$ayuda6,$ayuda7,$ayuda8,$ayuda9,
    $ayuda10,$ayuda11,$ayuda12,$ayuda13,$ayuda14,$ayuda15,$ayuda16,$opiniones
);



if ($stmt->execute()) {
    header("Location: gracias.php");
    exit();
}

$stmt->close();
$conn->close();
?>