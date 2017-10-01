<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

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

    function ft_sessionStateLogin($dbConn, $decodedHTTPJSON) {

        //Set Sessions
        $_SESSION['httpLoginEmail'] = ft_validator($decodedHTTPJSON['httpLoginEmail']);
        $_SESSION['httpLoginPassword'] = hash("sha256", ft_validator($decodedHTTPJSON['httpLoginPassword']));
        $_SESSION['confirmLogin'] = "1";

        //Retrieve User From DB
        $httpLoginEmail = $_SESSION['httpLoginEmail'];
        $httpLoginPassword = $_SESSION['httpLoginPassword'];

        //Session Set Error Log
        $_SESSION['errorLog'] = "Error Login and Password Don't Match";

        //Create users Table & Set Auto Increment
        ft_createUsersTable($dbConn);

        //Set DB Sessions
        $_SESSION['userDBEmail'] = ft_getUserDBEmail($dbConn, $httpLoginEmail, $httpLoginPassword);
        $_SESSION['userDBUsername'] = ft_getUserDBUsername($dbConn, $httpLoginEmail, $httpLoginPassword);
        $_SESSION['userDBPassword'] = ft_getUserDBPassword($dbConn, $httpLoginEmail, $httpLoginPassword);

        if (($_SESSION['userDBEmail'] == $httpLoginEmail) && ($_SESSION['userDBPassword'] == $httpLoginPassword)) {

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
?>