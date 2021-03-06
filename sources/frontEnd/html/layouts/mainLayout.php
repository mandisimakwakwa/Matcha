<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/engines/controllers/relativePathController.php';


    //Session Creator
    session_start();

    $accountVerification = ft_getAccountVerification($dbConn, $_SESSION['userDBUsername']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        >
        <meta http-equiv="X-UA-Compatible"
              content="ie=edge"
        >

        <link rel="stylesheet"
              href="../../frontEnd/css/mainPage.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="../../frontEnd/css/matcha.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="../../frontEnd/css/normalize.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="../../frontEnd/css/boilerplate.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="../../../resources/debuggers/cssDebugger.css"
              type="text/css"
        >

        <link rel="stylesheet"
              href="https://www.w3schools.com/w3css/4/w3.css"
        >
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        >

        <script src="../../backEnd/engines/handlers/mainJSPageHandler.js"
                type="text/javascript"
        ></script>
        <script src="../../backEnd/engines/handlers/matchaJSHandler.js"
                type="text/javascript"
        ></script>

        <script src="../../backEnd/engines/controllers/matchaJSController.js"
                type="text/javascript"
        ></script>
        <script src="../../backEnd/engines/controllers/ajaxController.js"
                type="text/javascript"
        ></script>
        <script src="../../../resources/libs/jQuery/jquery-3.2.1.js"
                type="text/javascript"
        ></script>

        <script src="../../../resources/debuggers/jsDebugger.js"
                type="text/javascript"
        ></script>

        <title>Matcha</title>
    </head>
    <body>

        <div class="bodyDivClass">

            <?php

                if ($accountVerification) {

                    include $sectionMainTemplate;
                } else {

                    include $accountVerificationTemplate;
                }
            ?>
        </div>
    </body>
</html>