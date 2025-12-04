<?php


$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if (empty($name)) {
        $errors[] = "Le nom est obligatoire.";
    }

    if (empty($email)) {
        $errors[] = "L'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'adresse email n'est pas valide.";
    }

    if (empty($message)) {
        $errors[] = "Le message est obligatoire.";
    }

    if (empty($errors)) {
        $success = true;

    }
}

$view = "contact.view.php";
require __DIR__ . "/../templates/layout.php";
