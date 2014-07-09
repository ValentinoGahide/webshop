<?php

session_start();
if (!isset($_SESSION["geregistreerd"])) {
    header("location: index.php");
    exit(0);
}
include("presentation/loginform.php");
