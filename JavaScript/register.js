// Variables necesarias para validar el registro.
var password = document.getElementById("passwordInput");
var form = document.getElementById("registerForm");

// Regex para hacer los checks.
var upperCaseLetters = /[A-Z]/g;
var lowerCaseLetters = /[a-z]/g;
var numbers = /[0-9]/g;

// Checks que se hacen para comprobar que la clave del usuario cumpla con los requisitos.
form.addEventListener("submit", function validateForm(event) {
    // Se saca la clase 'is-invalid' para remover el mensaje de error en el campo de la clave.
    password.classList.remove("is-invalid");

    if (password.value.length < 8) {
        // Check 1
        // La clave no llega a los 8 caracteres de longitud.
        // Se cancela el POST request.
        event.preventDefault();
        event.stopPropagation();
        // Se agrega la clase 'is-invalid' al campo de la clave para denotar que esta es incorrecta.
        password.classList.add("is-invalid");
    }

    if (!password.value.match(upperCaseLetters)) {
        // Check 2
        // La clave no contiene mayusculas.
        // Se cancela el POST request.
        event.preventDefault();
        event.stopPropagation();
        // Se agrega la clase 'is-invalid' al campo de la clave para denotar que esta es incorrecta.
        password.classList.add("is-invalid");
    }

    if (!password.value.match(lowerCaseLetters)) {
        // Check 3
        // La clave no contiene minusculas.
        // Se cancela el POST request.
        event.preventDefault();
        event.stopPropagation();
        // Se agrega la clase 'is-invalid' al campo de la clave para denotar que esta es incorrecta.
        password.classList.add("is-invalid");
    }

    if (!password.value.match(numbers)) {
        // Check 4
        // La clave no contiene numeros.
        // Se cancela el POST request.
        event.preventDefault();
        event.stopPropagation();
        // Se agrega la clase 'is-invalid' al campo de la clave para denotar que esta es incorrecta.
        password.classList.add("is-invalid");
    }
});