//Reveals Login Modal
function ft_showLoginModal() {

    var loginFormObj = document.getElementById('loginFormDiv');

    //Give Visibility Styling
    loginFormObj.style.display = "flex";
}

//Reveals Registration Modal
function ft_showRegistrationModal() {

    var registrationFormObj = document.getElementById('registrationFormDiv');

    //Give Visibility Styling
    registrationFormObj.style.display = "flex";
}

//Removes Modal From UI when Clicking Exit Button
function ft_closeLoginModal() {

    var loginFormObj = document.getElementById('loginFormDiv');

    //Give Invisibility Styling
    loginFormObj.style.display = "none";
}

/*
 //Remove Modal from an onclick anywhere outside modal
 var modalObj = document.getElementById('loginForm');

 // When the user clicks anywhere outside of the modal, close it
 modalObj = function(event) {

 console.log(event.target);
 if (event.target == modalObj) {
 modalObj.style.display = "none";
 }
 }*/


/*Get Current Page Event Info*/

function ft_sendHTTPRequest(httpRequestAction, httpPostActionParams, getFormParams) {

    var xhttpRequest = new XMLHttpRequest();

    xhttpRequest.open(httpRequestAction, "sources/backEnd/engines/phpRequestHandler.php" + getFormParams, true);
    xhttpRequest.setRequestHeader("Content-type", "application/json");
    xhttpRequest.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            console.log(xhttpRequest.response);
            var response = JSON.parse(xhttpRequest.responseText);
            return response;
        }
    };
    if (getFormParams !== "")
        xhttpRequest.send();
    else
        xhttpRequest.send(JSON.stringify(httpPostActionParams));
}

/*Get Login Form Info*/

function ft_validateUserHttpSend() {

    httpUsername = document.forms["loginForm"]["loginEmailInput"].value;
    httpPassword = document.forms["loginForm"]["loginPasswordInput"].value;

    var params = {"username": httpUsername, "password": httpPassword, "REQ_TYPE": "LOGIN"};
    console.log(ft_sendHTTPRequest("POST", params, ""));
}