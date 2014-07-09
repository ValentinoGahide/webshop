<?php

session_start();
if (!isset($_SESSION["aangemeld"])) {
    header("location: aangemeld.php");
    exit(0);
}
include("presentation/geheimeinformatie.php");
