<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Bienvenido | Login</title>
</head>

<body class="d-flex justify-content-center align-items-center welcome-form container-lg">
    <div class="card w-50">
        <div class="card-body">
            <h5 class="card-title text-center">Bienvenido | Login</h5>
            <div class="card-body">
                <form id="loginForm" action="../Connection/login.php" method="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" id="emailInput" name="email" class="form-control <?php echo $_GET["error"] == "email_login_error" ? "is-invalid" : ""; ?>" placeholder="example@hotmail.com" required>
                        <div class="invalid-feedback">
                            <?php echo $_GET["error"] == "email_login_error" ? "Email incorrecto." : "Ingrese su email."; ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input type="password" id="passwordInput" name="password" class="form-control <?php echo $_GET["error"] == "password_login_error" ? "is-invalid" : ""; ?>" required>
                        <div class="invalid-feedback">
                            <?php echo $_GET["error"] == "password_login_error" ? "Contraseña incorrecta." : "Ingrese su contraseña."; ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="./Register.php">Nuevo usuario?</a>
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
</body>

</html>