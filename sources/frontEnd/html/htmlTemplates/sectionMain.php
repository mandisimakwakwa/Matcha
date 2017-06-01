<?php

//Session Start
session_start();

//Initialize Check Page Type Session
$_SESSION['checkPageName'] = ft_getFileName($_SERVER['PHP_SELF']);

//Global Page Variables
$checkPageName = $_SESSION['checkPageName'];
?>

<main class="sectionMainClass">

    <?php

    if ($checkPageName == 'main') {
    } elseif ($checkPageName == 'index') {
        ?>

        <!--Login Form Div-->
        <div id="loginFormDiv"
             class="modal"
        >

                                <span class="close"
                                      onclick="ft_closeLoginModal()"
                                >
                                    &times;
                                </span>

            <form class="modal-content"
                  id="loginForm"
                  method="post"
            >
                <h1>Login</h1>
                <br><br>

                <input type="text"
                       placeholder="Please Enter Email"
                       id="loginEmailInput"
                >

                <input type="password"
                       placeholder="Please Enter Password"
                       id="loginPasswordInput"
                >
                <br><br>

                <div id="loginFormButtonsDivContainer">

                    <button id="loginSubmintButton"
                            onclick="ft_validateUserHttpSend()"
                    >
                        Login
                    </button>

                    <button id="cancelSubmitButton">

                        Cancel
                    </button>
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
        >

                        <span class="close"
                              onclick="ft_closeRegisterModal()"
                        >
                                    &times;
                                </span>

            <form class="modal-content"
                  id="registrationForm"
                  method="post"
            >
                <h1>Register</h1>
                <br><br>

                <input type="text"
                       placeholder="Please Enter Email"
                       id="registerEmailInput"
                >

                <input type="text"
                       placeholder="Please Enter Username"
                       id="registerUsername"
                >

                <input type="text"
                       placeholder="Please Enter Lucky Number"
                       id="registerLuckNumber"
                >

                <input type="password"
                       placeholder="Please Enter Password"
                       id="registerPasswordInput"
                       required>

                <input type="password"
                       placeholder="Please Confirm Password"
                       id="registerConfirmPassword"
                       required>
                <br><br>

                <div id="registrationFormButtonsDivContainer">

                    <button id="registrationSubmintButton"
                            onclick="ft_validateUserHttpSend()"
                    >
                        Submit
                    </button>

                    <button id="cancelSubmitButton"
                            onclick="ft_closeRegisterModal()"
                    >

                        Cancel
                    </button>
                </div>
            </form>
        </div>

        <!--Registration Button-->
        <button onclick="ft_showRegistrationModal()"
        >

            Register
        </button>
        <?php
    }
    ?>
</main>
