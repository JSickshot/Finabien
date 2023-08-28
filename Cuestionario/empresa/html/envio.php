<?php
require_once '../conect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    // Obtener los datos del formulario
    $tecnico = $_POST["tecnico"];
    $nombre = $_POST["gerencia"];
    $actividades = $_POST["actividades"];
    $fortalezas = $_POST["fortalezas"];
    $mejoras = $_POST["mejoras"];
    $aportacion = $_POST["aportacion"];
    $pregunta18 = $_POST["pregunta18"];
    $pregunta23 = $_POST["pregunta23"];
    $pregunta24 = $_POST["pregunta24"];
    $pregunta25 = $_POST["pregunta25"];
    $pregunta5 = $_POST["pregunta5"];

    // Preparar y ejecutar la consulta SQL
    $sql = "INSERT INTO respuestas (tecnico, nombre, actividades, fortalezas, mejoras, aportacion, pregunta18, pregunta23, pregunta24, pregunta25, pregunta5)
            VALUES ('$tecnico', '$nombre', '$actividades', '$fortalezas', '$mejoras', '$aportacion', '$pregunta18', '$pregunta23', '$pregunta24', '$pregunta25', '$pregunta5')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos almacenados correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>


------------
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    require_once '../conect.php'; // Asegúrate de tener esta línea para la conexión

    // Capturar los datos del formulario
    // Aquí debes capturar todos los datos de las preguntas, opciones de radio y observaciones
    // Por ejemplo:
    $prueba1 = $_POST["prueba1"];
    $observaciones_prueba1 = $_POST["observaciones_prueba1"];
    $prueba2 = $_POST["prueba2"];
    $observaciones_prueba2 = $_POST["observaciones_prueba2"];
    // Repite el proceso para las demás preguntas...

    // Preparar y ejecutar la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO respuestas (prueba1, observaciones_prueba1, prueba2, observaciones_prueba2, ...) 
            VALUES ('$prueba1', '$observaciones_prueba1', '$prueba2', '$observaciones_prueba2', ...)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Datos almacenados correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
} else {
    echo "No se ha enviado el formulario.";
}
?>
