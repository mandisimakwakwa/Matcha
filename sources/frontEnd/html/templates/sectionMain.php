<?php

    $pageName  = ft_getCurrentFilename();
?>

<section class="section">

    <?php

        if ($pageName == "index") {

            include $indexSectionMainTemplate;
        } elseif ($pageName == "main") {

            include $mainSectionMainTemplate;
        }
    ?>

    <div class="modalClass divDebugClassThree"
         id="loadingPageContainerID"
    >

        <div class="modalContentClass">

            <i class="fa fa-spinner"></i>
        </div>
    </div>
</section>