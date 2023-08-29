<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "moises";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $sucursal = $_POST["sucursal"];
    $estado = $_POST["estado"];
    $registro = $_POST["registro"];
    $region = $_POST["region"];

    $camaras = isset($_POST["camaras"]) ? "Camara seleccionada" : "Camara no seleccionada";
    $comunicacionCnm = isset($_POST["comunicacionCnm"]) ? "Comunicación al CNM seleccionada" : "Comunicación al CNM no seleccionada";
    $axis = isset($_POST["axis"]) ? "Axis seleccionado" : "Axis no seleccionado";
    $mobotix = isset($_POST["mobotix"]) ? "Mobotix seleccionado" : "Mobotix no seleccionado";
    $grabadorLocal = isset($_POST["grabador_local"]) ? "Grabador Local seleccionado" : "Grabador Local no seleccionado";

    $robo = isset($_POST["rob"]) ? "Robo seleccionado" : "Robo no seleccionado";
    $intrusion = isset($_POST["int"]) ? "Intrusión seleccionada" : "Intrusión no seleccionada";
    $bienesMueblesRobados = isset($_POST["muebles"]) ? "Bienes muebles robados seleccionados" : "Bienes muebles robados no seleccionados";
    $bienesMueblesDanados = isset($_POST["dano"]) ? "Bienes muebles dañados seleccionados" : "Bienes muebles dañados no seleccionados";

    $z1 = isset($_POST["Z1"]) ? "Z1 seleccionado" : "Z1 no seleccionado";
    $z2 = isset($_POST["Z2"]) ? "Z2 seleccionado" : "Z2 no seleccionado";
    $z3 = isset($_POST["Z3"]) ? "Z3 seleccionado" : "Z3 no seleccionado";
    $z4 = isset($_POST["Z4"]) ? "Z4 seleccionado" : "Z4 no seleccionado";
    $z6 = isset($_POST["Z6"]) ? "Z6 seleccionado" : "Z6 no seleccionado";
    $oz = isset($_POST["OZ"]) ? "OZ seleccionado" : "OZ no seleccionado";
    $ca = isset($_POST["CA"]) ? "CA seleccionado" : "CA no seleccionado";

    $numPolicia = $_POST["NPOLICIA"];
    $numPatrulla = $_POST["NPATRULLA"];
    $nombreOperador = $_POST["NOPERADOR"];
    $numReporte = $_POST["NREPORTE"];

    $atiende = $_POST["ATT"];
    $cargo = $_POST["cargo"];
    $tipoLlamadaEntrada = isset($_POST["ENTRADA"]) ? "Llamada de Entrada" : "";
    $tipoLlamadaSalida = isset($_POST["SALIDA"]) ? "Llamada de Salida" : "";
    $descripcionHechos = $_POST["DESCHECHOS"];

    $monitorista = $_POST["MONI"];

    // Consulta SQL para insertar datos en la tabla
    $sql = "INSERT INTO formularios_datos (fecha, hora, sucursal, estado, registro, region, camaras, comunicacionCnm, axis, mobotix, grabadorLocal, robo, intrusion, bienesMueblesRobados, bienesMueblesDanados, Z1, Z2, Z3, Z4, Z6, OZ, CA, numPolicia, numPatrulla, nombreOperador, numReporte, atiende, cargo, tipoLlamadaEntrada, tipoLlamadaSalida, descripcionHechos, monitorista) 
            VALUES ('$fecha', '$hora', '$sucursal', '$estado', '$registro', '$region', '$camaras', '$comunicacionCnm', '$axis', '$mobotix', '$grabadorLocal', '$robo', '$intrusion', '$bienesMueblesRobados', '$bienesMueblesDanados', '$z1', '$z2', '$z3', '$z4', '$z6', '$oz', '$ca', '$numPolicia', '$numPatrulla', '$nombreOperador', '$numReporte', '$atiende', '$cargo', '$tipoLlamadaEntrada', '$tipoLlamadaSalida', '$descripcionHechos', '$monitorista')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente en la base de datos.";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
    
    $conn->close();
}
?>
