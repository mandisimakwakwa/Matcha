<div class="indexPage1DivClass">

    <div class="indexPageShortDivClass">

        <i class="material-icons w3-theme-l1 w3-hover-theme pointerClass menuButtonClass"
           onclick="ft_buttonController('menuButton')"
        >
            menu
        </i>
        <div class="fillerClass"></div>
        <div class="rowClass w3-theme-l1">

            <div class="loginScrollButtonClass w3-hover-theme"
                 id="loginScrollButtonID"
                 onclick="ft_loginScrollButton()"
            >

                Login
            </div>
            <div class="signUpButtonClass w3-hover-theme"
                 id="signUpScrollButtonID"
                 onclick="ft_signUpScrollButton()"
            >

                Sign Up
            </div>
        </div>
    </div>
    <div class="indexPageLongDivClass">

        <h1 class="textDivClass w3-theme-d2 divBottomClass">

            Matcha
        </h1>
    </div>
    <div class="indexPageLongDivClass">

        <h2 class="paneDivClass paneDivLightClass w3-theme-l1 divBottomClass">

            Love is an ART to us.
        </h2>
    </div>
</div>

<div class="indexPage2DivClass">

        <div class="indexPageLongDivClass paneIndexLoginDivClass">

            <div class="textDivClass indexLoginDivClass w3-theme-d2 columnClass">

                <div class="googleLoginButtonClass upperCaseClass"
                     onclick="ft_googleSignInButton()"
                >

                    Google
                </div>
                <br/>
                <div>OR</div>
                <br/>
                <form id="loginFormID"
                      class="loginFormClass columnClass"
                      method="post"
                >

                    <input type="text"
                           placeholder="Please Enter Email or Username"
                           id="loginEmailUsernameInputID"
                           class="w3-theme-l1 paneDivDarkClass borderNoneClass w3-hover-text-theme"
                    />

                    <br/>

                    <input type="password"
                           placeholder="Please Enter Password"
                           id="loginPasswordInputID"
                           class="w3-theme-l1 paneDivDarkClass borderNoneClass w3-hover-text-theme"
                    required/>

                    <br/>

                    <div class="loginButtonClass w3-theme-d5 w3-hover-theme"
                         onclick="ft_loginButton()"
                    >

                        Login
                    </div>
                </form>

                <br/>
                <a href="#"
                   class="forgotPasswordClass"
                >

                    Forgot Password?
                </a>
            </div>
        </div>

        <div class="indexPageLongDivClass w3-theme-l1">

            <div class="paneDivRowClass paneDivLightClass  columnClass divBottomClass">

                <label>

                    <p>1. Personal Info:</p>
                </label>
                <form id="signUpFormID"
                      class="signUpFormClass columnClass"
                      method="post"
                >

                    <input type="text"
                           placeholder="Please Enter First Name"
                           id="signUpFirstNameInputID"
                           class="w3-theme-l1 paneDivDarkClass borderNoneClass w3-hover-text-theme"
                    />

                    <br/>

                    <input type="text"
                           placeholder="Please Enter Last Name"
                           id="signUpLastNameInputID"
                           class="w3-theme-l1 paneDivDarkClass borderNoneClass w3-hover-text-theme"
                           required/>

                    <br/>

                    <input type="text"
                           placeholder="Please Enter Username"
                           id="signUpUsernameInputID"
                           class="w3-theme-l1 paneDivDarkClass borderNoneClass w3-hover-text-theme"
                           required/>
                </form>
            </div>

            <div class="paneDivRowClass paneDivLightClass w3-theme-l1 columnClass divBottomClass">

                <label>

                    <p>2. Login Credentials:</p>
                </label>
                <form id="signUpFormID"
                      class="signUpFormClass columnClass"
                      method="post"
                >

                    <input type="text"
                           placeholder="Please Enter Email"
                           id="signUpEmailInputID"
                           class="w3-theme-l1 paneDivDarkClass borderNoneClass w3-hover-text-theme"
                    />

                    <br/>

                    <input type="password"
                           placeholder="Please Enter Password"
                           id="signUpPasswordInputID"
                           class="w3-theme-l1 paneDivDarkClass borderNoneClass w3-hover-text-theme"
                           required/>

                    <br/>

                    <input type="password"
                           placeholder="Please Re-Enter Password"
                           id="signUpValidatePasswordInputID"
                           class="w3-theme-l1 paneDivDarkClass borderNoneClass w3-hover-text-theme"
                           required/>
                </form>
            </div>

            <div class="paneDivRowClass w3-theme-l1 columnClass divBottomClass">

                <div class="signUpButtonClass w3-theme-d5 w3-hover-theme"
                     onclick="ft_signUpButton()"
                >

                    Sign Up
                </div>

                <br/>
                <div>OR</div>
                <br/>

                <div class="googleLoginButtonClass upperCaseClass"
                     onclick="ft_googleSignUpButton()"
                >

                    Google Sign Up
                </div>
            </div>
    </div>
    </div>

    <div class="indexPage3DivClass"
         id="indexPage3DivID"
    >

        <div class="paneDivClass columnClass">

            <label>

                <h3><b>Last Added</b></h3>
                <hr/>
            </label>

            <div class="rowClass">

                <div class="cardClass w3-theme-d2 w3-hover-theme columnClass pointerClass">

                    <img src="resources/images/profileSamples/propicEveComplete.png"
                         style="width:100%; height: 80%"
                    />
                    <h3><b>Jane Doe</b></h3>
                </div>

                <div class="cardClass w3-theme-d2 w3-hover-theme columnClass pointerClass">

                    <img src="resources/images/profileSamples/propicAdamComplete.png"
                         style="width:100%; height: 80%"
                    />
                    <h3><b>John Doe</b></h3>
                </div>

                <div class="cardClass w3-theme-d2 w3-hover-theme columnClass pointerClass">

                    <img src="resources/images/profileSamples/propicEveComplete.png"
                         style="width:100%; height: 80%"
                    />
                    <h3><b>Jane Doe</b></h3>
                </div>

                <div class="cardClass w3-theme-d2 w3-hover-theme columnClass pointerClass">

                    <img src="resources/images/profileSamples/propicAdamComplete.png"
                         style="width:100%; height: 80%"
                    />
                    <h3><b>John Doe</b></h3>
                </div>
            </div>
        </div>

        <div class="paneDivClass w3-theme-l1 rowClass">

            <div class="item-1">

                Rhandzo ya munhu i yena
            </div>

            <div class="item-2">

                Ndzi ta ku komba xancila wa bulubulu
            </div>

            <div class="item-3">

                Mundzuku i siku la Rhandzo
            </div>
        </div>
    </div>

    <div class="indexPage4DivClass columnClass">

        <div class="fillerPaddingClass w3-hover-theme roundBorderDivClass pointerClass"
             id="upArrowButtonID"
             onclick="ft_pageUpScrollButton()"
        >

            <i class="material-icons" style="font-size:48px;">

                keyboard_arrow_up
            </i>
        </div>

        <div class="rowClass">

            <div class="cardClass lightBorderClass w3-hover-theme columnClass">

                <i class="material-icons fillerPaddingClass">

                    info
                </i>
                About
            </div>

            <div class="cardClass lightBorderClass w3-hover-theme columnClass">

                Github
            </div>
        </div>
    </div>

</div>
