//Debug
function ft_indexHandlerDebugger() {

    console.log("Index JS On");
}

function ft_signInButton() {

    var modal = document.getElementsByClassName('modalClass').item(0);

    modal.style.display = "flex";
    modal.addEventListener("click", ft_outsideClickCloseModal);
}

