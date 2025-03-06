<?php
$host = "localhost";
$dbname = "autenticacion";
$username = "root";  // Cambia según tu configuración
$password = "";  // Cambia si tienes contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
