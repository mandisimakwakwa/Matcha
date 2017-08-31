<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    function ft_checkPageUnitTests() {

        $testOne = ft_checkPage("index");
        $testTwo = ft_checkPage("main");
        $testThree = ft_checkPage("null");

        $result = "pass";

        if ($testOne == "index") {

            return $result;
        } elseif ($testTwo == "main") {

            return $result;
        } elseif ($testThree) {

            return $result;
        } else {

            $result = "fail";

            return $result;
        }
    }

    function ft_getCurrentFilenameUnitTest() {

        $testOne = ft_getCurrentFilename();

        $result = "pass";

        if ($testOne == "index" || $testOne == "main") {

            return $result;
        } else {

            $result = "fail";

            return $result;
        }
    }

    function ft_runUnitTests() {

        $checkPageTest = ft_checkPageUnitTests();
        $getCurrentFilenameTest = ft_getCurrentFilename();

        $result = 1;

        if ($checkPageTest == "pass") {

            return $result;
        } elseif ($getCurrentFilenameTest == "pass") {

            return $result;
        } else {

            $result = 0;

            return $result;
        }
    }
?>