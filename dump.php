<?php get_header(); ?>
<div class="container my-5">
    <?php while (have_posts()) {
        the_post();
        echo the_title();
    } ?>
</div>
<?php get_footer(); ?>