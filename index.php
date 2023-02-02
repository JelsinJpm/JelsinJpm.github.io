<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Pro-Gaming-Chocó</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="js/validacion-inicio.js"></script>
    <style>
      body{
        background: #F7F9F9 ;
        background: linear-gradient(to right), #ECF0F1 , #F7F9F9 ;
        background-image: url(img/showcases/showcase-2/Fondo.jpeg);
        background-position: center center;
        background-size: cover;
      }
      .bg{
        background-image: url(img/showcases/showcase-2/Fondo.jpeg);
        background-position: center center;
        background-size: cover;
      }
    </style>

</head>
<body>

<div class="container w-auto bg-warning mt-5 rounded shadow">
  <div class="row align-items-stretch">
    <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

    </div>
    <div class="col bg-white rounded-end">
      <h2 class="fw-bold text-center m-5">Iniciar Sesión</h2>
      <!--Formulario Registro-->
      <form action="php/validacion-inicio.php" method="post" id="formulario" class="form-register" onsubmit="return validar();">
        <div class="mb-4">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="mb-4 form-check">
          <input type="checkbox" name="terminos" id="terminos" class="form-check-input">
          <label for="terminos" class="form-check-label">
            Recordarme</a>
          </label>
        </div>
        <div class="d-grid">
          <button type="submit" id="submit" name="submit" class="btn btn-primary">Iniciar sesión</button>
        </div>

        <div class="my-3">
          <span>¿ No tienes una cuenta ? <a href="Registro.php">Registrate</a></span>
          <br>
          <span>¿ Has olvidado tu contraseña ? <a href="#">Recuperar contraseña</a></span>
        </div>
        <?php require("php/validacion-inicio.php"); ?>
      </form>
      <!--Redes Sociales-->
      <div class="container w-100 my-4">
        <div class="row text-center">
            <div class="col-12 py-2">Iniciar sesión con:</div>
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