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
?>