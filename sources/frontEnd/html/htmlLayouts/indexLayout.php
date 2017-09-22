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
              href="sources/frontEnd/css/indexPage.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="sources/frontEnd/css/matcha.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="sources/frontEnd/css/normalize.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="sources/frontEnd/css/boilerplate.css"
              type="text/css"
        >
        <link rel="stylesheet"
              href="resources/debuggers/cssDebugger.css"
              type="text/css"
        >

        <script src="sources/backEnd/engines/handlers/indexJSPageHandler.js"
                type="text/javascript"
        ></script>
        <script src="sources/backEnd/engines/handlers/matchaJSHandler.js"
                type="text/javascript"
        ></script>

        <script src="sources/backEnd/engines/controllers/matchaJSController.js"
                type="text/javascript"
        ></script>
        <script src="sources/backEnd/engines/controllers/ajaxController.js"
                type="text/javascript"
        ></script>

        <script src="resources/debuggers/jsDebugger.js"
                type="text/javascript"
        ></script>

        <title>Matcha</title>
    </head>
    <body class="bodyClass">

        <div class="bodyDivClass">

            <?php

                include $sectionMainTemplate;
            ?>
        </div>
    </body>
</html>