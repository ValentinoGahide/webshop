<?php

session_start();
require_once("business/userservice.class.php");

if (isset($_GET["action"])&& $_GET["action"] == "login") {
    $toegelaten = UserService::controleerGebruiker($_POST["txtGebruikersnaam"], $_POST["txtWachtwoord"]);
    if ($toegelaten) {
        $_SESSION["aangemeld"] = true;
        header("location: toon_ingelogde_informatie.php");
        exit(0);
    } else {
        header("location: inloggen.php");
        exit(0);
    }
} else {
    include("presentation/loginform.php");
}