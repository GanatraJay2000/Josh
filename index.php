<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner-info">
        <h1 class="page-banner-heading">
            Blogs
        </h1>
    </div>
    <i class="fa fa-angle-down down-icon not-on-phone animate__animated animate__heartBeat animate__repeat-3 animate__slower animate__delay-2s"></i>
</div>
<div class="breadcrumbs not-on-phone">
    <a href="<?php echo site_url('home'); ?>">Home</a>
    <p>Blogs</p>
</div>
<div class="blogs ">
<?php while (have_posts()) {
        the_post();
        ?>
        <!-- // 
        // echo "<br>";
        //  -->
    <div class="blog">
        <div class="blog-img">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/11/press_bg.jpg" alt="">
        </div>
        <div class="blog-content">
            <div>
                <div class="blog-title">
                    <?php the_title(); ?>
                </div>
                <div class="blog-info">
                    <p>
                        <?php echo wp_trim_words(get_the_content(), 45); ?>
                    </p>
                </div>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            </div>
        </div>
    </div>
<?php } ?>
</div>
<?php get_footer(); ?>

