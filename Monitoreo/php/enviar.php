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

    function limpiarDatos($dato)
{
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}


    $fecha = limpiarDatos($_POST["fecha"]);
    $hora = limpiarDatos($_POST["hora"]);
    $folio = limpiarDatos($_POST["folio"]);
    //primera parte
    $fecha1 = limpiarDatos($_POST["fecha1"]);
    $hora1 = limpiarDatos($_POST["hora1"]);
    //
    $registro = limpiarDatos($_POST["registro"]);
    $sucursal = limpiarDatos($_POST["sucursal"]);
    $gerencia = limpiarDatos($_POST["gerencia"]);
    $region = limpiarDatos($_POST["region"]);
    //ficha tecnica
    $camaras = limpiarDatos($_POST["camaras"]) ? "Sí" : "No";
    $axis = limpiarDatos($_POST["axis"]) ? "Sí" : "No";
    $mobotix = limpiarDatos($_POST["mobotix"]) ? "Sí" : "No";
    $grabador_local = limpiarDatos($_POST["grabador_local"]) ? "Sí" : "No";
    //
    $siC = limpiarDatos($_POST["siC"]) ? "Sí" : "No";
    $noC = limpiarDatos($_POST["noC"]) ? "Sí" : "No";
    $siA = limpiarDatos($_POST["siA"]) ? "Sí" : "No";
    $noA = limpiarDatos($_POST["noA"]) ? "Sí" : "No";
    //alarmas
    $DSC = limpiarDatos($_POST["DSC"]) ? "Sí" : "No";
    $Hone = limpiarDatos($_POST["Hone"]) ? "Sí" : "No";
    $sidsc = limpiarDatos($_POST["sidsc"]) ? "Sí" : "No";
    $nodsc = limpiarDatos($_POST["nodsc"]) ? "Sí" : "No";
    $sih = limpiarDatos($_POST["sih"]) ? "Sí" : "No";
    $noh = limpiarDatos($_POST["noh"]) ? "Sí" : "No";
    //evento
    $rob = limpiarDatos($_POST["rob"]) ? "Sí" : "No";
    $intrusion = limpiarDatos($_POST["intrusion"]) ? "Sí" : "No";
    $Bmuebles = limpiarDatos($_POST["muebles"]) ? "Sí" : "No";
    $dano = limpiarDatos($_POST["dano"]) ? "Sí" : "No";
    //monto
    $Montorobo = limpiarDatos($_POST["Montorobo"]);
    $bienesymuebles = limpiarDatos($_POST["bienesymuebles"]);
    //señales
    $Z1 = limpiarDatos($_POST["Z1"]) ? "Sí" : "No";
    $Z2 = limpiarDatos($_POST["Z2"]) ? "Sí" : "No";
    $Z3 = limpiarDatos($_POST["Z3"]) ? "Sí" : "No";
    $Z4 = limpiarDatos($_POST["Z4"]) ? "Sí" : "No";
    $Z6 = limpiarDatos($_POST["Z6"]) ? "Sí" : "No";
    $OZ = limpiarDatos($_POST["OZ"]) ? "Sí" : "No";
    $CA = limpiarDatos($_POST["CA"]) ? "Sí" : "No";
    //activas
    $maproxrobo = limpiarDatos($_POST["maproxrobo"]);
    $tfalla = limpiarDatos($_POST["tfalla"]);
    $eventocomo = limpiarDatos($_POST["eventocomo"]);
    $determina = limpiarDatos($_POST["determina"]);
    //
    $NPOLICIA = limpiarDatos($_POST["NPOLICIA"]);
    $NPATRULLA = limpiarDatos($_POST["NPATRULLA"]);
    $NOPERADOR = limpiarDatos($_POST["NOPERADOR"]);
    $NREPORTE = limpiarDatos($_POST["NREPORTE"]);
    //
    $ATT = limpiarDatos($_POST["ATT"]);
    $cargo = limpiarDatos($_POST["cargo"]);
    $tipo_llamada_entrada = limpiarDatos($_POST["ENTRADA"]) ? "Sí" : "No";
    $tipo_llamada_salida = limpiarDatos($_POST["SALIDA"]) ? "Sí" : "No";
    $DESCHECHOS = limpiarDatos($_POST["HECHOS"]);
    $MONITORISTA = limpiarDatos($_POST["MONITORISTA"]);

    $stmt = $conn->prepare("INSERT INTO datos_formulario (
        fecha, hora, folio, registro, 
        fecha1, hora1, sucursal, gerencia, 
        region, camaras, axis, mobotix, 
        grabador_local, siC, noC,siA, 
        noA, DSC, Hone, sidsc, 
        nodsc, sih,noh, rob, 
        intrusion, Bmuebles, dano, Montorobo, 
        bienesymuebles, Z1, Z2, Z3,
        Z4, Z6, OZ, CA, 
        maproxrobo, tfalla, eventocomo, NPOLICIA, 
        NPATRULLA, NOPERADOR, NREPORTE, ATT, 
        cargo, tipo_llamada_entrada, tipo_llamada_salida, DESCHECHOS,
        MONITORISTA)
        VALUES (
            ?,?,?,?,?,?,?,?,?,?, 
            ?,?,?,?,?,?,?,?,?,?, 
            ?,?,?,?,?,?,?,?,?,?, 
            ?,?,?,?,?,?,?,?,?,?, 
            ?,?,?,?,?,?,?,?,? 
        )");

if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conn->error);
}


    $stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssss",
    $fecha, $hora, $folio, $fecha1, $hora1, $registro, $sucursal, $gerencia, $region,
    $camaras, $axis, $mobotix, $grabador_local, $siC, $noC, $siA, $noA,
    $DSC, $Hone, $sidsc, $nodsc, $sih, $noh, $rob, $intrusion,
    $Bmuebles, $dano, $Montorobo, $bienesymuebles, $Z1, $Z2, $Z3, $Z4,
    $Z6, $OZ, $CA, $maproxrobo, $tfalla, $eventocomo, $NPOLICIA,
    $NPATRULLA, $NOPERADOR, $NREPORTE, $ATT, $cargo, $tipo_llamada_entrada,
    $tipo_llamada_salida, $DESCHECHOS, $MONITORISTA);
    $stmt->execute();


    if ($stmt->execute()) {
        header("Location: gracias.php");
        exit();
    }
    $stmt->close();
    $conn->close();
}
?>
