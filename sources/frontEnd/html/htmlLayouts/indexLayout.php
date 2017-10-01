<?php

    //Defining

    require_once ServerRoot . "resources/services/google/vendor/autoload.php";
    const CLIENT_ID = '1007816371578-7js0bfdnusmvtu2c9n77gbur3m40lk4k.apps.googleusercontent.com';
    const CLIENT_SECRET = 'Vx6l_nIRX3hlyLG-x9EmFqPT';
    const REDIRECT_URI = 'http://localhost/Matcha/sources/frontEnd/html/htmlLayouts/main.php';

    session_start();
    //Initialization

    $client = new Google_Client();
    $client->setClientId(CLIENT_ID);
    $client->setClientSecret(CLIENT_SECRET);
    $client->setRedirectUri(REDIRECT_URI);
    $client->setScopes('email');

    $plus = new Google_Service_Plus($client);
    //Actual Process

    if (isset($_REQUEST['logout'])) {

        session_unset();
    }

    if (isset($_GET['code'])) {

        $client->authenticate($_GET['code']);
        $_SESSION['access_token'] = $client->getAccessToken();
        $redirect = 'http://'.$_server['HTTP_HOST'].$_SERVER['PHP_SELF'];
        header('Location:'.filter_var($redirect,FILTER_SANITIZE_URL));
    }

    if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {

        $client->setAccessToken($_SESSION['access_token']);
        $me = $plus->people->get('me');

        $id = $me['id'];
        $name = $me['displayName'];
        $email = $me['emails'][0]['value'];
        $profile_image_url = $me['image']['url'];
        $cover_image_url = $me['cover']['coverPhoto']['url'];
        $profile_url = $me['url'];
    } else {

        $authUrl = $client->createAuthUrl();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        >
        <meta http-equiv="X-UA-Compatible"
              content="ie=edge"
        >

        <link rel="stylesheet"
              href="sources/frontEnd/css/indexPage.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="sources/frontEnd/css/matcha.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="sources/frontEnd/css/normalize.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="sources/frontEnd/css/boilerplate.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="resources/debuggers/cssDebugger.css"
              type="text/css"
        >

        <link rel="stylesheet"
              href="https://www.w3schools.com/w3css/4/w3.css"
        >
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        >

        <script src="sources/backEnd/engines/handlers/indexJSPageHandler.js"
                type="text/javascript"
        ></script>
        <script src="sources/backEnd/engines/handlers/matchaJSHandler.js"
                type="text/javascript"
        ></script>

        <script src="sources/backEnd/engines/controllers/matchaJSController.js"
                type="text/javascript"
        ></script>
        <script src="sources/backEnd/engines/controllers/ajaxController.js"
                type="text/javascript"
        ></script>
        <script src="resources/libs/jQuery/jquery-3.2.1.js"
                type="text/javascript"
        ></script>

        <script src="resources/debuggers/jsDebugger.js"
                type="text/javascript"
        ></script>

        <title>Matcha</title>
    </head>
    <body>

        <div class="bodyDivClass">

            <?php

                include $sectionMainTemplate;
            ?>
        </div>
    </body>
</html>