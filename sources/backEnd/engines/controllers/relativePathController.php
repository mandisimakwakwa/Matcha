<?php

    //Setup Sever Root Constant
    $currentPWD = getcwd();
    $currentPWDtoRoot = substr($currentPWD, 0, strpos($currentPWD, "sources"));

    define("ServerRoot", "$currentPWDtoRoot", true);

    //Config Controllers
        //Remeber It's With Reference to Localhost Access Path
        require_once ServerRoot . "resources/debuggers/phpDebugger.php";
        require_once ServerRoot . "resources/TDD/matchaPHPUnitTests.php";
        require_once ServerRoot . "sources/backEnd/config/database.php";
        require_once ServerRoot . "sources/backEnd/config/setup.php";
        require_once ServerRoot . "sources/backEnd/matchaDAO.php";
        require_once ServerRoot . "sources/backEnd/matchaDTO.php";
        require_once ServerRoot . "sources/backEnd/engines/handlers/indexPHPPageHandler.php";
        require_once ServerRoot . "sources/backEnd/engines/handlers/mainPHPPageHandler.php";
        require_once ServerRoot . "sources/backEnd/engines/handlers/paginationPHPPageHandler.php";
        require_once ServerRoot . "sources/backEnd/engines/handlers/galleryPHPPageHandler.php";
        require_once ServerRoot . "sources/backEnd/engines/handlers/sqlPHPPageHandler.php";
        require_once ServerRoot . "sources/backEnd/engines/handlers/emailPHPPageHandler.php";

    //require_once ServerRoot . "sources/backEnd/engines/engines/controllers/phpPathController.php";
        $headerTemplate = ServerRoot . "sources/frontEnd/html/htmlTemplates/header.php";
        $sectionMainTemplate = ServerRoot . "sources/frontEnd/html/htmlTemplates/sectionMain.php";
        $sectionAsideTemplate = ServerRoot . "sources/frontEnd/html/htmlTemplates/sectionAside.php";
        $footerTemplate = ServerRoot . "sources/frontEnd/html/htmlTemplates/footer.php";

        $indexLayout = ServerRoot . "sources/frontEnd/html/htmlLayouts/indexLayout.php";
        $mainLayout = ServerRoot . "sources/frontEnd/html/htmlLayouts/mainLayout.php";
        $unitTestFailTemplate = ServerRoot . "resources/TDD/unitTestFail.php";
?>