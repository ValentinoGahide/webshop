<?php

session_start();

header("location: index.php");
exit(0);

include("presentation/registrationform.php");
