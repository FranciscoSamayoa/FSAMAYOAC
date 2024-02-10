<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Iniciar sesión</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="background: #cde4f3">
                    <div class="card-header" style="display: flex; justify-content:center; background: white">
                    <img src="vista/images/logo.png">
                    </div>
                    <div class="card-body">
                        <form method="get" action="index.php">
                            <div class="form-group">
                                <label for="user">Usuario</label>
                                <input type="text" class="form-control" id="user" name="user" placeholder="Ingresa tu usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-primary btn-block" value="Iniciar sesión">
                            <input type="hidden" name="login" value="procesarInicio">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>