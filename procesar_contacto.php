<?php

$nombre = htmlspecialchars($_POST['nombre']);
$email = htmlspecialchars($_POST['email']);
$mensaje = htmlspecialchars($_POST['mensaje']);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación - Despacho Jurídico Lucio Calvillo</title>
    <link rel="stylesheet" href="css/stylecontacto.css">
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

    <section class="confirmation">
        <div class="container">
            <h2>¡Gracias por tu mensaje!</h2>
            <p>Tu mensaje ha sido enviado y se atenderá lo antes posible. Gracias por contactarnos.</p>
            <a href="index.php" class="btn">Volver al Inicio</a>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Despacho Jurídico Lucio Calvillo. Todos los derechos reservados.</p>
            <div class="social-media">
                <div class="social-item">
                    <a href="https://www.facebook.com/jesusfrancisco.luciocalvillo.1?mibextid=ZbWKwL" target="_blank">
                        <img src="img/face.png" alt="Facebook">
                        <span>@LucioCalvilloLaw</span>
                    </a>
                </div>

                <div class="social-item">
                    <a href="https://x.com/TPS_elyisusxd?t=o1vdjo26FMu_cVUrZdV91g&s=09" target="_blank">
                        <img src="img/twitter.png" alt="Twitter">
                        <span>@LucioCalvilloLegal</span>
                    </a>
                </div>
                <div class="social-item">
                    <a href="https://www.instagram.com/jesuslc02?igsh=OHVvYWZuamw2eXVh" target="_blank">
                        <img src="img/insta.png" alt="Instagram">
                        <span>@LucioCalvilloAbogados</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
