<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

//PHP Custom Rudimentary Unit Tests

    //Unit Tests
    function ft_runUnitTests() {

        try {

            $passCounter = 0;

            //Test Sum
            $testSum = 5;

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

            $originalResult = ft_getConnection($dsn, $user, $password);
            $expectedResult = true;

            if ($expectedResult == $originalResult) {

                $passCounter++;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $testFunctionName, $testFunctionLocation, $testFunctionStartLine));
            }

            //Test Five
            //Test Name : ft_createDB

            $testNumber = 5;

            $testFunctionName = "ft_createDB";
            $testFunctionLocation = "sqlPHPPageHandler.php";
            $testFunctionStartLine = "Line 22";

            $dsn = "mysql:host=localhost";
            $user = "root";
            $password = "password";
            $dbConnName = $_SESSION['dbConnName'];

            $passCondition = ft_getConnection($dsn, $user, $password);

            $originalResult = ft_createDB($passCondition, $dbConnName);
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