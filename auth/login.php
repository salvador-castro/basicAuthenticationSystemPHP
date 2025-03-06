<?php
require_once "../db/conexion.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["email" => $email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($password, $usuario["password"])) {
        $_SESSION["usuario"] = $usuario["nombre"];
        header("Location: ../views/home.php");
        exit();
    } else {
        echo "Correo o contraseña incorrectos";
    }
}
?>
