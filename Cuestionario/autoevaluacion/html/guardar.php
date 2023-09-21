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

$nombre = limpiarDatos($_POST["nombre"]); 
$pregunta1 = limpiarDatos($_POST["pregunta1"]); 
$pregunta2 = limpiarDatos($_POST["pregunta2"]); 
$pregunta3 = limpiarDatos($_POST["pregunta3"]); 
$pregunta4 = limpiarDatos($_POST["pregunta4"]); 
$pregunta5 = limpiarDatos($_POST["pregunta5"]); 
$pregunta6 = limpiarDatos($_POST["pregunta6"]); 
$pregunta7 = limpiarDatos($_POST["pregunta7"]); 
$pregunta8 = limpiarDatos($_POST["pregunta8"]); 
$pregunta9 = limpiarDatos($_POST["pregunta9"]); 
$pregunta10 = limpiarDatos($_POST["pregunta10"]); 
$pregunta11 = limpiarDatos($_POST["pregunta11"]); 
$pregunta12 = limpiarDatos($_POST["pregunta12"]);
$pregunta13 = limpiarDatos($_POST["pregunta13"]); 
$pregunta14 = limpiarDatos($_POST["pregunta14"]); 
$pregunta15 = limpiarDatos($_POST["pregunta15"]);
$opiniones = limpiarDatos($_POST["opiniones"]); 
$pregunta16 = limpiarDatos($_POST["pregunta16"]); 
$observaciones_pregunta16 = limpiarDatos($_POST["observaciones_pregunta16"]); 
$pregunta17 = limpiarDatos($_POST["pregunta17"]); 
$observaciones_pregunta17 = limpiarDatos($_POST["observaciones_pregunta17"]); 

$pregunta18 = limpiarDatos($_POST["pregunta18"]); 
$observaciones_pregunta18 = limpiarDatos($_POST["observaciones_pregunta18"]); 

$pregunta19 = limpiarDatos($_POST["pregunta19"]);
$observaciones_pregunta19 = limpiarDatos($_POST["observaciones_pregunta19"]); 

$pregunta20 = limpiarDatos($_POST["pregunta20"]);
$observaciones_pregunta20 = limpiarDatos($_POST["observaciones_pregunta20"]); 

$pregunta21 = limpiarDatos($_POST["pregunta21"]);
$observaciones_pregunta21 = limpiarDatos($_POST["observaciones_pregunta21"]); 

$pregunta22 = limpiarDatos($_POST["pregunta22"]); 
$observaciones_pregunta22 = limpiarDatos($_POST["observaciones_pregunta22"]); 

$pregunta23 = limpiarDatos($_POST["pregunta23"]);
$observaciones_pregunta23 = limpiarDatos($_POST["observaciones_pregunta23"]); 

$pregunta24 = limpiarDatos($_POST["pregunta24"]);
$observaciones_pregunta24 = limpiarDatos($_POST["observaciones_pregunta24"]); 

$pregunta25 = limpiarDatos($_POST["pregunta25"]);
$observaciones_pregunta25 = limpiarDatos($_POST["observaciones_pregunta25"]); 

$pregunta26 = limpiarDatos($_POST["pregunta26"]);
$observaciones_pregunta26 = limpiarDatos($_POST["observaciones_pregunta26"]); 

$pregunta27 = limpiarDatos($_POST["pregunta27"]);
$observaciones_pregunta27 = limpiarDatos($_POST["observaciones_pregunta27"]); 

$pregunta28 = limpiarDatos($_POST["pregunta28"]);
$observaciones_pregunta28 = limpiarDatos($_POST["observaciones_pregunta28"]); 

$pregunta29 = limpiarDatos($_POST["pregunta29"]);
$observaciones_pregunta29 = limpiarDatos($_POST["observaciones_pregunta29"]); 
 
$pregunta30 = limpiarDatos($_POST["pregunta30"]);
$observaciones_pregunta30 = limpiarDatos($_POST["observaciones_pregunta30"]); 

$pregunta31 = limpiarDatos($_POST["pregunta31"]); 
$observaciones_pregunta31 = limpiarDatos($_POST["observaciones_pregunta31"]); 
$pregunta32 = limpiarDatos($_POST["pregunta32"]);
$observaciones_pregunta32 = limpiarDatos($_POST["observaciones_pregunta32"]);  
$pregunta33 = limpiarDatos($_POST["pregunta33"]);
$observaciones_pregunta33 = limpiarDatos($_POST["observaciones_pregunta33"]);  
$pregunta34 = limpiarDatos($_POST["pregunta34"]);
$observaciones_pregunta34 = limpiarDatos($_POST["observaciones_pregunta34"]); 
$opiniones1 = limpiarDatos($_POST["opiniones1"]);   


$stmt = $conn->prepare("INSERT INTO Cuestionario_satisfaccion (
    nombre, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, 
    pregunta8, pregunta9, pregunta10, pregunta11, pregunta12, pregunta13, pregunta14, 
    pregunta15, opiniones, pregunta16, observaciones_pregunta16, pregunta17, 
    observaciones_pregunta17, pregunta18, observaciones_pregunta18, pregunta19, 
    observaciones_pregunta19, pregunta20, observaciones_pregunta20, pregunta21, 
    observaciones_pregunta21, pregunta22, observaciones_pregunta22, pregunta23, 
    observaciones_pregunta23, pregunta24, observaciones_pregunta24, pregunta25, 
    observaciones_pregunta25, pregunta26, observaciones_pregunta26, pregunta27, 
    observaciones_pregunta27, pregunta28, observaciones_pregunta28, pregunta29, 
    observaciones_pregunta29, pregunta30, observaciones_pregunta30, pregunta31, 
    observaciones_pregunta31, pregunta32, observaciones_pregunta32, pregunta33, 
    observaciones_pregunta33, pregunta34, observaciones_pregunta34, opiniones1
) VALUES (
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
    ?, ?, ?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
$nombre, $pregunta1, $pregunta2, $pregunta3, $pregunta4, $pregunta5, $pregunta6, $pregunta7, $pregunta8, $pregunta9, $pregunta10, $pregunta11,
$pregunta12, $pregunta13, $pregunta14, $pregunta15, $opiniones, $pregunta16, $observaciones_pregunta16, $pregunta17, $observaciones_pregunta17,
$pregunta18, $observaciones_pregunta18, $pregunta19, $observaciones_pregunta19, $pregunta20, $observaciones_pregunta20, $pregunta21,
$observaciones_pregunta21, $pregunta22, $observaciones_pregunta22, $pregunta23, $observaciones_pregunta23, $pregunta24,
$observaciones_pregunta24, $pregunta25, $observaciones_pregunta25, $pregunta26, $observaciones_pregunta26, $pregunta27,
$observaciones_pregunta27, $pregunta28, $observaciones_pregunta28, $pregunta29, $observaciones_pregunta29, $pregunta30,
$observaciones_pregunta30, $pregunta31, $observaciones_pregunta31, $pregunta32, $observaciones_pregunta32, $pregunta33,
$observaciones_pregunta33, $pregunta34, $observaciones_pregunta34, $opiniones1);

// Ejecuta la consulta
if ($stmt->execute()) {
    header("Location: gracias.php");
    exit();
}

$stmt->close();
$conn->close();
?>
