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
  <link rel="stylesheet" href="../css/bienvenido.css">
</head>

<body>

  <div class="center-container">
    <div class="header">
      <h1>Bienvenido
        <?php echo $username; ?>
      </h1>
    </div>
    <div class="center-container">
      <div class="button-container">
        <br>
        <a href="../../empresa/html/empresa.html"><button>Botón 1</button></a>
        <a href="../../mando/html/mando1.html"><button>Botón 2</button></a>
        <a href="cerrar.php"><button>Cerrar sesión</button></a>
      </div>
      
    </div>
  </div>

</body>

</html>