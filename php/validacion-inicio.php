<?php
require("conexionBD.php");

if(isset($_POST["submit"])){
   $correo = $_POST["email"];
   $password = $_POST["password"];

   if(empty($correo || $password)){
      echo "<div class='alert alert-danger' role='alert'>Ingresa los datos</div>";
   }

   elseif(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
      echo "<div class='alert alert-danger' role='alert'>Ingresa un correo electronico valido!</div>";
   }

   elseif(strlen($password) < 8){
      echo "<div class='alert alert-danger' role='alert'>La contraseña es incorrecta!</div>";
  }

  elseif(strlen($password) > 20){
      echo "<div class='alert alert-danger' role='alert'>La contraseña es incorrecta!</div>";
  } else {
   session_start();

   $consulta = "SELECT * FROM user WHERE email = '$correo' and pass = '$password'";

   $resultado = mysqli_query($conexion,$consulta);

   $filas = mysqli_fetch_array($resultado);
   if($filas == true){
      $_SESSION['id'] = $filas['id_persona'];
      header("Location: ../Pagina.php");
      
   }
   else{
      echo"<script>alert('Error En La Autenticacion'); window.location='../index.php';</script>";
   }

   mysqli_free_result($resultado);
   mysqli_close($conexion);
   }
}

?>