<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finabien";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $registro_id = $_GET['id'];

    $query = "SELECT * FROM validainv WHERE ID = '$registro_id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $registro = $result->fetch_assoc();
    } else {
        echo "Registro no encontrado.";
        exit;
    }
} else {
    echo "ID de registro no proporcionado.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nueva_region = $_POST['nueva_region'];
    $nueva_entidad = $_POST['nueva_entidad'];
    $nueva_registro = $_POST['nueva_registro'];
    $nueva_SUCURSAL_EQUIP = $_POST['nueva_SUCURSAL_EQUIP'];
    $nueva_NOMBRE_SUC = $_POST['nueva_NOMBRE_SUC'];
    $nueva_ESTADO_SUC = $_POST['nueva_ESTADO_SUC'];
    $nueva_TIPO_COMM = $_POST['nueva_TIPO_COMM'];
    $nueva_TIPO_EQUI = $_POST['nueva_TIPO_EQUI'];
    $nueva_MODELO = $_POST['nueva_MODELO'];
    $nueva_IP_CAM = $_POST['nueva_IP_CAM'];
    $nueva_ESTATUS_EQUIPO = $_POST['nueva_ESTATUS_EQUIPO'];
    $nueva_SERIE = $_POST['nueva_SERIE'];
    $nueva_INVENTARIO = $_POST['nueva_INVENTARIO'];
    $nueva_ESTATUS_ALMAC = $_POST['nueva_ESTATUS_ALMAC'];
    $nueva_MODELO_ALMAC = $_POST['nueva_MODELO_ALMAC'];
    $nueva_NUM_SERIE = $_POST['nueva_NUM_SERIE'];
    $nueva_NUM_INV_ALMAC = $_POST['nueva_NUM_INV_ALMAC'];

    $update_query = "UPDATE validainv SET
                        REGION = '$nueva_region',
                        ENTIDAD = '$nueva_entidad',
                        REGISTRO = '$nueva_registro',
                        SUCURSAL_EQUIP = '$nueva_SUCURSAL_EQUIP',
                        NOMBRE_SUC = '$nueva_NOMBRE_SUC',
                        ESTADO_SUC = '$nueva_ESTADO_SUC',
                        TIPO_COMM = '$nueva_TIPO_COMM',
                        TIPO_EQUI = '$nueva_TIPO_EQUI',
                        MODELO  ='$nueva_MODELO',
                        IP_CAM ='$nueva_IP_CAM',
                        ESTATUS_EQUIPO ='$nueva_ESTATUS_EQUIPO',
                        SERIE ='$nueva_SERIE',
                        INVENTARIO ='$nueva_INVENTARIO',
                        ESTATUS_ALMAC ='$nueva_ESTATUS_ALMAC',
                        MODELO_ALMAC ='$nueva_MODELO_ALMAC',
                        NUM_SERIE   ='$nueva_NUM_SERIE',
                        NUM_INV_ALMAC ='$nueva_NUM_INV_ALMAC'
                        WHERE ID = '$registro_id'";

    if ($conn->query($update_query) === TRUE) {
        echo "Registro actualizado exitosamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}



$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
</head>

<body>

    <h2>Editar Registro</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . "?id=" . $registro_id; ?>">
        <label for="nueva_region">Nueva Región:</label>
        <input type="text" name="nueva_region" value="<?php echo $registro['REGION']; ?>"><br>

        <label for="nueva_entidad">Nueva Entidad:</label>
        <input type="text" name="nueva_entidad" value="<?php echo $registro['ENTIDAD']; ?>"><br>

        <label for="nueva_registro">Nuevo REGISTRO:</label>
        <input type="text" name="nueva_registro" value="<?php echo $registro['REGISTRO']; ?>"><br>

        <label for="nueva_SUCURSAL_EQUIP">Nueva sucursal con equipo:</label>
        <input type="text" name="nueva_SUCURSAL_EQUIP" value="<?php echo $registro['SUCURSAL_EQUIP']; ?>"><br>

        <label for="nueva_NOMBRE_SUC">Nuevo nombre de sucursal:</label>
        <input type="text" name="nueva_NOMBRE_SUC" value="<?php echo $registro['NOMBRE_SUC']; ?>"><br>

        <label for="nueva_ESTADO_SUC">Nuevo estado de la sucursal:</label>
        <input type="text" name="nueva_ESTADO_SUC" value="<?php echo $registro['ESTADO_SUC']; ?>"><br>

        <label for="nueva_TIPO_COMM">Nueva tipo de comunicacón:</label>
        <input type="text" name="nueva_TIPO_COMM" value="<?php echo $registro['TIPO_COMM']; ?>"><br>

        <label for="nueva_TIPO_EQUI">Nuevo tipo de equipo:</label>
        <input type="text" name="nueva_TIPO_EQUI" value="<?php echo $registro['TIPO_EQUI']; ?>"><br>

        <label for="nueva_MODELO">Nuevo modelo:</label>
        <input type="text" name="nueva_MODELO" value="<?php echo $registro['MODELO']; ?>"><br>

        <label for="nueva_IP_CAM">Nueva ip:</label>
        <input type="text" name="nueva_IP_CAM" value="<?php echo $registro['IP_CAM']; ?>"><br>

        <label for="nueva_ESTATUS_EQUIPO">Nuevo estatus:</label>
        <input type="text" name="nueva_ESTATUS_EQUIPO" value="<?php echo $registro['ESTATUS_EQUIPO']; ?>"><br>

        <label for="nueva_SERIE">Nueva serie:</label>
        <input type="text" name="nueva_SERIE" value="<?php echo $registro['SERIE']; ?>"><br>

        <label for="nueva_INVENTARIO">Nuevo inventario:</label>
        <input type="text" name="nueva_INVENTARIO" value="<?php echo $registro['INVENTARIO']; ?>"><br>


        <label for="nueva_ESTATUS_ALMAC">Nuevo estatus de almacenamiento:</label>
        <input type="text" name="nueva_ESTATUS_ALMAC" value="<?php echo $registro['ESTATUS_ALMAC']; ?>"><br>

        <label for="nueva_MODELO_ALMAC">Nuevo modelo de almacenamiento:</label>
        <input type="text" name="nueva_MODELO_ALMAC" value="<?php echo $registro['MODELO_ALMAC']; ?>"><br>

        <label for="nueva_NUM_SERIE">Nuevo número de serie:</label>
        <input type="text" name="nueva_NUM_SERIE" value="<?php echo $registro['NUM_SERIE']; ?>"><br>

        <label for="nueva_NUM_INV_ALMAC">Nuevo número de inventario de almacenamiento:</label>
        <input type="text" name="nueva_NUM_INV_ALMAC" value="<?php echo $registro['NUM_INV_ALMAC']; ?>"><br>


        <input type="submit" value="Actualizar Registro">
    </form>

</body>

</html>