<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finabien";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];

    
    $query = "SELECT * FROM uinventario WHERE nombre = '$nombre_usuario' AND contraseña = '$contraseña'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['nombre_usuario'] = $row['nombre'];
        $_SESSION['rol'] = $row['rol'];

        if ($row['rol'] == 'admin') {
            header("Location: admin.html");
        } else {
            header("Location: user.html");
        }
        exit();
    } else {
        echo "Credenciales incorrectas";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>

<h2>Iniciar Sesión</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nombre_usuario">Usuario:</label>
    <input type="text" name="nombre_usuario" required>

    <label for="contraseña">Contraseña:</label>
    <input type="password" name="contraseña" required>

    <input type="submit" value="Iniciar Sesión">
</form>

</body>
</html>
