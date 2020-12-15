<?php

    session_start();
    session_destroy();
    header("Location: ../../view/adm/login.html");
    exit;

?>