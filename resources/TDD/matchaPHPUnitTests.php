<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

//PHP Custom Rudimentary Unit Tests

    //Unit Tests
    function ft_runUnitTests() {

        try {

            $counter = 0;

            //Test Sum
            $testSum = 2;

            //Test One

            $testNumber = 1;

            $functionName = "ft_getCurrentFilename";
            $functionLocation = "matchaDTO.php";
            $functionStartLine = "Line 7";

            $originalResult = ft_getCurrentFilename();
            $expectedResult = "index";

            if ($expectedResult == $originalResult) {

                $counter += 1;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $functionName, $functionLocation, $functionStartLine));
            }

            //Test Two

            $testNumber = 2;

            $functionName = "ft_checkPage";
            $functionLocation = "matchaDTO.php";
            $functionStartLine = "Line 15";

            $originalResult = ft_checkPage("main");
            $expectedResult = "mains";

            if ($expectedResult == $originalResult) {

                $counter += 1;
            } else {

                throw New Exception(ft_unitTestFailError($testNumber, $functionName, $functionLocation, $functionStartLine));
            }

            if ($testSum == $counter) {

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