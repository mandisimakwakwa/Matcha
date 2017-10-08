//Debug
function ft_matchaHandlerDebugger() {

    console.log("Matcha Handler On");
}

function ft_closeModal() {

    var modal = document.getElementsByClassName("modalClass").item(0);

    modal.style.display = "none";
}

function ft_outsideClickCloseModal() {

    var modal = document.getElementsByClassName('modalClass').item(0);

    window.onclick = function (event) {

        if (event.target == modal) {

            modal.style.display = "none";
        }
    }
}

function ft_searchButton() {

    console.log("The search button has been pressed.");
}

function ft_notificationsPageScrollButton() {

    console.log("The Notifications button has been pressed.");
}

function ft_signOutButton() {

    var destPage = "index";

    ft_redirectController(destPage);
}

function ft_submitHandler(sourcePage) {

    var source = sourcePage;

    if (source == "login") {

        ft_sendLoginHTTPRequest();
    } else if (source == "signUp") {

        ft_sendSignUpHTTPRequest();
    }
}

function ft_responseHandler(response, switchNode) {

    var response = response;
    var switchNode = switchNode;

    if (response) {

        var jsonResponse = JSON.parse(response);

        switch (switchNode) {

            case "login":

                ft_loginCase(jsonResponse);
                break;
            case "signUp":

                ft_signUpCase(jsonResponse);
                break;
        }
    } else {

        console.log("No Responses Recieved.");
    }
}

function ft_passwordCheck(passwordOne, passwordTwo) {

    var state = 0;

    var passOne = passwordOne;
    var passTwo = passwordTwo;

    if (passOne == passTwo) {

        var passwordLength = passOne.length;
        var passwordComplexityCheck = /(?=.*[0-9])(?=.*[a-z])/;

        if (passwordLength > 7) {

            if (passwordComplexityCheck.test(passOne)) {

                state = 1;
            }
        }
    }

    return state;
}

function ft_pageLoading() {

    $(function () {

        $(document).ajaxStart(function () {

            $("#loadingPageContainerID").show();
        });

        $(document).ajaxComplete(function () {

            $("#loadingPageContainerID").hide();
        });
    });
}