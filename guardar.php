<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUARDADO</title>
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
            private $nom;
            private $psw;
            private $serv;

            public function __construct($us, $nom, $psw, $serv) {
            $this->us = $us;
            $this->nom = $nom;
            $this->psw = $psw;
            $this->serv = $serv;
            }

            public function guarda() {
            try {
                $conexion = new Conexion();
                $query = $conexion->prepare('INSERT INTO users (USER, NAME, PSW, SERVICIO) VALUES (:usuario, :nom, :clave, :servicio)');
                $query->bindParam(':usuario', $this->us);
                $query->bindParam(':nom', $this->nom);
                $query->bindParam(':clave', $this->psw);
                $query->bindParam(':servicio', $this->serv);

                $query->execute();
                echo "REGISTRO GUARDADO SATISFACTORIAMENTE";
                } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                }
            }
         }

   
            $us = $_POST['user'];
            $nom = $_POST['name'];
            $psw = $_POST['password'];
             $serv = $_POST['servicio'];

             $el_user = new Users($us, $nom, $psw, $serv);
            $el_user->guarda();

    
         ?>
            <br><a href='login.php'>INICIA SESION</a>
        </div>
    </div>
</body>
</html>