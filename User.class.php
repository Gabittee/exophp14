<?php

session_start();

class User {
    public $idLogin;
    public $email;
    public $firstname;

    public function __construct()
    {
        $this->idLogin = $_SESSION['idLogin'];
        $this->email = $_SESSION['email'];
        $this->firstname = $_SESSION['firstname'];
    }
}
