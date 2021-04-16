<?php
// Se incluye la conexion a la BDD.
include "./PDO.php";

// Definicion de variables
$userEmail = $_POST["email"];
$userPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
$userName = $_POST["firstName"];
$userSurname = $_POST["lastName"];
$userBirthDate = $_POST["birthDate"];

// Query para checkear si el email ya esta registrado en la base de datos
$sql = $pdo->prepare("SELECT COUNT(*) FROM clients WHERE email = ?");
$sql->execute([$userEmail]);
$checkResult = $sql->fetch();

// Checkeo que se hace para saber si el email del cliente ya existe en la base de datos
// Si $checkReasult es TRUE, significa que el uruario ya existe. Por lo que se lo redirecciona a una pagina en donde se le explica el error.
if ($checkResult[0] > 0) {
    header("Location: ../Views/Error.php?error=email_error");
    die();
} else {
    // Query para insertar un nuevo registro de usuario en la base de datos.
    $query = "INSERT INTO clients (status, email, password, firstName, lastName, birthDate) VALUES (?, ?, ?, ?, ?, ?)";

    // Se prepara la sentencia SQL y se le adieren los parametros para luego ejecutarla.
    // Al ejecuta la sentencia SQL con los parametros aderidos, se evalua si la ejecucion fue exitosa
    $result = $pdo->prepare($query)->execute([
        1,
        $userEmail,
        $userPassword,
        $userName,
        $userSurname,
        $userBirthDate
    ]);

    // Caso el INSERT haya sido exitoso, se vuelve a la 'Login page'.
    if ($result) {
        header("Location: ../Views/Login.php");
        die();
    } else {
        header("Location: ../Views/Error.php");
        die();
    }
}
