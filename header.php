<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title(); ?>
    </title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">

    <meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#232731">

    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/main.css' type='text/css' media='all' />
</head>


<body>
    <nav class="main-nav">
        <div class="container">
            <a href="/" class="main-nav__logo">Logo title</a>

            <button class="main-nav__toggle js-main-nav__toggle">
                <span></span>
            </button>

            <div class="main-nav__colapse js-main-nav__colapse">
                <ul class="main-nav__list" role="navigation">
                    <li class="main-nav__item"><a href="/">O nas</a></li>

                </ul>
            </div>
        </div>
    </nav>