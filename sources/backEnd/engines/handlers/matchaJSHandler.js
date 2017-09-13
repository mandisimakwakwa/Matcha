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