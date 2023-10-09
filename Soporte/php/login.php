<!DOCTYPE html>
<html>

<head>
    <title>Centro de monitoreo</title>
    <link rel="stylesheet" href="../css/logins_proof.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>centro nacional de monitoreo</h2>
            <?php
            if (isset($_GET["error"]) && $_GET["error"] === "1") {
                echo '<script>alert("Usuario o contraseña incorrectos.");</script>';
            }
            ?>
            <form action="login_process.php" method="post">
                <label for="username">Usuario:</label>
                <input type="text" name="username" required><br><br>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required><br>
                <br>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>