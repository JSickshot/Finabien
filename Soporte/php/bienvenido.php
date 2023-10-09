<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../css/principal.css">

</head>
<body>
    

   
    <p></p>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
    
    <a href="bitacora-mantenimiento.php"><button>Bitácora de Mantenimiento</button></a>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <a class="logout-btn" href="cerrar.php">Cerrar sesión</a>
    <div class="image-container">
    </div>
    <br>


</body>
</html>