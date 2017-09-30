<div class="pageOneDivClass">

    <div class="fixedMenuBarClass w3-theme-dark rowClass fullyOpaqueClass">

        <div class="fillerClass"></div>
        <div class="divUserRegScrollClass w3-theme-l1 rowClass textDarkBackgroundClass">

            <div class="scrollButtonClass darkButtonClass textDarkBackgroundClass w3-hover-theme"
                 id="loginScrollButtonID"
                 onclick="ft_loginScrollButton()"
            >

                <b>Login</b>
            </div>
            <div class="scrollButtonClass darkButtonClass textDarkBackgroundClass w3-hover-theme"
                 id="signUpScrollButtonID"
                 onclick="ft_signUpScrollButton()"
            >

                <b>Sign Up</b>
            </div>
        </div>
    </div>

    <div class="matchaTitleDivClass semiOpaqueClass">

        <h1 class="w3-theme-d2 paneNarrowDivClass alignBottoms">
            <b>Matcha</b>
        </h1>
    </div>

    <div class="matchaSloganDivClass semiOpaqueClass">

        <h3 class="w3-theme-l1 paneWideDivClass alignBottomClass">

            <b>Love is an ART to us.</b>
        </h3>
    </div>
</div>

<div class="pageTwoDivClass">

    <div class="paddingLargeFillerClass"></div>

    <div class="paneNarrowDivClass loginFormDivClass flexOneClass w3-theme-d2 columnClass slightlyOpaqueClass">

        <div class="googleLoginButtonClass w3-hover-theme"
             onclick="ft_googleSignInButton()"
        >

            Google
        </div>

        <div class="paddingFillerClass">OR</div>

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

            <div class="buttonClass w3-theme-d4 w3-hover-theme"
                 onclick="ft_loginButton()"
            >

                Login
            </div>
        </form>
    </div>

    <div class="paddingLargeFillerClass"></div>

    <div class="paneWideDivClass w3-theme-l1 flexOneClass rowClass semiOpaqueClass">

        <div class="flexOneClass maxDivHeightClass alignContentCenterClass columnClass">

            <label>

                <h3><b>1. Personal Info:</b></h3>
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

        <div class="flexOneClass maxDivHeightClass alignContentCenterClass columnClass">

            <label>

                <h3><b>2. Login Credentials:</b></h3>
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

        <div class="flexOneClass alignContentCenterClass maxDivHeightClass columnClass">

            <div class="signUpButtonClass darkButtonClass textDarkBackgroundClass w3-hover-theme"
                 onclick="ft_signUpButton()"
            >

                Sign Up
            </div>

            <div>OR</div>

            <div class="googleLoginButtonClass textDarkBackgroundClass w3-hover-theme"
                 onclick="ft_googleSignUpButton()"
            >

                Google Sign Up
            </div>
        </div>
    </div>
</div>

<div class="pageThreeDivClass">

    <div class="paneWideDivClass lastAddedDivClass columnClass semiOpaqueClass">

        <label class="textDarkBackgroundClass">

            <h3><b>Last Added</b></h3>
            <hr/>
        </label>

        <div class="rowClass">

            <div class="cardClass w3-theme-d2 w3-hover-theme columnClass">

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

    <div class="paneWideDivClass flexOneClass w3-theme-l1 rowClass semiOpaqueClass">

        <div class="item-1">

            <h4><b>Let's help you find LOVE</b></h4>
        </div>

        <div class="item-2">

            <h4><b>And your creative side</b></h4>
        </div>

        <div class="item-3">

            <h4><b>In STYLE.</b></h4>
        </div>
    </div>
</div>

<div class="pageFourDivClass">

    <div class="paneWideDivClass aboutClass">

        <a href="https://github.com/mandisimakwakwa/Matcha.git"
           class="alignContentCenterClass flexOneClass columnClass paddingFillerClass w3-hover-theme textDecoNone"
        >

            <i class="fa fa-github" style="font-size: 48px"></i>
            <br/>

            <h5>

                <b>

                    Github
                </b>
            </h5>
        </a>

        <a href="https://www.linkedin.com/in/mandisi-makwakwa/"
           class="alignContentCenterClass flexOneClass columnClass paddingFillerClass w3-hover-theme textDecoNone"
        >

            <i class="fa fa-linkedin" style="font-size: 48px"></i>
            <br/>

            <h5>

                <b>

                    Linked In
                </b>
            </h5>
        </a>
    </div>

    <div class="paneWideDivClass flexOneClass w3-theme-d5 alignBottomClass">

        Author : mmakwakw
    </div>
</div>

