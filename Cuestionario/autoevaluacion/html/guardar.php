<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoprueba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
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
$opiniones = $_POST['opinioness'];

$sql = "INSERT INTO cuestionario_satisfaccion (nombre, pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,
pregunta8,pregunta9,pregunta10,pregunta11,pregunta12,pregunta13
pregunta14,pregunta15,pregunta16,pregunta17,pregunta18,opiniones) 
VALUES ('$nombre', '$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$pregunta7',
'$pregunta8','$pregunta9','$pregunta10','$pregunta11','$pregunta12','$pregunta13','$pregunta14','$pregunta15',
'$pregunta16','$pregunta17','$pregunta18','$opiniones',)";



if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>