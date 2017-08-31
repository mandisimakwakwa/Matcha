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

            return "index";
        } elseif ($currentPage == "main"){

            return "main";
        } else {

            return "null";
        }
    }
?>