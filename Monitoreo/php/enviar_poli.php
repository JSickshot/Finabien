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

    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $registro = $_POST['registro'];
    $fecha1 = $_POST['fecha1'];
    $hora1 = $_POST['hora1'];
    $sucursal = $_POST['sucursal'];
    $gerencia = $_POST['gerencia'];
    $region = $_POST['region'];
    $camaras = $_POST['camaras'];
    $axis = $_POST['axis'];
    $mobotix = $_POST['mobotix'];
    $grabador_local = $_POST['grabador_local'];
    $siC = $_POST['siC'];
    $noC = $_POST['noC'];
    $siA = $_POST['siA'];
    $noA = $_POST['noA'];
    $DSC = $_POST['DSC'];
    $Hone = $_POST['Hone'];
    $sidsc = $_POST['sidsc'];
    $nodsc = $_POST['nodsc'];
    $sih = $_POST['sih'];
    $noh = $_POST['noh'];
    $rob = $_POST['rob'];
    $intrusion = $_POST['intrusion'];
    $Bmuebles = $_POST['Bmuebles'];
    $dano = $_POST['dano'];
    $Montorobo = $_POST['Montorobo'];
    $bienesymuebles = $_POST['bienesymuebles'];
    $Z1 = $_POST['Z1'];
    $Z2 = $_POST['Z2'];
    $Z3 = $_POST['Z3'];
    $Z4 = $_POST['Z4'];
    $Z6 = $_POST['Z6'];
    $OZ = $_POST['OZ'];
    $CA = $_POST['CA'];
    $maproxrobo = $_POST['maproxrobo'];
    $tfalla = $_POST['tfalla'];
    $eventocomo = $_POST['eventocomo'];
    $NPOLICIA = $_POST['NPOLICIA'];
    $NPATRULLA = $_POST['NPATRULLA'];
    $NOPERADOR = $_POST['NOPERADOR'];
    $NREPORTE = $_POST['NREPORTE'];
    $ATT = $_POST['ATT'];
    $cargo = $_POST['cargo'];
    $tipo_llamada_entrada = $_POST['tipo_llamada_entrada'];
    $tipo_llamada_salida = $_POST['tipo_llamada_salida'];
    $DESCHECHOS = $_POST['DESCHECHOS'];
    $MONITORISTA = $_POST['MONITORISTA'];


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


    $stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssss", 
    $fecha, $hora, $folio, $fecha1, $hora1, 
    $registro, $sucursal, $gerencia, $region, 
    $camaras, $axis, $mobotix, $grabador_local, 
    $siC, $noC, $siA, $noA, $DSC, $Hone, $sidsc,
     $nodsc, $sih, $noh, $rob, $intrusion, $Bmuebles, 
     $dano, $Montorobo, $bienesymuebles, $Z1, $Z2, $Z3, 
     $Z4, $Z6, $OZ, $CA, $maproxrobo, $tfalla, $eventocomo, 
     $NPOLICIA, $NPATRULLA, $NOPERADOR, $NREPORTE, $ATT, 
     $cargo, $tipo_llamada_entrada, $tipo_llamada_salida,
      $DESCHECHOS, $MONITORISTA);


    if ($stmt->execute()) {
        header("Location: gracias.php");
        exit();
    }
    $stmt->close();
    $conn->close();
}
?>