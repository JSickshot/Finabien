<!DOCTYPE html>
<html>

<head>
    <title>Centro de monitoreo</title>
    <link rel="stylesheet" href="../CSS/logs.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            
            <?php
            if (isset($_GET["error"]) && $_GET["error"] === "1") {
                echo '<script>alert("Usuario o contraseña incorrectos.");</script>';
            }
            ?>
            <form action="login_process.php" method="post">
                <h1><label for="username">Usuario:</label><input type="text" name="username" required><br>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required><br>
                <input type="submit" value="Login"></h1>
            </form>
        </div>
    </div>
</body>
</html>