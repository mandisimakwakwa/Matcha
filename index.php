<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    //Run PHP Unit Tests
    $unitTests = ft_runUnitTests();

    if ($unitTests) {

        include $indexLayout;
    }
?>

