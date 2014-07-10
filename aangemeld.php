<?php

session_start();

if (!isset($_SESSION["aangemeld"])) {
    header("location: index.php");
    exit(0);
}
include("presentation/aangemeldeinformatie.php");
