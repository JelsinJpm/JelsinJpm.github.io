<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Pro-Gaming-Chocó</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--<script src="js/validacion-registro.js"></script>-->
    <style>
      body{
        background: #F7F9F9 ;
        background: linear-gradient(to right), #ECF0F1 , #F7F9F9 ;
        background-image: url(img/showcases/showcase-2/Fondo.jpeg);
        background-position: center center;
        background-size: contain;
      }
      .bg{
        background-image: url(img/showcases/showcase-2/Fondo.jpeg);
        background-position: center center;
        background-size: contain;
      }
    </style>

</head>
<body>
<div class="container w-auto bg-warning mt-5 rounded shadow">
  <div class="row align-items-stretch">
    <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

    </div>
    <div class="col bg-white p-5 rounded-end">
      <h2 class="fw-bold text-center">Crea tu cuenta gratis</h2>
      <!--Formulario Registro-->
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" id="formulario" class="form-register" onsubmit="return validar();">
        <div class="mb-4">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre" value="<?php if(isset($nombre)) echo $nombre ?>">
        </div>
        <div class="mb-4">
          <label for="apellidos" class="form-label">Apellidos</label>
          <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php if(isset($apellidos)) echo $apellidos ?>">
        </div>
        <div class="mb-4">
          <label for="telefono" class="form-label">Teléfono</label>
          <input type="tel" class="form-control" name="telefono" id="telefono" value="<?php if(isset($telefono)) echo $telefono ?>">
        </div>
        <div class="row">
          <div class="col-6 mb-4">
            <label for="tipodoc" class="form-label">Tipo documento</label>
            <select class="form-select" name="tipodoc" id="tipodoc" value="<?php if(isset($tipodoc)) echo $tipodoc ?>">
              <option selected disabled value="">Seleccione</option>
              <option value="CC">Cédula de Ciudadanía</option>
              <option value="TI">Tarjeta de Identidad</option>
            </select>
          </div>
          <div class="col-6 mb-4">
            <label for="nrodoc" class="form-label">Número documento</label>
            <input type="tel" class="form-control" name="nrodoc" id="nrodoc" value="<?php if(isset($nrodoc)) echo $nrodoc ?>">
          </div>
        </div>
        <div class="mb-4">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" name="email" id="email" value="<?php if(isset($email)) echo $email ?>">
        </div>
        <div class="row">
          <div class="col-6 mb-4">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password" value="<?php if(isset($password)) echo $password ?>">
          </div>
          <div class="col-6 mb-4">
            <label for="password" class="form-label">Repetir contraseña</label>
            <input type="password" class="form-control" name="password2" id="password2" value="<?php if(isset($password2)) echo $password2 ?>">
          </div>
        </div>
        <div class="mb-4 form-check">
          <input type="checkbox" name="terminos" id="terminos" class="form-check-input">
          <label for="terminos" class="form-check-label">
            Aceptar <a href="">Términos y Condiciones</a>
          </label>
        </div>
        <div class="d-grid">
          <button type="submit" id="submit" name="submit" class="btn btn-primary">Registrarme</button>
        </div>

        <div class="my-3">
          <span>¿ Ya tienes una cuenta ? <a href="index.php">Iniciar Sesión</a></span>
        </div>
        <?php require("php/validacion-registro.php"); ?>
      </form>
      <!--Redes Sociales-->
      <div class="container w-100 my-4">
        <div class="row text-center">
            <div class="col-12 py-2">Registrarse con</div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-outline-primary w-100 my-1">
                    <div class="row align-items-center">
                        <div class="col-2 d-none d-md-block">
                            <img src="img/Logof.png" width="32" alt="">
                        </div>

                        <div class="col-12 col-md-10 text-center">
                            Facebook
                        </div>
                    </div>
                </button>
            </div>
            <div class="col">
                <button class="btn btn-outline-danger w-100 my-1">
                    <div class="row align-items-center">
                        <div class="col-2 d-none d-md-block">
                            <img src="img/Logog.png" width="32" alt="">
                        </div>

                        <div class="col-12 col-md-10 text-center">
                            Google
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>








  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>