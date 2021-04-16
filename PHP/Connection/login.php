<?php
// Se inicia la session y incluye la conexion a la BDD.
session_start();
include "./PDO.php";

// Definicion de variables.
$userEmail = $_POST["email"];
$userPassword = $_POST["password"];

// Query para obtener la informacion relacionada con el email dado por el usuario.
$sql = $pdo->prepare("SELECT * FROM clients WHERE email = ?");
$sql->execute([$userEmail]);
$result = $sql->fetchObject();

// Contraseña hasheada dada por la BDD.
$hashedPassword = $result->password;

/**
 * Verificacion 1:
 * Verificacion que se hace para saber si el email dado por el usuario existe en la BDD
 * Caso $result->email sea FALSE se redirecciona al usuario a la 'Login page' para explicarle el error; Caso TRUE, se sigue con el proceso de autentificacion.
 */
if (!$result->email) {
    header("Location: ../Views/Login.php?error=email_login_error");
    die();
}

/**
 * Verificacion 2:
 * Verificacion que se hace para saber si la contraseña dada por el usuario es correcta.
 * Caso FALSE se redirecciona al usuario a la 'Login page' para explicarle el error; Caso TRUE, el proceso de logueo fue completado y se lo redirecciona a su 'Feed'.
 */
if (!password_verify($userPassword, $hashedPassword)) {
    session_destroy();
    header("Location: ../Views/Login.php?error=password_login_error");
    die();
}

// Variables para la session
foreach ($result as $key => $value) {
    $_SESSION[$key] = $value;
}

/**
 * Verificacion 3:
 * Verificacion que se hace para saber si el perfil del usuario esta activo o no.
 * Caso $result->status sea FALSE se redirecciona al usuario a la 'Login page' para explicarle el error; Caso TRUE, se sigue con el proceso de autentificacion.
 */
if (!$result->status) {
    header("Location: ../Views/DisabledFeed.php");
    die();
}

// Redireccion al Feed del usuario
header("Location: ../Views/Feed.php");
die();
