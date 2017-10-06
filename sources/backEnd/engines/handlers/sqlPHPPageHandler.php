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
                        firstname VARCHAR (72),
                        lastname VARCHAR (72),
                        username VARCHAR(30),
                        email VARCHAR(72),
                        password VARCHAR(66),
                        accountVerification INT NOT NULL DEFAULT 0,
                        PRIMARY KEY (userID),
                        UNIQUE (email, username));";

            ft_queryExecute($dbConn, $dbQuery);

            ft_autoIncrementSet($dbConn);

            return $pass;
        } else {

            return false;
        }
    }

    function ft_autoIncrementSet($dbConn) {

        $dbQuery  = "ALTER TABLE users AUTO_INCREMENT=327";
        ft_queryExecute($dbConn, $dbQuery);
    }

    //Get User Email from DB via Email
    function ft_getUserDBEmailByEmail($dbConn, $httpEmail, $httpPassword) {

        $dbQuery = "SELECT email FROM users WHERE email=:email AND password=:password";

        $preparedStatement = $dbConn->prepare($dbQuery);
        $preparedStatement->bindParam(':email', $httpEmail);
        $preparedStatement->bindParam(':password', $httpPassword);
        $preparedStatement->execute();

        $queryResult = $preparedStatement->fetch();
        $dbEmail = $queryResult[0];

        return $dbEmail;
    }

    //Get User Username from DB via Email
    function ft_getUserDBUsernameByEmail($dbConn, $httpEmail, $httpPassword) {

        $dbQuery = "SELECT username FROM users WHERE email=:email AND password=:password";

        $preparedStatement = $dbConn->prepare($dbQuery);
        $preparedStatement->bindParam(':email', $httpEmail);
        $preparedStatement->bindParam(':password', $httpPassword);
        $preparedStatement->execute();

        $queryResult = $preparedStatement->fetch();
        $dbUsername = ucfirst(strtolower($queryResult[0]));

        return $dbUsername;
    }

    //Get User Email from DB via Usernames
    function ft_getUserDBEmailByUsername($dbConn, $httpUsername, $httpPassword) {

        $dbQuery = "SELECT email FROM users WHERE username=:username AND password=:password";

        $preparedStatement = $dbConn->prepare($dbQuery);
        $preparedStatement->bindParam(':username', $httpUsername);
        $preparedStatement->bindParam(':password', $httpPassword);
        $preparedStatement->execute();

        $queryResult = $preparedStatement->fetch();
        $dbEmail = $queryResult[0];

        return $dbEmail;
    }

    //Get User Username from DB via Username
    function ft_getUserDBUsernameByUsername($dbConn, $httpUsername, $httpPassword) {

        $dbQuery = "SELECT username FROM users WHERE username=:username AND password=:password";

        $preparedStatement = $dbConn->prepare($dbQuery);
        $preparedStatement->bindParam(':username', $httpUsername);
        $preparedStatement->bindParam(':password', $httpPassword);
        $preparedStatement->execute();

        $queryResult = $preparedStatement->fetch();
        $dbUsername = $queryResult[0];
        //        $dbUsername = ucfirst(strtolower($queryResult[0]));

        return $dbUsername;
    }

    //Get User Password from DB via Email
    function ft_getUserDBPasswordByEmail($dbConn, $httpEmail, $httpPassword) {

        $dbQuery = "SELECT password FROM users WHERE email=:email AND password=:password";

        $preparedStatement = $dbConn->prepare($dbQuery);
        $preparedStatement->bindParam(':email', $httpEmail);
        $preparedStatement->bindParam(':password', $httpPassword);
        $preparedStatement->execute();

        $queryResult = $preparedStatement->fetch();
        $dbPassword = $queryResult[0];

        return $dbPassword;
    }

    //Get User Password from DB via Email
    function ft_getUserDBPasswordByUsername($dbConn, $httpUsername, $httpPassword) {

        $dbQuery = "SELECT password FROM users WHERE username=:username AND password=:password";

        $preparedStatement = $dbConn->prepare($dbQuery);
        $preparedStatement->bindParam(':username', $httpUsername);
        $preparedStatement->bindParam(':password', $httpPassword);
        $preparedStatement->execute();

        $queryResult = $preparedStatement->fetch();
        $dbPassword = $queryResult[0];

        return $dbPassword;
    }

    //Sign Up User to users table
    function ft_signUp($dbConn, $httpSignUpFirstname, $httpSignUpLastname, $httpSignUpUsername, $httpSignUpEmail, $httpSignUpPassword) {

        /*Email Validation*/
        ft_sendVerificationEmail();

        //Insert user to table
        $dbQuery = "INSERT INTO users (firstname, lastname, username, email, password) VALUES (:firstname, :lastname, :username, :email, :password)";

        $preparedStatement = $dbConn->prepare($dbQuery);
        $preparedStatement->bindParam(':firstname', $httpSignUpFirstname);
        $preparedStatement->bindParam(':lastname', $httpSignUpLastname);
        $preparedStatement->bindParam(':username', $httpSignUpUsername);
        $preparedStatement->bindParam(':email', $httpSignUpEmail);
        $preparedStatement->bindParam(':password', $httpSignUpPassword);

        $preparedStatement->execute();
    }
?>