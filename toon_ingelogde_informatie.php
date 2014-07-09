<?php

session_start();
if (!isset($_SESSION["aangemeld"])) {
    header("location: inloggen.php");
    exit(0);
}
include("presentation/ingelogd.php");
