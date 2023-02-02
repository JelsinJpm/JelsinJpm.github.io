<?php

require "conexionBD.php";

 if(isset($_POST["submit"])){
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $telefono = $_POST["telefono"];
    $tipodoc = $_POST["tipodoc"];
    $documento = $_POST["nrodoc"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    $nombre = preg_replace("/[[:space:]]/"," ",trim($nombre));
    $apellidos = preg_replace("/[[:space:]]/"," ",trim($apellidos));

    if(empty($nombre || $apellidos || $telefono || $tipodoc || $documento || $email || $password || $password2)){
        echo "Todos Los Campos Son obligatorios";
    }

    elseif(strlen($nombre) > 30){
        echo "<div class='alert alert-danger' role='alert'>Tu nombre es muy largo!</div>";
    }
        
    elseif(strlen($apellidos) > 30){
        echo "<div class='alert alert-danger' role='alert'>Tus apellidos son muy largos!</div>";
    }

    elseif(!is_numeric($telefono)){
        echo"<div class='alert alert-danger' role='alert'>Ingresa un número celular valido!</div>";
    }
    
    elseif(strlen($telefono) < 10){
        echo"<div class='alert alert-danger' role='alert'>El número celular es muy corto!</div>";
    }
            
    elseif(strlen($telefono) > 10){
        echo"<div class='alert alert-danger' role='alert'>El número celular es muy largos!</div>";
    }

    elseif(!is_numeric($documento)){
        echo "<div class='alert alert-danger' role='alert'>Ingresa un número de documento valido!</div>";
    }

    elseif(strlen($documento) < 8){
        echo "<div class='alert alert-danger' role='alert'>El número de documento es muy corto!</div>>";
    }

    elseif(strlen($documento) > 10){
        echo "<div class='alert alert-danger' role='alert'>El número de documento es muy largos!</div>";
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<div class='alert alert-danger' role='alert'>Ingresa un correo electronico valido!</div>";
    }

    elseif(strlen($password) < 8){
        echo "<div class='alert alert-danger' role='alert'>La contraseña debe tener entre 8 y 20 caracteres!</div>";
    }

    elseif(strlen($password) > 20){
        echo "<div class='alert alert-danger' role='alert'>La contraseña debe tener entre 8 y 20 caracteres!</div>";
    }

    elseif($password != $password2){
        echo"<div class='alert alert-danger' role='alert'>Las contraseñas no coiciden!</div>";
    } else{    
    $insertar = "INSERT INTO persona(cedula, nombre, apellidos, telefono, email) VALUES ('$documento','$nombre','$apellidos','$telefono','$email')";
    $resultado = mysqli_query($conexion, $insertar);
        if (!$resultado){
            echo"Error Al Registrarse";
        }else{
            echo "<script>alert('Usuario registrado exitosamente'); window.location='../index.php';</script>";  
        }
        }
        //Se selecciona el ultimo id de la persona registrada
    mysqli_close($conexion);}

?>