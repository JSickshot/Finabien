<?php
require_once "../conect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $actividades = isset($_POST["actividades"]) ? $_POST["actividades"] : "";
    $fortalezas = isset($_POST["fortalezas"]) ? $_POST["fortalezas"] : "";
    $mejoras = isset($_POST["mejoras"]) ? $_POST["mejoras"] : "";
    $aportacion = isset($_POST["aportacion"]) ? $_POST["aportacion"] : "";
    $pregunta5 = isset($_POST["pregunta5"]) ? $_POST["pregunta5"] : "";
    $pregunta6 = isset($_POST["pregunta6"]) ? $_POST["pregunta6"] : "";
    $pregunta7 = isset($_POST["pregunta7"]) ? $_POST["pregunta7"] : "";
    $pregunta8 = isset($_POST["pregunta8"]) ? $_POST["pregunta8"] : "";
    $pregunta9 = isset($_POST["pregunta9"]) ? $_POST["pregunta9"] : "";
    $pregunta10 = isset($_POST["pregunta10"]) ? $_POST["pregunta10"] : "";
    $pregunta11 = isset($_POST["pregunta11"]) ? $_POST["pregunta11"] : "";
    $pregunta12 = isset($_POST["pregunta12"]) ? $_POST["pregunta12"] : "";
    $pregunta13 = isset($_POST["pregunta13"]) ? $_POST["pregunta13"] : "";
    $pregunta14 = isset($_POST["pregunta14"]) ? $_POST["pregunta14"] : "";
    $pregunta15 = isset($_POST["pregunta15"]) ? $_POST["pregunta15"] : "";
    $pregunta16 = isset($_POST["pregunta16"]) ? $_POST["pregunta16"] : "";
    $pregunta17 = isset($_POST["pregunta17"]) ? $_POST["pregunta17"] : "";
    $pregunta18 = isset($_POST["pregunta18"]) ? $_POST["pregunta18"] : "";
    $opiniones = isset($_POST["opiniones"]) ? $_POST["opiniones"] : "";
    $prueba1 = isset($_POST["prueba1"]) ? $_POST["prueba1"] : "";
    $observaciones_prueba1 = isset($_POST["observaciones_prueba1"]) ? $_POST["observaciones_prueba1"] : "";
    
    $prueba2 = isset($_POST["prueba2"]) ? $_POST["prueba2"] : "";
    $observaciones_prueba2 = isset($_POST["observaciones_prueba2"]) ? $_POST["observaciones_prueba2"] : "";
    
    $prueba3 = isset($_POST["prueba3"]) ? $_POST["prueba3"] : "";
    $observaciones_prueba3 = isset($_POST["observaciones_prueba3"]) ? $_POST["observaciones_prueba3"] : "";
    
    $prueba4 = isset($_POST["prueba4"]) ? $_POST["prueba4"] : "";
    $observaciones_prueba4 = isset($_POST["observaciones_prueba4"]) ? $_POST["observaciones_prueba4"] : "";
    
    $prueba5 = isset($_POST["prueba5"]) ? $_POST["prueba5"] : "";
    $observaciones_prueba5 = isset($_POST["observaciones_prueba5"]) ? $_POST["observaciones_prueba5"] : "";
    
    $prueba6 = isset($_POST["prueba6"]) ? $_POST["prueba6"] : "";
    $observaciones_prueba6 = isset($_POST["observaciones_prueba6"]) ? $_POST["observaciones_prueba6"] : "";
    
    $prueba7 = isset($_POST["prueba7"]) ? $_POST["prueba7"] : "";
    $observaciones_prueba7 = isset($_POST["observaciones_prueba7"]) ? $_POST["observaciones_prueba7"] : "";
    
    $prueba8 = isset($_POST["prueba8"]) ? $_POST["prueba8"] : "";
    $observaciones_prueba8 = isset($_POST["observaciones_prueba8"]) ? $_POST["observaciones_prueba8"] : "";
    
    $prueba9 = isset($_POST["prueba9"]) ? $_POST["prueba9"] : "";
    $observaciones_prueba9 = isset($_POST["observaciones_prueba9"]) ? $_POST["observaciones_prueba9"] : "";
    
    $prueba10 = isset($_POST["prueba10"]) ? $_POST["prueba10"] : "";
    $observaciones_prueba10 = isset($_POST["observaciones_prueba10"]) ? $_POST["observaciones_prueba10"] : "";
    
    $prueba11 = isset($_POST["prueba11"]) ? $_POST["prueba11"] : "";
    $observaciones_prueba11 = isset($_POST["observaciones_prueba11"]) ? $_POST["observaciones_prueba11"] : "";
    
    $prueba12 = isset($_POST["prueba12"]) ? $_POST["prueba12"] : "";
    $observaciones_prueba12 = isset($_POST["observaciones_prueba12"]) ? $_POST["observaciones_prueba12"] : "";
    
    $prueba13 = isset($_POST["prueba13"]) ? $_POST["prueba13"] : "";
    $observaciones_prueba13 = isset($_POST["observaciones_prueba13"]) ? $_POST["observaciones_prueba13"] : "";
    
    $prueba14 = isset($_POST["prueba14"]) ? $_POST["prueba14"] : "";
    $observaciones_prueba14 = isset($_POST["observaciones_prueba14"]) ? $_POST["observaciones_prueba14"] : "";
    
    $prueba15 = isset($_POST["prueba15"]) ? $_POST["prueba15"] : "";
    $observaciones_prueba15 = isset($_POST["observaciones_prueba15"]) ? $_POST["observaciones_prueba15"] : "";
    
    $prueba16 = isset($_POST["prueba16"]) ? $_POST["prueba16"] : "";
    $observaciones_prueba16 = isset($_POST["observaciones_prueba16"]) ? $_POST["observaciones_prueba16"] : "";
    
    $prueba17 = isset($_POST["prueba17"]) ? $_POST["prueba17"] : "";
    $observaciones_prueba17 = isset($_POST["observaciones_prueba17"]) ? $_POST["observaciones_prueba17"] : "";
    
    $prueba18 = isset($_POST["prueba18"]) ? $_POST["prueba18"] : "";
    $observaciones_prueba18 = isset($_POST["observaciones_prueba18"]) ? $_POST["observaciones_prueba18"] : "";

    header("Location: confirmacion.html");
    exit();
}
?>
