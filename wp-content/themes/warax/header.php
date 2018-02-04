<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>warax theme</title>
    <?php wp_head(); ?>
</head>
<?php if (is_front_page()) : ?>

    <?php $body_class = array('warax-home'); ?>

<?php else : ?>

    <?php $body_class = array('warax-not-home'); ?>

<?php endif; ?>

<body <?php body_class($body_class); ?> >
<?php wp_nav_menu(array('theme_location' => 'primary')); ?>

