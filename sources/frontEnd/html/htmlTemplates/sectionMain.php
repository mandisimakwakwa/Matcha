<?php

//Defining

    require_once ServerRoot . "resources/services/google/vendor/autoload.php";
    const CLIENT_ID = '1007816371578-7js0bfdnusmvtu2c9n77gbur3m40lk4k.apps.googleusercontent.com';
    const CLIENT_SECRET = 'Vx6l_nIRX3hlyLG-x9EmFqPT';
    const REDIRECT_URI = 'http://localhost/Matcha/frontEnd/html/htmlLayouts/main.php';

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

<section class="section">

    <div class="modalClass divDebugClassOne">

        <div class="modalClassContentClass divDebugClassTwo"
        >

            <div class="modalFillerClass divDebugClassThree"
            >

                <div class="sideFillerClass"></div>
                <button title="Close"
                        class="modalCloseButtonClass"
                        onclick="ft_closeModal()"
                >

                    &times;
                </button>
            </div>
            <div class="signInFormContainerClass divDebugClassFour"
            >

                <div class="signInTitleClass">

                    <h1>Sign In</h1>
                </div>
                <form class="signInFormClass"
                      method="post"
                >

                    <label for="signInInputEmailID">

                        <b>Email</b>
                        <br/>
                    </label>
                    <input type="text"
                           placeholder="Please Enter Email or Username"
                           class="inputTextClass"
                           id="signInInputEmailID"
                    />

                    <br/>

                    <label for="signInInputPasswordID">

                        <b>Password</b>
                        <br/>
                    </label>
                    <input type="text"
                           placeholder="Please Enter Password"
                           class="inputTextClass"
                           id="signInInputPasswordID"
                    />
                </form>
                <button class="submitButtonClass"
                        onclick="ft_submitButton()"
                >

                    Submit
                </button>

                <div>

                    <input type="checkbox"
                           id="remeberMeCheckBoxID"
                    />
                    <label for="remeberMeCheckBoxID">

                        Remember me
                    </label>
                </div>

                <div>|</div>

                <!--<button class="googleSignInButtonClass"
                        onclick="ft_googleSignInButton()"
                >

                    Google
                </button>-->

<!--                This is a test -->
                <div>

                    <?php

                        if (isset($authUrl)) {

                            echo "<a class='login' href='".$authUrl."'><img src='resources/services/google/signin_button.png'/><a/>";
                        } else {

                            print "ID: {$id} <br>";
                            print "Name: {$name} <br>";
                        }
                    ?>
                </div>

                <button class="facebookSignInButtonClass"
                        onclick="ft_facebookSignInButton()"
                >

                    Facebook
                </button>
            </div>

            <div class="modalFillerClass divDebugClassThree"
            >

                <button title="Cancel"
                        class="modalCancelButtonClass"
                        onclick="ft_closeModal()"
                >

                    Cancel
                </button>
                <div class="sideFillerClass"></div>
                <div class="forgotPasswordClass">

                    <pre>Forgot <a href="#">password?</a></pre>
                </div>
            </div>
        </div>
    </div>

    <button class="signInButtonClass"
            onclick="ft_signInButton()"
    >

        Sign In
    </button>
</section>