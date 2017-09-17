<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';

    //Debug Sessions
    function ft_arrayDebugger($array) {

        $pass = true;
        $fail = false;

        if ($array) {

//            var_dump($array);
            return $pass;
        } else {

            return $fail;
        }
    }
?>