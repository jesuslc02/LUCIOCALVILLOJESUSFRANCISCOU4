<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR</title>
    <link rel="stylesheet" href="css/eliminarstyle.css">

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
               require_once 'conexion.php'; 

               if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                   
                   if (isset($_POST['password'])) {
                       $password = $_POST['password'];
               
                       try {
                           $conexion = new Conexion();
               
                           session_start();
                           $us = $_SESSION['usuario']; 
                           $query = $conexion->prepare('SELECT PSW FROM users WHERE USER = :usuario');
                           $query->bindParam(':usuario', $us);
                           $query->execute();
                           $result = $query->fetch(PDO::FETCH_ASSOC);
               
                           if ($result) {
                               
                               if ($result['PSW'] === $password) {
                                   
                                   $query = $conexion->prepare('DELETE FROM users WHERE USER = :usuario');
                                   $query->bindParam(':usuario', $us);
                                   $query->execute();
                                   session_destroy(); 
                                   echo "Cuenta eliminada satisfactoriamente.";
                               } else {
                                   echo "Contraseña incorrecta. No se puede eliminar la cuenta.";
                               }
                           } else {
                               echo "Usuario no encontrado.";
                           }
                       } catch (PDOException $e) {
                           echo "Error: " . $e->getMessage();
                       }
                   } else {
                       echo "Por favor, proporcione la contraseña.";
                   }
               }
            ?>
            <br><a href='index.php'>INICIA SESION</a>
        </div>
    </div>
</body>
</html>