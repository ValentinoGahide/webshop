<?php

session_start();
require_once("business/userservice.class.php");

if (!isset($_SESSION["aangemeld"])) {
    header("location: index.php");
    exit(0);
}
include("presentation/aangemeldeinformatie.php");
