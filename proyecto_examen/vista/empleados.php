<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Registros</title>
    <!-- Estilos Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Iconos Font Awesome 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous"> 
    -->
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="vista/css/empleados.css">
    <script src="vista/js/empleados.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #cde4f3">
        <div class="container">
            <a class="navbar-brand" href="#">Examen PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link">Perfil: Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" style="border: 1px solid black;" href="index.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Tabla de Empleados</h2>
        <a href="index.php?empleado=nuevoEmpleado" class="btn buttonCreate"><i class="bi bi-person-plus"></i> Agregar Empleado</a>
        <br><br>
        <table class="table">
            <thead style="background: #00C1F5;">
                <tr>
                    <th class="tablaClass">ID</th>
                    <th class="tablaClass">Clave</th>
                    <th class="tablaClass">Nombre</th>
                    <th class="tablaClass">Edad</th>
                    <th class="tablaClass">Fecha de Nacimiento</th>
                    <th class="tablaClass">Genero</th>
                    <th class="tablaClass">Sueldo Base</th>
                    <th class="tablaClass">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($datos)) : ?>
                    <tr>
                        <td colspan="8" class="text-center">No hay datos para mostrar</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($datos as $array) : ?>
                        <?php foreach ($array as $empleado) : ?>
                            <tr>
                                <td class="text-center"><?php echo $empleado["id"]; ?></td>
                                <td class="text-center"><?php echo $empleado["clave_empleado"]; ?></td>
                                <td class="text-center"><?php echo $empleado["nombre"]; ?></td>
                                <td class="text-center"><?php echo $empleado["edad"]; ?></td>
                                <td class="text-center"><?php echo $empleado["fecha_nacimiento"]; ?></td>
                                <td class="text-center"><?php echo $empleado["genero"]; ?></td>
                                <td class="text-center"><?php echo $empleado["sueldo_base"]; ?></td>
                                <td class="text-center">
                                    <a href="index.php?empleado=editarEmpleado&id=<?php echo $empleado['id'] ?>" class="btn buttonEdit" title="Editar empleado"><i class="bi bi-pencil"></i></a>
                                    <a href="index.php?empleado=eliminarEmpleado&id=<?php echo $empleado['id'] ?>" class="btn buttonDelete" title="Eliminar empleado"><i class="bi bi-trash"></i></a>
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