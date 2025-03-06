<?php
require_once "../db/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute(["nombre" => $nombre, "email" => $email, "password" => $password]);
        header("Location: ../views/login.php?registro=exitoso");
        exit();
    } catch (PDOException $e) {
        die("Error al registrar: " . $e->getMessage());
    }
}
?>
