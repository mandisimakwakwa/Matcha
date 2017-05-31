<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/controllers/relativePathController.php';

//Debug Connection to camagruDTO.php
function ft_checkCamagruDTO()
{

    echo 'camagruDTO.php is accessible<br>';
}