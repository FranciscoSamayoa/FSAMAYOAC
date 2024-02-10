<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="vista/css/empleados.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #cde4f3">
        <div class="container">
            <a class="navbar-brand">Examen PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link">Perfil: Usuario</td></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" style="border: 1px solid black;" href="index.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Tabla de Usuarios</h2>
        <a href="index.php?login=nuevoUsuario" class="btn buttonCreate"><i class="bi bi-person-plus"></i> Agregar Usuario</a>
        <br><br>
        <table class="table">
            <thead style="background: #00C1F5;">
                <tr>
                    <th class="tablaClass">ID</th>
                    <th class="tablaClass">Usuario</th>
                    <th class="tablaClass">Contraseña</th>
                    <th class="tablaClass">Permisos</th>
                    <th class="tablaClass">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($allUsuarios)) : ?>
                    <tr>
                        <td colspan="8" class="text-center">No hay datos para mostrar</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($allUsuarios as $array) : ?>
                        <?php foreach ($array as $usuario) : ?>
                            <tr>
                                <td class="text-center"><?php echo $usuario["id"]; ?></td>
                                <td class="text-center"><?php echo $usuario["user"]; ?></td>
                                <td class="text-center"><?php echo $usuario["password"]; ?></td>
                                <td class="text-center"><?php echo $usuario["permisos"]; ?></td>
                                <td class="text-center">
                                    <a href="index.php?login=editarUsuario&id=<?php echo $usuario['id'] ?>" class="btn buttonEdit" title="Editar usuario"><i class="bi bi-pencil"></i></a>
                                    <a href="index.php?login=eliminarUsuario&id=<?php echo $usuario['id'] ?>" class="btn buttonDelete" title="Eliminar usuario"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>

</html>