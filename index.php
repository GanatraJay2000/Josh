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
        $upload_date = rwmb_meta( 'upload_date' );

    $banner_image = rwmb_meta('banner_image', array('size' => 'large'));
    $banner_image = array_values($banner_image);
    $banner_image = $banner_image[0]['url'];
        ?>        
    <div class="blog">
        <div class="blog-img">
            <img src="<?php echo $banner_image; ?>" alt="">
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

