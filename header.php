<?php
wp_head();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light pr-lg-3 pl-lg-5">
        <a class="navbar-brand" href="<?php echo site_url('/'); ?>">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/11/josh-logo.png" alt="JOSH Logo" loading="lazy">Josh Foundation
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controsls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars navbar-toggler-my- icon"></i>
        </button>
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarNav',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>
    </nav>