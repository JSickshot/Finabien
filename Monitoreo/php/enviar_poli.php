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


    $stmt = $conn->prepare("INSERT INTO datos_formulario (
        fecha, hora, folio, registro, fecha1,
        hora1, sucursal, gerencia, region, camaras, 
        axis, mobotix, grabador_local, siC, noC,
        siA, noA, DSC, Hone, sidsc, 
        nodsc, sih, noh, rob, intrusion, 
        Bmuebles, dano, Montorobo, bienesymuebles, Z1, 
        Z2, Z3, Z4, Z6, OZ, 
        CA, maproxrobo, tfalla, eventocomo, NPOLICIA, 
        NPATRULLA, NOPERADOR, NREPORTE, ATT, cargo, 
        tipo_llamada_entrada, tipo_llamada_salida, DESCHECHOS, MONITORISTA
        )
        VALUES (
            ?,?,?,?,?,?,?,?,?,?, 
            ?,?,?,?,?,?,?,?,?,?, 
            ?,?,?,?,?,?,?,?,?,?, 
            ?,?,?,?,?,?,?,?,?,?, 
            ?,?,?,?,?,?,?,?,?) ");

if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conn->error);
}


    $stmt->bind_param("
    ssssssssss
    ssssssssss
    ssssssssss
    ssssssssss
    sssssssss
    ",
    $fecha, $hora, $folio, $registro, $fecha1,
    $hora1, $sucursal, $gerencia, $region, $camaras, 
    $axis, $mobotix, $grabador_local, $siC, $noC,
    $siA, $noA, $DSC, $Hone, $sidsc, 
    $nodsc, $sih, $noh, $rob, $intrusion, 
    $Bmuebles, $dano, $Montorobo, $bienesymuebles, $Z1, 
    $Z2, $Z3, $Z4, $Z6, $OZ, 
    $CA, $maproxrobo, $tfalla, $eventocomo, $NPOLICIA, 
    $NPATRULLA, $NOPERADOR, $NREPORTE, $ATT, $cargo, 
    $tipo_llamada_entrada, $tipo_llamada_salida, $DESCHECHOS, $MONITORISTA
    );
    
    $stmt->execute();


    if ($stmt->execute()) {
        header("Location: gracias.php");
        exit();
    }
    $stmt->close();
    $conn->close();
}
?>
