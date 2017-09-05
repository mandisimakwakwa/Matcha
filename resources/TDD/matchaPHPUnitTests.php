<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    function ft_runUnitTests() {

        assert_options(ASSERT_ACTIVE, 1);

        try {

            //Test One

            $expectedResult = "indes    x";
            $originalResult = ft_getCurrentFilename();

            if ($expectedResult == $originalResult) {

                return true;
            } else{

                throw New Exception('MyException1');
            }

        } catch (Exception $e) {

            echo $e->getMessage();
        }
    }
?>