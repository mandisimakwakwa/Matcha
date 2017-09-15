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