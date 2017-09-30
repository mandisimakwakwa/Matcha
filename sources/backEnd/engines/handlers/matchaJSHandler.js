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

    console.log("Sign Out Button Pressed.");
}