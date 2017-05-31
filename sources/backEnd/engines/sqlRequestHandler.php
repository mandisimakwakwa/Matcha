<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . "sources/backEnd/controllers/relativePathController.php";

//Debug Connection to sqlRequestHandler.php
function ft_checksqlRequestHandler()
{

    echo 'sqlRequestHandler.php is accessible<br>';
}