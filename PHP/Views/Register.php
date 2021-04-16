<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Bienvenido | Registro</title>
</head>

<body class="d-flex justify-content-center align-items-center welcome-form container-lg">
    <div class="card w-75">
        <div class="card-body">
            <form id="registerForm" action="../Connection/register.php" method="post" class="needs-validation" novalidate>
                <h5 class="card-title text-center">Bienvenido | Registro</h5>
                <div class="card-body row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email</label>
                            <input type="email" id="emailInput" name="email" class="form-control" placeholder="example@hotmail.com" required>
                            <div class="invalid-feedback">
                                Ingrese un email.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="passwordInput" class="form-label">Contraseña</label>
                            <input type="password" id="passwordInput" name="password" class="form-control" required>
                            <div id="passwordHelpBlock" class="form-text">
                                Su contraseña debe tener al menos 8 caracteres, contener numeros, letras y por lo menos una mayuscula.
                            </div>
                            <div class="invalid-feedback">
                                Su contraseña no cumple con los requisitos.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="birthDateInput" class="form-label">Fecha de nacimiento</label>
                            <input type="date" id="birthDateInput" name="birthDate" class="form-control" required>
                            <div class="invalid-feedback">
                                Ingrese su fecha de nacimiento.
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="firstNameInput" class="form-label">Nombre</label>
                            <input type="text" id="firstNameInput" name="firstName" class="form-control" required>
                            <div class="invalid-feedback">
                                Ingrese su nombre.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="lastNameInput" class="form-label">Apellido</label>
                            <input type="text" id="lastNameInput" name="lastName" class="form-control" required>
                            <div class="invalid-feedback">
                                Ingrese su apellido.
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button id="submitButton" type="submit" class="btn btn-primary">Registrarse</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer text-center">
            <a href="./Login.php">Ya es usuario?</a>
        </div>
    </div>
    <script>
        (function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script src="../../JavaScript/register.js"></script>
</body>

</html>