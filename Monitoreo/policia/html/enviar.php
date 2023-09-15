<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "finabien";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    $fecha = $conn->real_escape_string($_POST["fecha"]);
    $hora = $conn->real_escape_string($_POST["hora"]);
    $folio = $conn->real_escape_string($_POST["folio"]);
    $registro = $conn->real_escape_string($_POST["registro"]);
    $fecha1 = $conn->real_escape_string($_POST["fecha1"]);
    $hora1 = $conn->real_escape_string($_POST["hora1"]);
    $sucursal = $conn->real_escape_string($_POST["sucursal"]);
    $gerencia = $conn->real_escape_string($_POST["gerencia"]);
    $region = $conn->real_escape_string($_POST["region"]);

    $camaras = isset($_POST["camaras"]) ? "Sí" : "No";
    $axis = isset($_POST["axis"]) ? "Sí" : "No";
    $mobotix = isset($_POST["mobotix"]) ? "Sí" : "No";
    $grabador_local = isset($_POST["grabador_local"]) ? "Sí" : "No";
    $siC = isset($_POST["siC"]) ? "Sí" : "No";
    $noC = isset($_POST["noC"]) ? "Sí" : "No";
    $DSC = isset($_POST["DSC"]) ? "Sí" : "No";
    $Hone = isset($_POST["Hone"]) ? "Sí" : "No";
    $sim = isset($_POST["sim"]) ? "Sí" : "No";
    $nom = isset($_POST["nom"]) ? "Sí" : "No";
    $rob = isset($_POST["rob"]) ? "Sí" : "No";
    $intrusion = isset($_POST["intrusion"]) ? "Sí" : "No";
    $Bmuebels = isset($_POST["Bmuebels"]) ? "Sí" : "No";
    $dano = isset($_POST["dano"]) ? "Sí" : "No";
    $Montorobo = $conn->real_escape_string($_POST["Montorobo"]);
    $bienesymuebles = $conn->real_escape_string($_POST["bienesymuebles"]);
    $Z1 = isset($_POST["Z1"]) ? "Sí" : "No";
    $Z2 = isset($_POST["Z2"]) ? "Sí" : "No";
    $Z3 = isset($_POST["Z3"]) ? "Sí" : "No";
    $Z4 = isset($_POST["Z4"]) ? "Sí" : "No";
    $Z6 = isset($_POST["Z6"]) ? "Sí" : "No";
    $OZ = isset($_POST["OZ"]) ? "Sí" : "No";
    $CA = isset($_POST["CA"]) ? "Sí" : "No";
    $maproxrobo = $conn->real_escape_string($_POST["maproxrobo"]);
    $tfalla = $conn->real_escape_string($_POST["tfalla"]);
    $eventocomo = $conn->real_escape_string($_POST["eventocomo"]);
    $NPOLICIA = $conn->real_escape_string($_POST["NPOLICIA"]);
    $NPATRULLA = $conn->real_escape_string($_POST["NPATRULLA"]);
    $NOPERADOR = $conn->real_escape_string($_POST["NOPERADOR"]);
    $NREPORTE = $conn->real_escape_string($_POST["NREPORTE"]);
    $ATT = $conn->real_escape_string($_POST["ATT"]);
    $cargo = $conn->real_escape_string($_POST["cargo"]);
    $tipo_llamada_entrada = isset($_POST["ENTRADA"]) ? "Sí" : "No";
    $tipo_llamada_salida = isset($_POST["SALIDA"]) ? "Sí" : "No";
    $DESCHECHOS = $conn->real_escape_string($_POST["HECHOS"]);
    $MONITORISTA = $conn->real_escape_string($_POST["MONITORISTA"]);

    $sql = "INSERT INTO datos_formulario (
        fecha, hora, folio, registro, fecha1, hora1, sucursal, gerencia, region,
        camaras, axis, mobotix, grabador_local, siC, noC, DSC, Hone, sim, nom,
        rob, intrusion, Bmuebels, dano, Montorobo, bienesymuebles, Z1, Z2, Z3,
        Z4, Z6, OZ, CA, maproxrobo, tfalla, eventocomo, NPOLICIA, NPATRULLA, NOPERADOR,
        NREPORTE, ATT, cargo, tipo_llamada_entrada, tipo_llamada_salida, DESCHECHOS,
        MONITORISTA)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    $stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss", 
$fecha, $hora, $folio, $registro, $fecha1, $hora1, $sucursal, $gerencia, $region, $camaras, $axis, $mobotix, $grabador_local, $siC, $noC, $DSC, $Hone, $sim, $nom, $rob, $intrusion, $Bmuebels, $dano, $Montorobo, $bienesymuebles, $Z1, $Z2, $Z3, $Z4, $Z6, $OZ, $CA, $maproxrobo, $tfalla, $eventocomo, $NPOLICIA, $NPATRULLA, $NOPERADOR, $NREPORTE, $ATT, $cargo, $tipo_llamada_entrada, $tipo_llamada_salida, $DESCHECHOS, $MONITORISTA);

   

    if ($stmt->execute()) {
        echo "Los datos se han insertado correctamente en la base de datos.";
        header("Location: gracias.php");
        exit();
    } else {
        echo "Error al insertar los datos: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
