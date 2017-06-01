<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . "sources/backEnd/controllers/relativePathController.php";

//Get Filename
function ft_getFileName($filePathInfo)
{

    return basename($filePathInfo, ".php");
}

//Get HTTP Login Form Info
function ft_getHTTPLoginInfo()
{

    //Verify That Param POST was Successful
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Get Params From
    }
    //Then Redirect To Index Page
    header("Location: sources/frontEnd/html/htmlLayouts/main.php");
}

//Debug Connection to phpRequestHandler.php
function ft_checkPHPRequestHandler()
{

    echo 'phpRequestHandler.php is accessible<br>';
}


//Reverse Engen
/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $req = file_get_contents("php://input");
    $data_req = json_decode($req, true);
    if ($data_req['REQ_TYPE'] == 'SIGNUP') {
        $username = test_input($data_req['uname']);
        $password = test_input($data_req['upwd']);
        $email = test_input($data_req['email']);
        $response = UserAccessService::signUp($username, $password, $email);
        echo json_encode($response);
    }
    if ($data_req['REQ_TYPE'] == 'SIGNIN') {
        $username = test_input($data_req['uname']);
        $password = test_input($data_req['upwd']);
        $response = UserAccessService::signIn($username, $password);
        if ($response != 'FAlSE') {
            $_SESSION['username'] = $username;
        }
        echo json_encode($response);
    }
    if ($data_req['REQ_TYPE'] == 'IMG_BLEND') {
        strToImage($data_req["camSnapData"]);
        $image2 = imagecreatefrompng('../resources/splashes/splash0.png');
        $image1 = imagecreatefrompng('../resources/snap.png');
        if ($image1 !== false && $image2 !== false) {
            imagealphablending($image1,  true);
            imagesavealpha($image1, true);
            imagealphablending($image2,  true);
            imagesavealpha($image2, true);
            imagecopymerge($image1, $image2, 0, 0, 0, 0, 350, 350, 100);
            //header('Content-Type: image/png');
            //$dum = base64_encode($image1);
            imagepng($image1, "../resources/snapMerge.png");
            imagedestroy($image2);
            imagedestroy($image1);
            echo 'We... are... GOOOOOOD!!! :D';
        } else {
            echo 'NAH niga :(';
        }
        /* $image2 = imagecreatefrompng('../resources/splashes/splash0.png');
         imagealphablending($image1, false);
         imagesavealpha($image1, true);
         imagecopymerge($image1, $image2, 0, 0, 0, 0, 350, 350, 100);
         header('Content-Type: image/png');
         imagepng($image1, "../resources/image.png");
         //$dum = base64_encode($image1);
         imagedestroy($image2);
         imagedestroy($image1);
         echo 'We good';*/