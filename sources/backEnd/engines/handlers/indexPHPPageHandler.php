<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    //Session Creator
    session_start();

    //Global Variables
        //Handle HTTP Requests
        $getHTTPJSON = file_get_contents("php://input");
        $decodedHTTPJSON = json_decode($getHTTPJSON, true);

        //DB Connection Variables
        $dbConnDSN = $_SESSION['dbConnDSN'];
        $dbConnUser = $_SESSION['dbConnUser'];
        $dbConnPassword = $_SESSION['dbConnPassword'];
        $dbConnName = $_SESSION['dbConnName'];

        $sessionState = $decodedHTTPJSON['SessionState'];

        switch ($sessionState) {

            /*case "REGISTER" :

                ft_sessionStateRegister($dbConn, $decodedHTTPJSON);
                break;*/
            case "LOGIN" :

                ft_sessionStateLogin($dbConn, $decodedHTTPJSON);
                break;
        }

//    ft_arrayDebugger($_SESSION);
?>