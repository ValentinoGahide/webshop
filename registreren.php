<?php

require_once("business/userservice.class.php");
require_once("exceptions/gebruikerbestaatexception.class.php");

if (isset($_GET["action"]) == "register") {
    try {
        UserService::voegNieuweGebruikerToe($_POST["gebruikersnaam"], $POST["wachtwoord"]);
        header("location: index.php");
        exit(0);
    } catch (GebruikerBestaatException $gbe) {
        header("location: registreren.php?error=userexists");
        exit(0);
    }
} else {
    $error = isset($_GET["error"]);
    include("presentation/registerform.php");
}