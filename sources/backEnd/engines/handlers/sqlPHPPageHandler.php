<?php

    //Query Execute Function
    function ft_queryExecute($dbConn, $dbQuery) {

        $pass = true;
        $fail = false;

        if ($dbConn && $dbQuery) {

            $preparedStatement = $dbConn->prepare($dbQuery);
            $preparedStatement->execute();

            return $pass;
        } else {

            return $fail;
        }
    }

    //Create Matcha if it doesn't exist query
    function ft_createDB($dbConn, $dbConnName) {

        $pass = true;
        $fail = false;

        if ($dbConn && $dbConnName) {

            $dbQuery = "CREATE DATABASE IF NOT EXISTS $dbConnName";
            ft_queryExecute($dbConn, $dbQuery);

            return $pass;
        } else {

            return $fail;
        }
    }

    //Create USE DB query
    function ft_useMatchaDB($dbConn, $dbConnName) {

        $pass = true;
        $fail = false;

        if ($dbConn && $dbConnName) {

            $dbQuery = "USE $dbConnName";
            ft_queryExecute($dbConn, $dbQuery);

            return $pass;
        } else {

            return $fail;
        }
    }

    //Create users Table query
    function ft_createUsersTable($dbConn) {

        $pass = true;
        $fail = false;

        if ($dbConn) {

            //Regular Spacing Not Implemented Due to nature of query.
            $dbQuery = "CREATE TABLE IF NOT EXISTS users (
                        userID INT(8) AUTO_INCREMENT,
                        username VARCHAR(30),
                        email VARCHAR(72) NOT NULL,
                        password VARCHAR(66),
                        PRIMARY KEY (userID),
                        UNIQUE (email, username));";

            ft_queryExecute($dbConn, $dbQuery);

            ft_autoIncrementSet($dbConn);

            return $pass;
        }
    }

    function ft_autoIncrementSet($dbConn) {

        $dbQuery  = "ALTER TABLE users AUTO_INCREMENT=327";
        ft_queryExecute($dbConn, $dbQuery);
    }
?>