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
    <h1>Bienvenido <?php echo $username; ?> <br> a financiera para el bienestar</h1>

  
    <p></p>
    <a href="../html/bitacora-mantenimiento.html"><button>Bitácora de Mantenimiento</button></a>
    
    
    <br>
    <a class="logout-btn" href="cerrar.php">Cerrar sesión</a>
    <div class="image-container">
        <img class="image" src="https://www.gob.mx/cms/uploads/identity/image/41358/Banner_Principal.jpg" alt="Descripción de la imagen">
    </div>
    <br>

   
</body>
</html>