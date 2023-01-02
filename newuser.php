<?php

require_once('./bdd.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birth = $_POST['birth'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip_code = $_POST['zip_code'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];

if ($password == $passwordConfirm) {
    $hashedPassword = hash("sha256", $password);
    $bdd->query("INSERT INTO php_login (`lastname`, `firstname`, `birth`, `address`, `city`, `zip_code`, `email`, `phone`, `password`) VALUES ('$lastname', '$firstname', '$birth', '$address', '$city', '$zip_code', '$email', '$phone', '$hashedPassword')");
}
