<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset=utf-8">
    <?php wp_head();?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <a class="navbar-brand" href="#"><?php bloginfo('name') ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto'
            ])?>

            <?= get_search_form() ?>
        </div>
    </nav>
    <div class="container">
