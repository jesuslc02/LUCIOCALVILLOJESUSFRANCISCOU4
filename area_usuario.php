<?php
session_start();
require_once 'conexion.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}


$usuario = $_SESSION['usuario'];
$conexion = new Conexion();

try {
    $query = $conexion->prepare('SELECT NAME, SERVICIO FROM users WHERE USER = :usuario');
    $query->bindParam(':usuario', $usuario);
    $query->execute();

    
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $nombre = $result['NAME'];
    $servicio = $result['SERVICIO'];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$usuario = $_SESSION['usuario'];
$uploadDir = 'uploads/';
$files = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['fileUpload'])) {
        $file = $_FILES['fileUpload'];
        if ($file['error'] === UPLOAD_ERR_OK) {
            $uploadFile = $uploadDir . basename($file['name']);
            $fileType = mime_content_type($file['tmp_name']);
            if ($fileType === 'application/pdf') {
                if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
                    echo "Archivo subido satisfactoriamente.";
                } else {
                    echo "Error al subir el archivo.";
                }
            } else {
                echo "Solo se permiten archivos PDF.";
            }
        } else {
            echo "Error en la carga del archivo. Código de error: " . $file['error'];
        }
    } elseif (isset($_POST['deleteFile'])) {
        $fileToDelete = $_POST['deleteFile'];
        $filePath = $uploadDir . basename($fileToDelete);
        if (file_exists($filePath)) {
            if (unlink($filePath)) {
                echo "Archivo eliminado satisfactoriamente.";
            } else {
                echo "Error al eliminar el archivo.";
            }
        } else {
            echo "Archivo no encontrado.";
        }
    }
}


if ($handle = opendir($uploadDir)) {
    while (false !== ($file = readdir($handle))) {
        if ($file !== '.' && $file !== '..') {
            $files[] = $file;
        }
    }
    closedir($handle);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Usuario</title>
    <link rel="stylesheet" href="css/areausuario.css">
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
                    <li><a href="borrar_cuenta.php">Borrar Cuenta</a></li>
                    <li><a href="cambiar_credenciales.php">Cambiar Credenciales</a></li>
                    <li><a href="logout.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="user-area">
        <div class="container">
            <h2>Bienvenido, <?php echo htmlspecialchars($nombre); ?></h2>
            <h3>SERVICIO: <?php echo htmlspecialchars($servicio); ?></h3>

            
            <div class="file-upload">
                <h3>Sube tus expedientes</h3>
                <form action="area_usuario.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="fileUpload" name="fileUpload" required>
                    <input type="submit" value="Subir Archivo">
                </form>
            </div>

            
            <div class="file-list">
                <h3>Tus archivos</h3>
                <ul>
                    <?php foreach ($files as $file): ?>
                        <li>
                            <a href="<?php echo $uploadDir . $file; ?>" target="_blank"><?php echo htmlspecialchars($file); ?></a>
                            <form action="area_usuario.php" method="post" style="display:inline;">
                                <input type="hidden" name="deleteFile" value="<?php echo htmlspecialchars($file); ?>">
                                <input type="submit" value="Eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar este archivo?');">
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
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

