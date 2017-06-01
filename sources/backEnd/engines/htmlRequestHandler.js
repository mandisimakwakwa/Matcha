function ft_showLoginModal() {

    var loginFormObj = document.getElementById('loginFormDiv');

    //Give Visibility Styling
    loginFormObj.style.display = "flex";
}

function ft_showRegistrationModal() {

    var registrationFormObj = document.getElementById('registrationFormDiv');

    //Give Visibility Styling
    registrationFormObj.style.display = "flex";
}

function ft_closeLoginModal() {

    var loginFormObj = document.getElementById('loginFormDiv');

    //Give Invisibility Styling
    loginFormObj.style.display = "none";
}