<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . "sources/backEnd/controllers/relativePathController.php";

//Get Filename
function ft_getFileName($filePathInfo)
{

    return basename($filePathInfo, ".php");
}

//Debug Connection to phpRequestHandler.php
function ft_checkPHPRequestHandler()
{

    echo 'phpRequestHandler.php is accessible<br>';
}