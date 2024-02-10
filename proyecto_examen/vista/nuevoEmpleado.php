<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/empleados.css">
    <script src="vista/js/nuevoEmpleado.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="mt-5" style="display: flex; justify-content: center;">
        <div class="formulario">
            <h2 class="text-center">Nuevo Empleado</h2>
            <form action="" method="get">
                <div>
                    <label for="clave_empleado">Clave de Empleado:</label>
                    <input type="text" placeholder="Ingrese una clave" class="form-control" id="clave_empleado" name="clave_empleado" required>
                </div>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" placeholder="Escribe un nombre" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div>
                    <label for="edad">Edad:</label>
                    <input type="number" placeholder="Escribe una edad" class="form-control" id="edad" name="edad" required>
                </div>
                <div>
                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                </div>

                <div>
                    <label for="genero">Género:</label>
                    <select class="form-control" id="genero" name="genero" required>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
                <div>
                    <label for="sueldo_base">Sueldo Base:</label>
                    <input type="number" placeholder="Escribe un sueldo base" class="form-control" id="sueldo_base" name="sueldo_base" required>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Guardar">
                <input type="hidden" name="empleado" value="guardarEmpleado">
                <a href="index.php?empleado=regresar" class="btn buttonExit">Cancelar</a>
            </form>
        </div>
    </div>
</body>

</html>