<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>
<body class="<?php body_class() ?>">

    <?php include ('header.php'); ?>

    <?php get_template_part('template_parts/hero'); ?>
    <?php get_template_part('template_parts/projects'); ?>
    <?php get_template_part('template_parts/experience'); ?>

    <?php include ('footer.php'); ?>
    <?php wp_footer() ?>

</body>
</html>