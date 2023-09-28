<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "maestra";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
} else {
    echo "Conexión a la base de datos exitosa.";
}
?>

/*postgress */
<?php
$host = "127.0.0.1";
$port = "5432";
$dbname = "maestra";
$user = "tu_usuario";
$password = "tu_contraseña";

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";

try {
    $conn = new PDO($dsn);
    echo "Conexión a la base de datos exitosa.";
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>

