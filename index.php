<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    //Run PHP Unit Tests
    ft_runUnitTests();

    $unitTests = 1;

    if ($unitTests) {

        include $indexLayout;
    } else {

        include $unitTestFailTemplate;
    }
?>

