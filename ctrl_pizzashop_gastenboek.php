<?php
session_start();

require_once("business/gastenboekservice.class.php");

$gb = new Gastenboek();
if (isset($_GET["action"]) && $_GET["action"] == "create") {
    $auteur = $_POST["auteur"];
    $boodschap = $_POST["boodschap"];
    if (!empty($auteur) && !empty($boodschap)) {
        $gb->createBericht($auteur, $boodschap);
    }
}
include("presentation/pizzashop_gastenboek.php");     
