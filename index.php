<?php

session_start();
require_once("business/userservice.class.php");

if (isset($_GET["action"]) === "login") {
    $toegelaten = UserService::controleerGebruiker($_POST["txtGebruikersnaam"], $_POST["txtWachtwoord"]);
    if ($toegelaten) {
        $_SESSION["aangemeld"] = true;
        header("location: aangemeld.php");
        exit(0);
    } else {
        header("location: index.php");
        exit(0);
    }
} else {
    include("presentation/loginform.php");
}

if (isset($_GET["action"]) === "register") {
    $_SESSION["registreren"] = true;
    header("location: registreren.php");
    exit(0);
}