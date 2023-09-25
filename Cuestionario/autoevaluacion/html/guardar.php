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


$nombre = limpiarDatos($_POST['nombre']);
$pregunta1 = limpiarDatos($_POST['pregunta1']);
$pregunta2 = limpiarDatos($_POST['pregunta2']);
$pregunta3 = limpiarDatos($_POST['pregunta3']);
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
$pregunta16 = limpiarDatos($_POST['pregunta16']);
$pregunta17 = limpiarDatos($_POST['pregunta17']);
$pregunta18 = limpiarDatos($_POST['pregunta18']);
$opiniones19 = limpiarDatos($_POST['opiniones19']);
//
$prueba1 = limpiarDatos($_POST['prueba1']);
$observaciones_prueba1 = limpiarDatos($_POST['observaciones_prueba1']);
$prueba2 = limpiarDatos($_POST['prueba2']);
$observaciones_prueba2 = limpiarDatos($_POST['observaciones_prueba2']);
$prueba3 = limpiarDatos($_POST['prueba3']);
$observaciones_prueba3 = limpiarDatos($_POST['observaciones_prueba3']);
$prueba4 = limpiarDatos($_POST['prueba4']);
$observaciones_prueba4 = limpiarDatos($_POST['observaciones_prueba4']);
$prueba5 = limpiarDatos($_POST['prueba5']);
$observaciones_prueba5 = limpiarDatos($_POST['observaciones_prueba5']);
$prueba6 = limpiarDatos($_POST['prueba6']);
$observaciones_prueba6 = limpiarDatos($_POST['observaciones_prueba6']);
$prueba7 = limpiarDatos($_POST['prueba7']);
$observaciones_prueba7 = limpiarDatos($_POST['observaciones_prueba7']);
$prueba8 = limpiarDatos($_POST['prueba8']);
$observaciones_prueba8 = limpiarDatos($_POST['observaciones_prueba8']);
$prueba9 = limpiarDatos($_POST['prueba9']);
$observaciones_prueba9 = limpiarDatos($_POST['observaciones_prueba9']);
$prueba10 = limpiarDatos($_POST['prueba10']);
$observaciones_prueba10 = limpiarDatos($_POST['observaciones_prueba10']);
$prueba11 = limpiarDatos($_POST['prueba11']);
$observaciones_prueba11 = limpiarDatos($_POST['observaciones_prueba11']);
$prueba12 = limpiarDatos($_POST['prueba12']);
$observaciones_prueba12 = limpiarDatos($_POST['observaciones_prueba12']);
$prueba13 = limpiarDatos($_POST['prueba13']);
$observaciones_prueba13 = limpiarDatos($_POST['observaciones_prueba13']);
$prueba14 = limpiarDatos($_POST['prueba14']);
$observaciones_prueba14 = limpiarDatos($_POST['observaciones_prueba14']);
$prueba15 = limpiarDatos($_POST['prueba15']);
$observaciones_prueba15 = limpiarDatos($_POST['observaciones_prueba15']);
$prueba16 = limpiarDatos($_POST['prueba16']);
$observaciones_prueba16 = limpiarDatos($_POST['observaciones_prueba16']);
$prueba17 = limpiarDatos($_POST['prueba17']);
$observaciones_prueba17 = limpiarDatos($_POST['observaciones_prueba17']);
$prueba18 = limpiarDatos($_POST['prueba18']);
$observaciones_prueba18 = limpiarDatos($_POST['observaciones_prueba18']);
$prueba19 = limpiarDatos($_POST['prueba19']);
$observaciones_prueba19 = limpiarDatos($_POST['observaciones_prueba19']);
$opiniones19 = limpiarDatos($_POST['opiniones19']);

$stmt = $conn->prepare("INSERT INTO Cuestionario_satisfaccion (
    nombre,
    pregunta1,
    pregunta2,
    pregunta3,
    pregunta4,
    pregunta5,
    pregunta6,
    pregunta7, 
    pregunta8,
    pregunta9,
    pregunta10,
    pregunta11,
    pregunta12, 
    pregunta13, 
    pregunta14, 
    pregunta15, 
    pregunta16, 
    pregunta17,
    pregunta18, 
    opiniones,  
    prueba1, observaciones_prueba1, 
    prueba2, observaciones_prueba2,
    prueba3, observaciones_prueba3, 
    prueba4, observaciones_prueba4, 
    prueba5, observaciones_prueba5,
    prueba6, observaciones_prueba6, 
    prueba7,observaciones_prueba7, 
    prueba8, observaciones_prueba8, 
    prueba9, observaciones_prueba9,
    prueba10,observaciones_prueba10, 
    prueba11, observaciones_prueba11,
    prueba12, observaciones_prueba12,
    prueba13,observaciones_prueba13, 
    prueba14, observaciones_prueba14,
    prueba15, observaciones_prueba15,
    prueba16,observaciones_prueba16,
    prueba17, observaciones_prueba17,
    prueba18, observaciones_prueba18,
    prueba19, observaciones_prueba19, 
    opiniones19 
) VALUES (?,?,?,?,?,?,?,?,?,?,
?,?,?,?,?,?,?,?,?,?,
?,?,?,?,?,?,?,?,?,?,
?,?,?,?,?,?,?,?,?,?,
?,?,?,?,?,?,?,?,?,?,
?,?,?,?,?,?,?,?,?)");

if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
    $nombre,
    $pregunta1,
    $pregunta2,
    $pregunta3,
    $pregunta4,
    $pregunta5,
    $pregunta6,
    $pregunta7,
    $pregunta8,
    $pregunta9,
    $pregunta10,
    $pregunta11,
    $pregunta12,
    $pregunta13,
    $pregunta14,
    $pregunta15,
    $pregunta16,
    $pregunta17,
    $pregunta18,
    $opiniones19,
    $prueba1,
    $observaciones_prueba1,
    $prueba2,
    $observaciones_prueba2,
    $prueba3,
    $observaciones_prueba3,
    $prueba4,
    $observaciones_prueba4,
    $prueba5,
    $observaciones_prueba5,
    $prueba6,
    $observaciones_prueba6,
    $prueba7,
    $observaciones_prueba7,
    $prueba8,
    $observaciones_prueba8,
    $prueba9,
    $observaciones_prueba9,
    $prueba10,
    $observaciones_prueba10,
    $prueba11,
    $observaciones_prueba11,
    $prueba12,
    $observaciones_prueba12,
    $prueba13,
    $observaciones_prueba13,
    $prueba14,
    $observaciones_prueba14,
    $prueba15,
    $observaciones_prueba15,
    $prueba16,
    $observaciones_prueba16,
    $prueba17,
    $observaciones_prueba17,
    $prueba18,
    $observaciones_prueba18,
    $prueba19,
    $observaciones_prueba19,
    $opiniones19

);

if ($stmt->execute()) {
    header("Location: gracias.php");
    exit();
}

$stmt->close();
$conn->close();
?>