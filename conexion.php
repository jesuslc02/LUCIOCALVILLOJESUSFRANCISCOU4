<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONEXION</title>
</head>
<body>
    <?php
        class Conexion extends PDO 
        {
            private $tipo_de_base='mysql';
            private $host='sql110.infinityfree.com';
            private $nombre_de_base='if0_37120441_usuarios';
            private $usuario='if0_37120441';
            private $contrasena='V68lacu0dSxFU';


            public function __construct()
            {
                try{
                    parent::__construct($this->tipo_de_base. ':host='.$this->host.';dbname='.$this->nombre_de_base,$this->usuario,$this->contrasena);
                }

                catch(PDOException $e){
                    echo '########HA SURGIDO UN ERROR Y NO ES POSIBLE LA CONEXION CON LA BASE DE DATOS#############  <br>';
                    echo 'DETALLE: '.$e->getMessage();
                }
            }
        }


    ?>
</body>
</html>