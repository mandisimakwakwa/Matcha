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
</section>