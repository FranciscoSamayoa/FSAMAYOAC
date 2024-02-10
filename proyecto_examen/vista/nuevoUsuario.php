<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="vista/css/empleados.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Nuevo Usuario</h5>
          </div>
          <div class="card-body">
            <form id="miFormulario" method="get">
              <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="user" name="user" placeholder="Escribe un usuario">
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Escribe una contraseña">
              </div>
              <div class="form-group">
                <br>
                <label for="opciones">Seleccionar rutas a permitir al usuario</label>
                <div class="label-container" id="labelContainer">

                  <?php foreach ($permisos as $permiso) : ?>
                    <span class="label" onclick="agregarTabla(this)"><?php echo $permiso; ?></span>
                  <?php endforeach; ?>

                  <table id="tablaEtiquetas">
                    <thead>
                      <tr>
                        <th>Permiso</th>
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <br>
                <button type="button" id="guardarButton" class="btn btn-primary">Guardar</button>
                <input type="hidden" name="login" value="guardarUsuario">
                <a href="index.php?login=mostrarUsuarios" class="btn buttonExit">Cancelar</a>
            </form>
            <input type="hidden" id="etiquetasInput" name="etiquetas">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="vista/js/usuario.js"></script>
</html>