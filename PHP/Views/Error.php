<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body class="d-flex justify-content-center align-items-center container-lg">
    <div class="text-center">
        <h3 class="text-danger">Ha ocurrido un error inesperado!</h3>
        <p text-info>
            <?php
            if ($_GET["error"] == "email_error") {
                echo "El email que usted ingresó ya esta en uso,";
            } else {
                echo "Hubo un error durante el proceso de registro,";
            }
            ?>
            <br>
            para volver a intentarlo haga click <a href="./Register.php">aqui</a>
        </p>
    </div>
</body>

</html>