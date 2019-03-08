<?php
ob_start();
require('./_app/Config.inc.php');
$Session = new Session;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
        <!--[if lt IE 9]>
               <script src="../../_cdn/html5.js"></script>
        <![endif]--> 

    <?php
    $Link = new Link;
    $Link->getTags();
    ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?= INCLUDE_PATH ?>/css/style.css"/>
    <link rel="stylesheet" href="<?= INCLUDE_PATH ?>/css/boot.css"/>
    <link rel="stylesheet" href="<?= INCLUDE_PATH ?>/css/icons.css"/>
</head>
<body>
                     
    <?php

    require(REQUIRE_PATH . '/inc/header.inc.php');

    if(!require($Link->getPatch())):
        WSErro("Erro ao incluir arquivo Favor Volter mais Tarde!", WS_ERROR, true);
    endif;

    require(REQUIRE_PATH . '/inc/footer.inc.php');

    ?>

</body>
<script src="<?= HOME ?>/_cdn/jquery.js"></script>
    <script src="<?= HOME ?>/_cdn/scripts-config.js"></script>
</html>
<?php
ob_end_flush();