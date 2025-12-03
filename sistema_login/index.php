<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] === true) {
    header("Location: inicio.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    
    <?php if(isset($_GET['error'])): ?>
        <p style="color:red;"><?php echo $_GET['error']; ?></p>
    <?php endif; ?>
    
    <form action="login.php" method="POST">
        <p>
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required>
        </p>
        <p>
            <label>Contraseña:</label><br>
            <input type="password" name="contrasena" required>
        </p>
        <p>
            <button type="submit">Ingresar</button>
        </p>
    </form>
</body>
</html>