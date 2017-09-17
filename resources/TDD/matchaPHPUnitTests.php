<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    //Session Creator
    session_start();

    $dbConnName = $_SESSION['dbConnName'];

//PHP Custom Rudimentary Unit Tests


    //Unit Tests
    function ft_runUnitTests() {

        try {

            $passCounter = 0;

            //Test Sum
            $testSum = 8;

            //Test One
            //Test Name : ft_getCurrentFilename

            $testNumber = 1;

            $testFunctionName = "ft_getCurrentFilename";
            $testFunctionLocation = "matchaDTO.php";
            $testFunctionStartLine = "Line 7";

            $passCondition = "index";

            $originalResult = ft_getCurrentFilename();
            $expectedResult = $passCondition;

            if ($expectedResult == $originalResult) {

                $passCounter++;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $testFunctionName, $testFunctionLocation, $testFunctionStartLine));
            }

            //Test Two
            //Test Name : ft_checkPage

            $testNumber = 2;

            $testFunctionName = "ft_checkPage";
            $testFunctionLocation = "matchaDTO.php";
            $testFunctionStartLine = "Line 15";

            $passCondition = "main";

            $originalResult = ft_checkPage($passCondition);
            $expectedResult = true;

            if ($expectedResult == $originalResult) {

                $passCounter++;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $testFunctionName, $testFunctionLocation, $testFunctionStartLine));
            }

            //Test Three
            //Test Name : ft_arrayDebugger

            $testNumber = 3;

            $testFunctionName = "ft_arrayDebugger";
            $testFunctionLocation = "phpDebugger.php";
            $testFunctionStartLine = "Line 8";

            $passCondition = array(1, 2, 3, 4);

            $originalResult = ft_arrayDebugger(array($passCondition));
            $expectedResult = true;

            if ($expectedResult == $originalResult) {

                $passCounter++;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $testFunctionName, $testFunctionLocation, $testFunctionStartLine));
            }

            //Test Four
            //Test Name : ft_getConnection

            $testNumber = 4;

            $testFunctionName = "ft_getConnection";
            $testFunctionLocation = "setup.php";
            $testFunctionStartLine = "Line 28";

            $dsn = "mysql:host=localhost";
            $user = "root";
            $password = "password";

            $dbConn = ft_getConnection($dsn, $user, $password);

            $originalResult = $dbConn;
            $expectedResult = true;

            if ($expectedResult == $originalResult) {

                $passCounter++;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $testFunctionName, $testFunctionLocation, $testFunctionStartLine));
            }

            //Test Five
            //Test Name : ft_queryExecute Function

            $testNumber = 5;

            $testFunctionName = "ft_queryExecute";
            $testFunctionLocation = "sqlPHPPageHandler.php";
            $testFunctionStartLine = "Line 4";

            $dbQuery = "CREATE DATABASE IF NOT EXISTS MatchaTestDB";

            $originalResult = ft_queryExecute($dbConn, $dbQuery);
            $expectedResult = true;

            if ($expectedResult == $originalResult) {

                $passCounter++;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $testFunctionName, $testFunctionLocation, $testFunctionStartLine));
            }

            //Test Six
            //Test Name : ft_createDB

            $testNumber = 6;

            $testFunctionName = "ft_createDB";
            $testFunctionLocation = "sqlPHPPageHandler.php";
            $testFunctionStartLine = "Line 22";

            $dbConnName = $_SESSION['dbConnName'];

            $originalResult = ft_createDB($dbConn, $dbConnName);
            $expectedResult = true;

            if ($expectedResult == $originalResult) {

                $passCounter++;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $testFunctionName, $testFunctionLocation, $testFunctionStartLine));
            }

            //Test Seven
            //Test Name : ft_useMatchaDB

            $testNumber = 7;

            $testFunctionName = "ft_useMatchaDB";
            $testFunctionLocation = "sqlPHPPageHandler.php";
            $testFunctionStartLine = "Line 40";


            $originalResult = ft_useMatchaDB($dbConn, $dbConnName);
            $expectedResult = true;

            if ($expectedResult == $originalResult) {

                $passCounter++;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $testFunctionName, $testFunctionLocation, $testFunctionStartLine));
            }

            //Test Eight
            //Test Name : ft_createUsersTable

            $testNumber = 8;

            $testFunctionName = "ft_createUsersTable";
            $testFunctionLocation = "sqlPHPPageHandler.php";
            $testFunctionStartLine = "Line 58";


            $originalResult = ft_createUsersTable($dbConn);
            $expectedResult = true;

            if ($expectedResult == $originalResult) {

                $passCounter++;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $testFunctionName, $testFunctionLocation, $testFunctionStartLine));
            }

            //Pass Check

            if ($testSum == $passCounter) {

                return true;
            }
        } catch (Exception $e) {

            echo $e->getMessage();
        }
    }

    //Unit Test Failure
    function ft_unitTestFailError($testNumber, $functionName, $functionLocation, $functionStartLine) {

        $errorMessage = "Error: Test $testNumber within $functionLocation on line $functionStartLine, $functionName.";

        return $errorMessage;
    }
?>