<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    function ft_unitTests() {

        $passCount = 1;

        for ($i = 0; $i < 5; $i++) {

            switch ($i) {

                case 1:
                    ft_testFunc("");
                    $passCount += 1;
                    break;
                case 2:
                    ft_testFunc("");
                    $passCount += 1;
                    break;
                case 3:
                    ft_testFunc("");
                    $passCount += 1;
                    break;
                case 4:
                    ft_testFunc("");
                    $passCount += 1;
                    break;
                case 5:
                    ft_testFunc("");
                    $passCount += 1;
                    break;
            }
        }

        if ($passCount == 5) {

            return 1;
        } else {

            return 0;
        }
    }

    function ft_checkPageUnitTests() {

        $passCount = 1;

        for ($i = 0; $i < 5; $i++) {

            switch ($i) {

                case 1:
                    $result = ft_checkPage("index");

                    if ($result) {

                        $passCount += 1;
                    }
                    break;
                case 2:
                    $result = ft_checkPage("main");

                    if ($result) {

                        $passCount += 1;
                    }
                    break;
                case 3:
                    $result = ft_checkPage("null");

                    if (!$result) {

                        $passCount += 1;
                    }
                    break;
                case 4:
                    $result = ft_checkPage("errorText");

                    if (!$result) {

                        $passCount += 1;
                    }
                    break;
                case 5:
                    $result = ft_checkPage("errorText");

                    if (!$result) {

                        $passCount += 1;
                    }
                    break;
            }
        }

        if ($passCount == 5) {

            return 1;
        } else {

            return 0;
        }
    }

    function ft_getCurrentFilenameUnitTests() {

        $passCount = 1;

        for ($i = 0; $i < 5; $i++) {

            switch ($i) {

                case 1:

                    $result = ft_getCurrentFilename();
                    if ($result == "index") {

                        $passCount += 1;
                    }
                    break;
                case 2:
                    $result = ft_getCurrentFilename();

                    if ($result == "main") {

                        $passCount += 1;
                    }
                    break;
                case 3:
                    $result = ft_getCurrentFilename();

                    if ($result != "null") {

                        $passCount += 1;
                    }
                    break;
                case 4:
                    $result = ft_getCurrentFilename();

                    if ($result != "errorText") {

                        $passCount += 1;
                    }
                    break;
                case 5:
                    $result = ft_getCurrentFilename();

                    if ($result != "errorText") {

                        $passCount += 1;
                    }
                    break;
            }
        }

        if ($passCount == 5) {

            return 1;
        } else {

            return 0;
        }
    }

    function ft_runUnitTests() {

        $checkPageTest = ft_checkPageUnitTests();
        $getCurrentFilenameTest = ft_getCurrentFilename();
    }
?>