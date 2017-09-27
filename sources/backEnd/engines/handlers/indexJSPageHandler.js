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

function ft_signOutButton() {

    console.log("Sign Out Button Pressed.");
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

    console.log("Login Button Pressed.");
}

function ft_loginScrollButton() {

    $(document).ready(function (){
        $("#loginScrollButtonID").click(function (){
            $('html, body').animate({
                scrollTop: $(".indexPage2DivClass").offset().top
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
                scrollTop: $(".indexPage2DivClass").offset().top
            }, 2000);
        });
    });
}

function ft_signUpButton() {

    console.log("Sign Up Button Pressed");
}

function ft_googleSignUpButton() {

    console.log("Goolge Sign Up Button Pressed");
}

