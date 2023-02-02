function validar(){
    var nombre, apellidos, telefono, email, password, password2, terminos, expresion;
        nombre = document.getElementById("nombre").value;
        apellidos = document.getElementById("apellidos").value;
        telefono = document.getElementById("telefono").value;
        email = document.getElementById("email").value;
        password = document.getElementById("password").value;
        password2 = document.getElementById("password2").value;
        terminos = document.getElementById("terminos").checked;
        expresion = /\w+@\w+\.+[a-z]/;

if(nombre === "" || apellidos === "" || telefono === "" || email === "" || password === "" || password2 === ""){
    Swal.fire({
        icon: 'warning',
        title: 'Advertencia',
        text: 'Todos los campos son obligatorios!',
    })
    return false;
}

else if (nombre.length > 30){
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'El nombre es muy largo',
    })
    return false;
}

else if (apellidos.length > 30){
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'Los Apellidos Son Muy Largos',
    })
    return false;
}

else if (telefono.length < 10 || telefono.length > 10){
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'Ingrese un numero de telefono valido!',
    })
    return false;
}

else if (isNaN(telefono)){
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'Ingrese un numero de telefono valido!',
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
        text: 'La contraseña debe tener en 8 y 20 caracteres!',
    })
    return false;
}

else if(password != password2){
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'Las contraseñas no coiciden!',
    })
    return false; 
}
else if(terminos == false){
    Swal.fire({
        icon: 'warning',
        title: 'Error...',
        text: 'Aceptar terminos y condiciones',
    })
    return false;
}
else{
    Swal.fire({
        icon: 'success',
        title: '!Inscripción Exitoso¡',
        timer: 10000,
        timerProgressBar: true
    });
    return false;
}
}