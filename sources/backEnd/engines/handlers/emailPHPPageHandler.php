<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    session_start();

    if (($_SESSION['userDBUsername'] != "#") && ($dbConn)) {

        ft_updateAccountVerification($dbConn, $_SESSION['userDBUsername']);
    }
?>