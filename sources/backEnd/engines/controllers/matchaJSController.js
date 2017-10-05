//JS Button Controller
function ft_buttonController(switchNode) {

    switch  (switchNode) {

        case "testSignInButton":
           ft_testSignInButton();
            break;
        case "menuButton":
            ft_menuButton();
            break;
    }
}

/*Redirect to Main.php*/
function ft_redirectController(destPage) {

    switch (destPage) {

        case "main":

            window.location.href = "sources/frontEnd/html/main.php";
            break;
        case "index":

            window.location.href = "../../../index.php";
            break;
    }
}

//Debug
function ft_matchaControllerDebugger() {

    console.log("Matcha Controller On");
}