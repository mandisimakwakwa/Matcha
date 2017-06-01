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

            <form class="modal-content sectionMainClassDebug">
                <label>

                    <b>Email</b>
                </label>
                <input type="text"
                       placeholder="Please Enter Email"
                >

                <label>

                    <b>Password</b>
                </label>
                <input type="text"
                       placeholder="Please Enter Password"
                >

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
