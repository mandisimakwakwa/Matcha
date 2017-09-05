<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';


    function ft_unitTestFail() {

        echo "Error PHP Function Failure.";
    }

    function ft_runUnitTests() {

        $testVal = 0;
        assert_options(ASSERT_CALLBACK, 'ft_unitTestFail');
        assert($testVal, "Error Function Fail.");
    }
?>