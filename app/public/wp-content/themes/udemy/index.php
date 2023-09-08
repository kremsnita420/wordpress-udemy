<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class('example'); ?>>
    <!-- Load content at the beginning of body  -->
    <?php wp_body_open(); ?>

    <p>Hello world!</p>

    <!-- Load content at the end of body  -->
    <?php wp_footer(); ?>
</body>

</html>