<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Despacho Jurídico Lucio Calvillo</title>
    <link rel="stylesheet" href="css/stylecontacto.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="img/logo.png" class="logo-image" alt="Logo de la Firma de Abogados">
                <h1>Despacho Jurídico Lucio Calvillo</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="inicio.php">VOLVER AL INICIO</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="contact-form">
        <div class="container">
            <h2>Contacto</h2>
            <form action="procesar_contacto.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="numero">Numero Telefonico:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
                
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                
                <button type="submit">Enviar</button>
            </form>
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
