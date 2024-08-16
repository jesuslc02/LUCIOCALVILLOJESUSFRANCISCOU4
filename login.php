<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio de sesion</title>
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
    <div class="container">
        <form action="nsession.php" method="post">
            <h2>Inicio de Sesión</h2>

            <label for="user">Usuario:</label><br>
            <input type="text" id="user" name="user" required><br><br>

            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Iniciar Sesión" name='login'>
        </form>

        <div class="register-container">
            <h2>¿No tienes una cuenta?</h2>
            <form action="register.php" method="post">
                <input type="submit" value="Registrarse">
            </form>
        </div>
    </div>
</body>
</html>