<?php 
include_once ("conexionBD.php");

session_start();

if(isset($_SESSION["rol"])){
    switch($_SESSION["rol"]){
        case 1:
            header("Location: ../paginas_rol/Administrador/pages/dashboard.php");
        break;

        case 2:
            header("Location: ../paginas_rol/Administrador/pages/dashboard.php");
        break;

        default:
    }
}

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['email']=$email;

    $db = mysqli_connect("localhost", "root", "", "chocquibgamers");
    $query = "SELECT * FROM user WHERE email = '$email' and pass = '$password'";
    $query = mysqli_query($conexion,$query);

    $row =  mysqli_fetch_array($query);
    if($row == true){
        $rol = $row[3];
        $_SESSION['rol'] = $rol;
        $_SESSION['id_persona'] = $row['id_persona'];

        switch($_SESSION["rol"]){
            case 1:
                header("Location: ../paginas_rol/Administrador/pages/dashboard.php");
            break;
    
            case 2:
                header("Location: ../paginas_rol/Root/pages/dashboard.php");
            break;
    
            default:
        }
    } else {
        echo "El correo o la contraseña son incorrectos";
    }
}


?>