<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-71578166-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-71578166-1');
        gtag('config', 'AW-693648841');
    </script>
    <title><?php wp_title(); ?></title>
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri() ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_template_directory_uri() ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_template_directory_uri() ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/favicon/safari-pinned-tab.svg"
          color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class('theme' . get_field('theme')); ?>>
<div class="content-wrapper">