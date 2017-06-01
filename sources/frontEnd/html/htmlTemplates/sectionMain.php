<?php

//Session Start
session_start();

//Populate Check Page Type Session
$_SESSION['checkPageName'] = ft_getFileName($_SERVER['PHP_SELF']);

//Global Page Variables
$checkPageName = $_SESSION['checkPageName'];
?>

<main class="sectionMainClass sectionMainClassDebug">

    <?php

    if ($checkPageName == 'main') {
    } elseif ($checkPageName == 'index') {
        ?>

        <!--Login Form Div-->
        <div id="loginFormDiv"
             class="modal sectionMainClassDebug"
        >

                    <span class="close"
                          onclick="ft_closeLoginModal()"
                    >
                        &times;
                    </span>

            <form class="modal-content sectionMainClassDebug"
                  id="loginForm"
                  method="post"
            >
                <label>

                    <b>Email</b>
                </label>
                <input type="text"
                       placeholder="Please Enter Email"
                       id="loginEmailInput"
                >

                <label>

                    <b>Password</b>
                </label>
                <input type="password"
                       placeholder="Please Enter Password"
                       id="loginPasswordInput"
                >

                <div id="loginFormButtonsDivContainer">

                    <button id="loginSubmintButton"
                            onclick="ft_validateUserHttpSend()"
                    >Login
                    </button>
                    <button id="cancelSubmintLoginButton">Cancel</button>
                </div>
            </form>
        </div>

        <!--Login Button-->
        <button onclick="ft_showLoginModal()"
        >

            Login
        </button>

        <!--Register Form Div-->
        <div id="registrationFormDiv"
             class="modal"
        ></div>

        <!--Registration Button-->
        <button onclick="ft_showRegistrationModal()"
        >

            Register
        </button>
        <?php
    }
    ?>
</main>
