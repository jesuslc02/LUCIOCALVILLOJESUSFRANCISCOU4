<?php
    session_start();
    require_once 'conexion.php';

    if(isset($_POST['login']))
    {
        $us=$_POST['user'];
        $ps=$_POST['password'];


        $conexion= new Conexion();

        $query=$conexion->prepare('SELECT * from users WHERE USER=:usuario AND PSW=:clave');
        $query->bindParam(':usuario',$us);
        $query->bindParam(':clave',$ps);

        $query->execute();

        $count=$query->rowCount();

        if ($count){
            $_SESSION['usuario']=$us;
            header("location:area_usuario.php");
        }
        else{
            echo "VERIFICAR LAS CREDENCIALES DE ACCESO";
            echo "<br><a href='login.php'>REGRESAR</a>";
        }

    }
?>