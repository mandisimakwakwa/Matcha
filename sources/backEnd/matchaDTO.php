<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    //Session Creator
    session_start();

    function ft_getCurrentFilename() {

        $Rawfilename =  basename($_SERVER['PHP_SELF']);
        $filename = strstr($Rawfilename, '.', true);

        return $filename;
    }

    function ft_checkPage($currentPage) {

        if ($currentPage == "index") {

            return 1;
        } elseif ($currentPage == "main"){

            return 1;
        } else {

            return 0;
        }
    }

    //Validator function to check for injections
    function ft_validator($userInputSample)
    {

        $userInputSample = trim($userInputSample);
        $userInputSample = stripslashes($userInputSample);
        $userInputSample = htmlspecialchars($userInputSample);

        return $userInputSample;
    }

    function ft_sessionStateLogin($dbConn, $decodedHTTPJSON) {

        //Set Sessions
        $_SESSION['httpLoginUsernameEmail'] = ft_validator($decodedHTTPJSON['httpLoginUsernameEmail']);
        $_SESSION['httpLoginPassword'] = hash("sha256", ft_validator($decodedHTTPJSON['httpLoginPassword']));
        $_SESSION['confirmLogin'] = "1";

        //Retrieve User From DB
        //Set DB Sessions

        $httpLoginPassword = $_SESSION['httpLoginPassword'];

        if (filter_var($_SESSION['httpLoginUsernameEmail'], FILTER_VALIDATE_EMAIL)) {

            $httpLoginEmail = $_SESSION['httpLoginUsernameEmail'];
            $_SESSION['userDBEmail'] = ft_getUserDBEmailByEmail($dbConn, $httpLoginEmail, $httpLoginPassword);
            $_SESSION['userDBUsername'] = ft_getUserDBUsernameByEmail($dbConn, $httpLoginEmail, $httpLoginPassword);
            $_SESSION['userDBPassword'] = ft_getUserDBPasswordByEmail($dbConn, $httpLoginEmail, $httpLoginPassword);
        } else {

            $httpLoginUsername = $_SESSION['httpLoginUsernameEmail'];
            $_SESSION['userDBEmail'] = ft_getUserDBEmailByUsername($dbConn, $httpLoginUsername, $httpLoginPassword);
            $_SESSION['userDBUsername'] = ft_getUserDBUsernameByUsername($dbConn, $httpLoginUsername, $httpLoginPassword);
            $_SESSION['userDBPassword'] = ft_getUserDBPasswordByUsername($dbConn, $httpLoginUsername, $httpLoginPassword);
        }

        //Session Set Error Log
//        $_SESSION['errorLog'] = "Error Login and Password Don't Match";

        if ((($_SESSION['userDBEmail'] == $httpLoginEmail) || ($_SESSION['userDBUsername'] == $httpLoginUsername)) && ($_SESSION['userDBPassword'] == $httpLoginPassword)) {

            $confirmLoginJSONValue = $_SESSION['confirmLogin'];
            $switchNode = "login";

            //Send Client-Side Response
            ft_sendJSON($confirmLoginJSONValue, $switchNode);
        } else {

            if ($_SESSION['userDBEmail']) {

                $switchNode = "errorLog";

                ft_sendJSON($_SESSION['errorLog'], $switchNode);
            } else {

                $switchNode = "errorUserNull";
                $_SESSION['errorLog'] = "Error Login Doesn't Exist!";

                ft_sendJSON($_SESSION['errorLog'], $switchNode);
            }
        }
    }

    function ft_sessionStateSignUp($dbConn, $decodedHTTPJSON) {

        //Set Sessions
        $_SESSION['httpSignUpFirstName'] = ft_validator($decodedHTTPJSON['httpSignUpFirstName']);
        $_SESSION['httpSignUpLastName'] = ft_validator($decodedHTTPJSON['httpSignUpLastName']);
        $_SESSION['httpSignUpUsername'] = ft_validator($decodedHTTPJSON['httpSignUpUsername']);
        $_SESSION['httpSignUpEmail'] = ft_validator($decodedHTTPJSON['httpSignUpEmail']);
        $_SESSION['httpSignUpPassword'] = hash("sha256", ft_validator($decodedHTTPJSON['httpSignUpPassword']));
        $_SESSION['confirmLogin'] = "1";

        //Variables to store into users Table
        $httpSignUpFirstname = $_SESSION['httpSignUpFirstName'];
        $httpSignUpLastname = $_SESSION['httpSignUpLastName'];
        $httpSignUpUsername = $_SESSION['httpSignUpUsername'];
        $httpSignUpEmail = $_SESSION['httpSignUpEmail'];
        $httpSignUpPassword = $_SESSION['httpSignUpPassword'];

        //Assign User HTTP values to users Table
        ft_signUp($dbConn, $httpSignUpFirstname, $httpSignUpLastname, $httpSignUpUsername, $httpSignUpEmail, $httpSignUpPassword);

        //Log Successful Sign Up in.
            //Set DB Sessions
            $_SESSION['userDBEmail'] = ft_getUserDBEmailByEmail($dbConn, $httpSignUpEmail, $httpSignUpPassword);
            $_SESSION['userDBPassword'] = ft_getUserDBPasswordByEmail($dbConn, $httpSignUpEmail, $httpSignUpPassword);

            //Validate User
            if (($httpSignUpEmail == $_SESSION['userDBEmail']) && ($httpSignUpPassword == $_SESSION['userDBPassword'])) {

                $switchNode = "signUp";
                $confirmLoginJSONValue = $_SESSION['confirmLogin'];

                ft_sendJSON($confirmLoginJSONValue, $switchNode);
            } else {

                echo "Error Send JSON not called.";
            }
    }

    //JSON Prep
    function ft_sendJSON($sourceContent, $switchNode) {

        switch ($switchNode) {

            case "login" :

                $jsonObj = ft_prepLoginJSON($sourceContent);
                break;
            case "signUp" :
                $jsonObj = ft_prepSignUpJSON($sourceContent);
                break;
        }

        if ($jsonObj) {

            $jsonEncode = json_encode($jsonObj, JSON_PRETTY_PRINT);
            echo $jsonEncode;
        } else {

            echo "JSON error from ft_sendJSON";
        }
    }

    function ft_prepLoginJSON($sourceContent) {

        $confirmLoginJSONIndex = "confirmLogin";
        $jsonObj = array($confirmLoginJSONIndex => $sourceContent);

        return $jsonObj;
    }

    function ft_prepSignUpJSON($sourceContent) {

        $confirmLoginJSONIndex = "confirmLogin";
        $jsonObj = array($confirmLoginJSONIndex => $sourceContent);

        return $jsonObj;
    }
?>