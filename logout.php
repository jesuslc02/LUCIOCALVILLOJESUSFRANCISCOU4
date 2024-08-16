<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
    <link rel="stylesheet" href="css/logoutstyle.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="img/logo.png" class="logo-image" alt="Logo de la Firma de Abogados">
                <h1>Despacho Jurídico Lucio Calvillo</h1>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="message">
            <?php
                session_start();
                session_destroy();
                echo "Sesión cerrada.";
                echo "<br><a href='index.php'>Iniciar sesión</a>";
            ?>
        </div>
    </div>
</body>
</html>
