//Debug
function ft_indexHandlerDebugger() {

    console.log("Index JS On.");
}

//Client-Side Button Logic

function ft_testSignInButton() {

    console.log("hi");
   /* var modal = document.getElementsByClassName('modalClass').item(0);

    modal.style.display = "flex";
    modal.addEventListener("click", ft_outsideClickCloseModal);*/
}

function ft_submitButton() {

    console.log("Submit Button Pressed.");
}

function ft_googleSignInButton() {

    console.log("Google Sign In Button Pressed.");
}

function ft_facebookSignInButton() {

    console.log("Facebook Sign In Button Pressed.");
}

function ft_menuButton() {

    console.log("Menu Button Pressed.");
}

function ft_loginButton() {

    var sourcePage = "login";

    ft_submitHandler(sourcePage);
}

function ft_forgotPasswordButton() {

    console.log("forgot password button pressed.");
}

function ft_loginScrollButton() {

    $(document).ready(function (){
        $("#loginScrollButtonID").click(function (){
            $('html, body').animate({
                scrollTop: $(".pageTwoDivClass").offset().top
            }, 2000);
        });
    });
}

function ft_pageUpScrollButton() {

    $(document).ready(function (){
        $("#upArrowButtonID").click(function (){
            $('html, body').animate({
                scrollTop: $(".indexPage1DivClass").offset().top
            }, 2000);
        });
    });
}

function ft_signUpScrollButton() {

    $(document).ready(function (){
        $("#signUpScrollButtonID").click(function (){
            $('html, body').animate({
                scrollTop: $(".pageTwoDivClass").offset().top
            }, 2000);
        });
    });
}

function ft_signUpButton() {

    var sourcePage = "signUp";

    ft_submitHandler(sourcePage);
}

function ft_googleSignUpButton() {

    console.log("Goolge Sign Up Button Pressed");
}

function ft_sendLoginHTTPRequest() {

    //Get Email From Register Form Client-Side
    var httpLoginUsernameEmail = document.forms['loginFormID']['loginEmailUsernameInputID'].value;

    //Get Password Form Client-Side
    var httpLoginPassword = document.forms['loginFormID']['loginPasswordInputID'].value;

    //Session State is Login
    var params = {'httpLoginUsernameEmail' : httpLoginUsernameEmail, 'httpLoginPassword' : httpLoginPassword, 'SessionState' : "LOGIN"};

    var handler = "sources/backEnd/engines/handlers/indexPHPPageHandler.php";

    var switchNode = "login";

    ft_sendHTTPRequest("POST", params, "", handler, switchNode);
}

function ft_sendSignUpHTTPRequest() {

    var httpSignUpFirstName = document.forms['signUpFormID']['signUpFirstNameInputID'].value;

    var httpSignUpLastName = document.forms['signUpFormID']['signUpLastNameInputID'].value;

    var httpSignUpUsername = document.forms['signUpFormID']['signUpUsernameInputID'].value;

    var httpSignUpEmail = document.forms['signUpFormIDTwo']['signUpEmailInputID'].value;

    var httpSignUpPassword = document.forms['signUpFormIDTwo']['signUpPasswordInputID'].value;

    var httpSignUpValidatePassword = document.forms['signUpFormIDTwo']['signUpValidatePasswordInputID'].value;

    /*if (!httpSignUpFirstName && !httpSignUpLastName && !httpSignUpEmail) {

        alert("Please check if Firstname, Lastname & Email fields have been filled in.");
    }*/

    //Session State is Sign up
    var params = {'httpSignUpFirstName' : httpSignUpFirstName, 'httpSignUpLastName' : httpSignUpLastName, 'httpSignUpUsername' : httpSignUpUsername, 'httpSignUpEmail' : httpSignUpEmail, 'httpSignUpPassword' : httpSignUpPassword, 'httpSignUpValidatePassword' : httpSignUpValidatePassword, 'SessionState' : "SIGNUP"};

    var handler = "sources/backEnd/engines/handlers/indexPHPPageHandler.php";

    var switchNode = "signUp";

    var passwordCheck = ft_passwordCheck(httpSignUpPassword, httpSignUpValidatePassword);

    if (passwordCheck) {

        ft_sendHTTPRequest("POST", params, "", handler, switchNode);
    } else {

        alert("Your Password must contain at minimum 8 Characters and also contain at least a Number.");
    }
}

function ft_loginCase(jsonResponse) {

    var confirmLogin = jsonResponse.confirmLogin;

    if (confirmLogin == "1") {

        var destPage = "main";

        ft_redirectController(destPage);
    } else {

        alert("Login Failed. Please Check Email or Username and Password!");
    }
}

function ft_signUpCase(jsonResponse) {

    var confirmLogin = jsonResponse.confirmLogin;

    if (confirmLogin == "1") {

        var destPage = "main";

        ft_redirectController(destPage);
    } else {

        alert("Login Failed. Please Check Email or Username and Password!");
    }
}