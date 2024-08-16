<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleregistro.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="baja.php" method="post" class="p-4 rounded shadow">
                <h2 class="text-center mb-4">CONFIRMA LA CONTRASEÑA PARA CONTINUAR</h2>
                <div class="form-group">
                    <label for="password">CONTRASEÑA</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="borrar">ELIMINAR</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>