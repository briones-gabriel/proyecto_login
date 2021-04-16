<?php
// Se inicia la session y incluye la conexion a la BDD.
session_start();
include "./PDO.php";

// Query para actualizar el 'status' del cliente en la BDD.
$query = "UPDATE clients SET status = 0 WHERE clientID = ?";
$sql = $pdo->prepare($query);
$sql->execute([$_SESSION["clientID"]]);

// Caso la actualizacion haya sido exitosa, se termina la session y se vuelve a la 'Login page'.
if ($sql) {
    header("Location: ./logout.php");
    die();
} else {
    header("Location: ../Views/Error.php");
    die();
}
