<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    //Session Creator
    session_start();

    //Global Variables
        //DB Connection Variables
        $dbConnDSN = $_SESSION['dbConnDSN'];
        $dbConnUser = $_SESSION['dbConnUser'];
        $dbConnPassword = $_SESSION['dbConnPassword'];
        $dbConnName = $_SESSION['dbConnName'];

        //HTTP Login Sessions
        $_SESSION['httpLoginEmail'] = "#";
        $_SESSION['httpLoginPassword'] = "#";

        //Misc Sessions
        $_SESSION['errorLog'] = "#";

        //Header User Check
        $_SESSION['checkPageName'] = "#";

    //Get Connection Function
    function ft_getConnection($dsn, $user, $password) {

        //Try Connection
        try {

            $dbConn = new PDO($dsn, $user, $password);
            $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $dbConn;
        } catch (PDOException $exception) {

            echo "Connection Failure Due To: " . $exception->getMessage() . PHP_EOL;
        }
    }

    //Establish Network Connection
    $dbConn = ft_getConnection($dbConnDSN, $dbConnUser, $dbConnPassword);

    //Create Database
    ft_createDB($dbConn, $dbConnName);


    //Use Matcha DB
    ft_useMatchaDB($dbConn, $dbConnName);

    //Create Users Table
    ft_createUsersTable($dbConn);

    //Debug Sessions
//    ft_arrayDebugger($_SESSION);
?>