<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon_io/favicon-32x32.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/noscript.css" /></noscript>
    <?php wp_head(); ?>
</head>
<body <?php body_class('is-preload landing'); ?>>
<div id="page-wrapper">


<!-- Header -->
<header id="header">
    <h1 id="logo"><a href="<?php echo home_url(); ?>">BioMec Research Team</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="<?php echo home_url(); ?>">Αρχική</a></li>
            <li>
                <a href="#">Η Ομάδα</a>
                <ul>
                    <li><a href="<?php echo home_url('/about-us'); ?>">Σχετικά Mε Εμάς</a></li>
                    <li><a href="<?php echo home_url('/left-sidebar'); ?>">Projects</a></li>
                    <li><a href="<?php echo home_url('/members'); ?>">Μέλη</a></li>
                </ul>
            </li>
            <li><a href="<?php echo home_url('/sponsors'); ?>">Χορηγοί</a></li>
            <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdYUHu9o126--06uRuSReewyLGiA4_8_6-iPwpfx1Vqihyhtw/viewform?usp=preview"
                    class="button primary">Γίνε Μέλος</a></li>
        </ul>
    </nav>
</header>

