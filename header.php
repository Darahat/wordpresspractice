<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php bloginfo('name'); ?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <body <?php body_class(); ?>>
        <header class="site-header">
            <h1>
                <a href="<?php echo home_url() ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <h5>
                <?php bloginfo('description'); ?>
            </h5>

        </header>

        <script src="" async defer></script>
    </body>

</html>