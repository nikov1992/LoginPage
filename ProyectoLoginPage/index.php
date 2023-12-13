<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GYMPASS</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>

  <h1 class="text-center p-4">BIENVENIDO A GYMPASS probrando git hub</h1>

  <div class="container fluid row">
    <div class="col-4 p-3">
      
      <form action="./baseDeDatos/php/registro_usuario_be.php" class="formulario__register" method="POST">

        <div class="mb-3">
          <h3 class="text-center text-secondary">ALTA DE USUARIO </h3>
          <label class="form-label ">Nombre completo</label>
          <input placeholder="Juan Perez" type="text" name="nombre_completo" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label ">Correo electronico</label>
          <input placeholder="juanP@gmail.com" name="mail" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label ">Usuario</label>
          <input placeholder="JuanPerez32" type="text" name="usuario" class="form-control">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input name="contrasena" type="password" class="form-control">
        </div>

        <button id="btn__registrarse" class="btn btn-primary">Cargar</button>
      </form>
    </div>

    <!-- con este col-4 lo achico al formulario -->
    <form class="col-4 p-3" action="../../desingBytes/ProyectoLoginPage/login/validar.php" method="post">
      <div class="mb-3">
        <h3 class="text-center text-secondary">LOGIN </h3>
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <input name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Constrasena</label>
        <input name="contrasena" type="password" class="form-control" id="exampleInputPassword2">
      </div>
      <button type="submit" class="btn btn-success">Ingresar</button>
    </form>
  </div>

  <script src="./baseDeDatos/assets/script.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>