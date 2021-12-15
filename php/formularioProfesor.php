<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir nuevo profesor</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
</head>
<body>
    <h1 class="text-center">Añadir nuevo profesor</h1>
    <form action="" method="post">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control form-control-lg" name="nombre" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="ape1">Primer Apellido</label>
          <input type="text" class="form-control form-control-lg" name="ape1" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="ape2">Segundo Apellido</label>
          <input type="text" class="form-control form-control-lg" name="ape2" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="contra">Contraseña</label>
          <input type="password" class="form-control form-control-lg" name="contra" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="correo">Correo Electrónico</label>
          <input type="email" class="form-control form-control-lg" name="correo" placeholder="" required>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Insertar</button>
      </form>
</body>
</html>