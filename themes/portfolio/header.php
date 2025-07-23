<?php
/**
 * Displays the header content for the page
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <?php wp_head() ?>
</head>
<body class="<?php body_class() ?>">
    <header class="site-header">
        <div class="container">
            <div class="header-wrapper">
                <div class="site-branding">
                    <a href="/" class="logo">
                        <?php bloginfo('name'); ?>
                    </a>
                </div>
                
                <nav class="header-nav">
                    <?php wp_nav_menu(array('theme_location' => 'primary menu')) ?>
                </nav>
            </div>
        </div>
    </header>
    