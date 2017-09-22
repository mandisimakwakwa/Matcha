<?php

    //Defining

    require_once __DIR__.'/google/vendor/autoload.php';
    const CLIENT_ID = '1007816371578-7js0bfdnusmvtu2c9n77gbur3m40lk4k.apps.googleusercontent.com';
    const CLIENT_SECRET = 'Vx6l_nIRX3hlyLG-x9EmFqPT';
    const REDIRECT_URI = 'http://localhost/Matcha/';

    session_start();
    //Initialization

    $client = new Google_Client();
    $client->setClientId(CLIENT_ID);
    $client->setClientSecret(CLIENT_SECRET);
    $client->setRedirectUri(REDIRECT_URI);
    $client->setScopes('email');

    $plus = new Google_Service_Plis($client);
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
        $me = $plus->pepple->get('me');

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

<div>

    <?php

        if (isset($authUrl)) {

            echo "<a class='login' href='".$authUrl."'><img src='google/signin_button.png' height='50px'/>";
        } else {

            print "ID: {$id} <br>";
            print "Name: {$name} <br>";
        }
    ?>
</div>
