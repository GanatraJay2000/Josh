<?php get_header();while (have_posts()) {
    the_post();
    $category = get_the_category();
    $category  = $category[0]->name;

    $upload_date = rwmb_meta( 'upload_date' );

    $banner_image = rwmb_meta('banner_image', array('size' => 'large'));
    $banner_image = array_values($banner_image);
    $banner_image = $banner_image[0]['url'];
    ?>
    <div class="page-banner"
    style="background-image: url('<?php echo $banner_image ?>');
            background-size:cover; background-position:center"
    >
    <div class="page-banner-info">
        <h4 class="page-banner-sub-heading d-md-block d-none" style="font-size:32px;">
        <?php the_title(); ?>
        </h4>
        <h5 class="page-banner-sub-heading mt-3 d-block d-md-none">
            Blog
        </h5>
    </div>
    <i class="fa fa-angle-down down-icon not-on-phone animate__animated animate__heartBeat animate__repeat-3 animate__slower animate__delay-2s"></i>
</div>
<style>
    .page-banner-info{
        width:70%;
    }
    .page-banner-sub-heading {
    margin: 0 auto;
    font-family: "PT Sans";
    font-weight:300;
}
</style>
<div class="breadcrumbs not-on-phone">
    <a href="<?php echo site_url('home'); ?>">Home</a>
    <a href="<?php echo site_url('blogs'); ?>">Blogs</a>
    <p><?php echo $category; ?></p>
</div>
<div class="mx-md-5 mx-3 mb-5">
<div class="row d-flex justify-content-between">
<div class="col-md-8 ml-md-5">

    <h2 class="blog-title mb-4" style="line-height:0.8em;">
        <?php the_title(); ?>
    </h2>  
    <?php the_content(); ?>
    <div  class="my-2"><?php echo $upload_date; ?> </div>
    <?php
}
?>
</div>
<div class="col-md-3">
<div class="latest-blogs">
    <h2 class="mb-4">Latest Blogs</h2>
    <?php
            $latest_blogs = new WP_Query(array(
                'posts_per_page' => 2,
                'order' => 'DESC',
                'meta_key' => 'upload_date',
                'orderby' => 'meta_value_num',
            ));
            while ($latest_blogs->have_posts()) {
                $latest_blogs->the_post();
                $upload_date = rwmb_meta( 'upload_date' );
                $banner_image = rwmb_meta('banner_image', array('size' => 'large'));
            ?> 
    <div class="latest-blog mb-5">
        <a href="<?php the_permalink(); ?>">
        <div class="img-container">
        <?php foreach ($banner_image as $image) { ?>
                    <img src="<?php echo $image['url'] ?>" alt="" alt="Blog Banner">
                <?php } ?>
        </div>
        </a>
        <div class="blog-info">
        <h5 class="my-2 mb-3"><?php the_title(); ?></h5>
        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
        </div>
        
    </div>
            <?php } ?>    
</div>
</div>
</div>
</div>

<?php get_footer();  ?>