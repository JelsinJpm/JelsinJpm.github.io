function validar(){
    var email, password, expresion;
    email = document.getElementById("email").value;
    password = document.getElementById("password").value;
    expresion = /\w+@\w+\.+[a-z]/;

if(email === "" || password ===""){
    Swal.fire({
        icon: 'warning',
        title: 'Advertencia',
        text: 'Verifica que los campos no esten vacios',
    })
    return false;
}

else if(email.length > 100){
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'El correo debe tener maximo 100 caracteres!',
    })
    return false;
}

else if(!expresion.test(email)){
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'Ingrese un correo valido!',
    })
    return false;
}

else if(password.length < 8 || password.length > 20){
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'Verifica tu contraseña!',
    })
    return false;
}

}