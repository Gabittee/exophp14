<?php

session_start();

require_once('./bdd.php');

$email = $_POST['email'];
$password = $_POST['password'];

if (!$email || !$password) {
    echo "Veuillez remplir des données";
}

$data = $bdd->query("SELECT * FROM php_login WHERE `email` = '$email'");

while($donnes = $data->fetch()) {
    if ($donnes['password'] == hash('sha256', $password)) {
        echo "Bienvenue";
        $_SESSION['idLogin'] = $donnes['id_login'];
        $_SESSION['email'] = $donnes['email'];
        $_SESSION['firstname'] = $donnes['firstname'];

        $cookie_name = "SESSION";
        $cookie_value = $_SESSION['firstname'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    } else {
        session_destroy();
    }
}