<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION["usuario"]); ?>!</h1>
    <a href="../auth/logout.php">Cerrar sesión</a>
</body>
</html>
