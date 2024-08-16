<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleregistro.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="guardar.php" method="post" class="p-4 rounded shadow">
                <h2 class="text-center mb-4">Registro</h2>

                <div class="form-group">
                    <label for="name">NOMBRE</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="user">USUARIO</label>
                    <input type="text" class="form-control" id="user" name="user" required>
                </div>

                <div class="form-group">
                    <label for="password">CONTRASEÑA</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                            <label for="servicio">SERVICIO REQUERIDO</label>
                            <select name="servicio" class="form-control" id='servicio'>
                                <option value="DERECHO PENAL">DERECHO PENAL</option>
                                <option value="DERECHO CIVIL">DERECHO CIVIL</option>
                                <option value="DERECHO FAMILIAR">DERECHO FAMILIAR</option>
                            </select>
                        </div>
                <button type="submit" class="btn btn-primary btn-block" name="registrarse">REGISTRARSE</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
