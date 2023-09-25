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
$pregunta1 = limpiarDatos($_POST['pregunta1']);
$pregunta2 = limpiarDatos($_POST['pregunta2']);
$pregunta3 = limpiarDatos($_POST['pregunta3']);
$pregunta4 = limpiarDatos($_POST['pregunta4']);
$pregunta4 = limpiarDatos($_POST['pregunta4']);
$pregunta5 = limpiarDatos($_POST['pregunta5']);
$pregunta6 = limpiarDatos($_POST['pregunta6']);
$pregunta7 = limpiarDatos($_POST['pregunta7']);
$pregunta8 = limpiarDatos($_POST['pregunta8']);
$pregunta9 = limpiarDatos($_POST['pregunta9']);
$pregunta10 = limpiarDatos($_POST['pregunta10']);
$pregunta11 = limpiarDatos($_POST['pregunta11']);
$pregunta12 = limpiarDatos($_POST['pregunta12']);
$pregunta13 = limpiarDatos($_POST['pregunta13']);
$pregunta14 = limpiarDatos($_POST['pregunta14']);
$pregunta15 = limpiarDatos($_POST['pregunta15']);
$opiniones = limpiarDatos($_POST['opiniones']);

$stmt = $conn->prepare("INSERT INTO encuesta_mandos (
    servicio, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6,
    pregunta7, pregunta8, pregunta9, pregunta10, pregunta11,
    pregunta12, pregunta13, pregunta14, pregunta15, opiniones) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param("sssssssssssssssss",
    $servicio,$pregunta1,$pregunta2, $pregunta3, $pregunta4,$pregunta5,
    $pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10,
    $pregunta11,$pregunta12,$pregunta13,$pregunta14,$pregunta15,$opiniones
);



if ($stmt->execute()) {
    header("Location: gracias.php");
    exit();
}

$stmt->close();
$conn->close();
?>