//Debug
function ft_indexHandlerDebugger() {

    console.log("Index JS On");
}

function ft_signInButton() {

    var modal = document.getElementsByClassName('modalClass').item(0);

    modal.style.display = "flex";
    modal.addEventListener("click", ft_outsideClickCloseModal);
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

