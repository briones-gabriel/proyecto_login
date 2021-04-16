<?php
session_start();

if (!$_SESSION) {
    header("Location: ./Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Bienvenido | Feed</title>
</head>

<body class="d-flex justify-content-center align-items-center welcome-form container-lg">
    <div class="card text-center">
        <img src="../../Assets/user-logo.png" alt="User" style="width: 120px;" class="align-self-center mt-3">
        <div class="card-body">
            <h5 class="card-title mx-3"><?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"]; ?></h5>
            <p class="card-text">
                <?php echo $_SESSION["email"] ?>
                <br>
                <?php echo $_SESSION["birthDate"] ?>
            </p>
            <a href="../Connection/logout.php" class="btn btn-primary">Log out</a>
        </div>
        <div class="card-footer">
            <a href="../Connection/disable_user.php" class="">Desactivar mi usuario</a>
        </div>
    </div>
</body>

</html>