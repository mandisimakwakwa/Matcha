<?php

//Setup Relative Root
$projectRoot = substr(getcwd(), 0, strpos(getcwd(), "sources"));
require $projectRoot . 'sources/backEnd/controllers/relativePathController.php';

ft_checkDatabaseLinking();
ft_checkSetupLinking();
ft_checkCamagruDAO();
ft_checkCamagruDTO();
ft_checksqlRequestHandler();
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Camagru</title>
</head>
<body>

<?php include $headerTemplate; ?>
<?php include $sectionMain; ?>
<?php include $sectionAside; ?>
<?php include $footerTemplate; ?>
</body>
</html>
