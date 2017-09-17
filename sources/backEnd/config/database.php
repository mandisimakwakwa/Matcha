<?php

    //Session Creator
    session_start();

    //DB Connection Config
    $DB_DSN = 'mysql:host=localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = 'password';
    $DB_NAME = 'Matcha';

    //DB Conn Sessions
    $_SESSION['dbConnDSN'] = $DB_DSN;
    $_SESSION['dbConnUser'] = $DB_USER;
    $_SESSION['dbConnPassword'] = $DB_PASSWORD;
    $_SESSION['dbConnName'] = $DB_NAME;
?>