<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Credenciales</title>
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
        require_once 'conexion.php'; 

        class Users {
            private $us;      
            private $nuser;   
            private $psw;     
            private $serv;    

            public function __construct($us, $nuser, $psw, $serv) {
                $this->us = $us;
                $this->nuser = $nuser;
                $this->psw = $psw;
                $this->serv = $serv;
            }

            public function actualizar() {
                try {
                    $conexion = new Conexion();

                    
                    if ($this->nuser !== $this->us) {
                        
                        $query = $conexion->prepare('SELECT COUNT(*) FROM users WHERE USER = :nuser');
                        $query->bindParam(':nuser', $this->nuser);
                        $query->execute();
                        $count = $query->fetchColumn();

                        if ($count > 0) {
                            echo "El nuevo nombre de usuario ya está en uso.";
                            return;
                        }

                        
                        $query = $conexion->prepare('UPDATE users SET USER = :nuser WHERE USER = :usuario');
                        $query->bindParam(':nuser', $this->nuser);
                        $query->bindParam(':usuario', $this->us);
                        $query->execute();
                    }

                    
                    $query = $conexion->prepare('UPDATE users SET PSW = :clave, SERVICIO = :servicio WHERE USER = :usuario');
                    $query->bindParam(':usuario', $this->nuser); 
                    $query->bindParam(':clave', $this->psw);
                    $query->bindParam(':servicio', $this->serv);
                    $query->execute();

                    if ($query->rowCount() > 0) {
                        echo "Datos actualizados satisfactoriamente.";
                    } else {
                        echo "No se encontró el usuario o no se realizaron cambios.";
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['user']) && isset($_POST['nuser']) && isset($_POST['password']) && isset($_POST['servicio'])) {
                $us = $_POST['user'];
                $nuser = $_POST['nuser'];
                $psw = $_POST['password'];
                $serv = $_POST['servicio'];

                $el_user = new Users($us, $nuser, $psw, $serv);
                $el_user->actualizar();
            } else {
                echo "Por favor, complete todos los campos del formulario.";
            }
        }
        ?>
        <br><a href='login.php'>INICIA SESION</a>
        </div>
    </div>
</body>
</html>
