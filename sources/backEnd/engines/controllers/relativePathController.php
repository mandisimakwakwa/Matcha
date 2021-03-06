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

    //HTML Markup Controllers
        //HTML Templates Level 1
        $headerTemplate = ServerRoot . "sources/frontEnd/html/templates/header.php";
        $sectionMainTemplate = ServerRoot . "sources/frontEnd/html/templates/sectionMain.php";
        $sectionAsideTemplate = ServerRoot . "sources/frontEnd/html/templates/sectionAside.php";
        $footerTemplate = ServerRoot . "sources/frontEnd/html/templates/footer.php";
            //HTML Templates Level 2
            $indexSectionMainTemplate = ServerRoot . "sources/frontEnd/html/templates/pageTemplates/indexSectionMain.php";
            $mainSectionMainTemplate = ServerRoot . "sources/frontEnd/html/templates/pageTemplates/mainSectionMain.php";

            //Other Templates
            $accountVerificationTemplate = ServerRoot . "sources/frontEnd/html/templates/pageTemplates/accountVerification.php";

        $indexLayout = ServerRoot . "sources/frontEnd/html/layouts/indexLayout.php";
        $mainLayout = ServerRoot . "sources/frontEnd/html/layouts/mainLayout.php";
        $unitTestFailTemplate = ServerRoot . "resources/TDD/unitTestFail.php";
?>