<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maestra";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];

// 1er form
$pregunta1 = $_POST['pregunta1'];
$pregunta2 = $_POST['pregunta2'];
$pregunta3 = $_POST['pregunta3'];
$pregunta4 = $_POST['pregunta4'];
$pregunta5 = $_POST['pregunta5'];
$pregunta6 = $_POST['pregunta6'];
$pregunta7 = $_POST['pregunta7'];
$pregunta8 = $_POST['pregunta8'];
$pregunta9 = $_POST['pregunta9'];
$pregunta10 = $_POST['pregunta10'];
$pregunta11 = $_POST['pregunta11'];
$pregunta12 = $_POST['pregunta12'];
$pregunta13 = $_POST['pregunta13'];
$pregunta14 = $_POST['pregunta14'];
$pregunta15 = $_POST['pregunta15'];
$pregunta16 = $_POST['pregunta16'];
$pregunta17 = $_POST['pregunta17'];
$pregunta18 = $_POST['pregunta18'];
$opiniones19 = $_POST["opiniones19"];

// 2do form
$prueba1 = $_POST['prueba1'];
$observaciones_prueba1 = $_POST['observaciones_prueba1'];
$prueba2 = $_POST['prueba2'];
$observaciones_prueba2 = $_POST['observaciones_prueba2'];
$prueba3 = $_POST['prueba3'];
$observaciones_prueba3 = $_POST['observaciones_prueba3'];
$prueba4 = $_POST['prueba4'];
$observaciones_prueba4 = $_POST['observaciones_prueba4'];
$prueba5 = $_POST['prueba5'];
$observaciones_prueba5 = $_POST['observaciones_prueba5'];
$prueba6 = $_POST['prueba6'];
$observaciones_prueba6 = $_POST['observaciones_prueba6'];
$prueba7 = $_POST['prueba7'];
$observaciones_prueba7 = $_POST['observaciones_prueba7'];
$prueba8 = $_POST['prueba8'];
$observaciones_prueba8 = $_POST['observaciones_prueba8'];
$prueba9 = $_POST['prueba9'];
$observaciones_prueba9 = $_POST['observaciones_prueba9'];
$prueba10 = $_POST['prueba10'];
$observaciones_prueba10 = $_POST['observaciones_prueba10'];
$prueba11 = $_POST['prueba11'];
$observaciones_prueba11 = $_POST['observaciones_prueba11'];
$prueba12 = $_POST['prueba12'];
$observaciones_prueba12 = $_POST['observaciones_prueba12'];
$prueba13 = $_POST['prueba13'];
$observaciones_prueba13 = $_POST['observaciones_prueba13'];
$prueba14 = $_POST['prueba14'];
$observaciones_prueba14 = $_POST['observaciones_prueba14'];
$prueba15 = $_POST['prueba15'];
$observaciones_prueba15 = $_POST['observaciones_prueba15'];
$prueba16 = $_POST['prueba16'];
$observaciones_prueba16 = $_POST['observaciones_prueba16'];
$prueba17 = $_POST['prueba17'];
$observaciones_prueba17 = $_POST['observaciones_prueba17'];
$prueba18 = $_POST['prueba18'];
$observaciones_prueba18 = $_POST['observaciones_prueba18'];

$sql = "INSERT INTO Cuestionario_satisfaccion(nombre, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10, pregunta11, pregunta12, pregunta13, pregunta14, pregunta15, pregunta16, pregunta17, pregunta18, opiniones19, prueba1, observaciones_prueba1, prueba2, observaciones_prueba2, prueba3, observaciones_prueba3, prueba4, observaciones_prueba4, prueba5, observaciones_prueba5, prueba6, observaciones_prueba6, prueba7, observaciones_prueba7, prueba8, observaciones_prueba8, prueba9, observaciones_prueba9, prueba10, observaciones_prueba10, prueba11, observaciones_prueba11, prueba12, observaciones_prueba12, prueba13, observaciones_prueba13, prueba14, observaciones_prueba14, prueba15, observaciones_prueba15, prueba16, observaciones_prueba16, prueba17, observaciones_prueba17, prueba18, observaciones_prueba18) 
VALUES ('$nombre', '$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$pregunta5', '$pregunta6', '$pregunta7', '$pregunta8', '$pregunta9', '$pregunta10', '$pregunta11', '$pregunta12', '$pregunta13', '$pregunta14', '$pregunta15', '$pregunta16', '$pregunta17', '$pregunta18', '$opiniones19', '$prueba1', '$observaciones_prueba1', '$prueba2', '$observaciones_prueba2', '$prueba3', '$observaciones_prueba3', '$prueba4', '$observaciones_prueba4', '$prueba5', '$observaciones_prueba5', '$prueba6', '$observaciones_prueba6', '$prueba7', '$observaciones_prueba7', '$prueba8', '$observaciones_prueba8', '$prueba9', '$observaciones_prueba9', '$prueba10', '$observaciones_prueba10', '$prueba11', '$observaciones_prueba11', '$prueba12', '$observaciones_prueba12', '$prueba13', '$observaciones_prueba13', '$prueba14', '$observaciones_prueba14', '$prueba15', '$observaciones_prueba15', '$prueba16', '$observaciones_prueba16', '$prueba17', '$observaciones_prueba17', '$prueba18', '$observaciones_prueba18')";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
