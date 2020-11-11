<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner-info">
        <h1 class="page-banner-heading">
            Testimonials
        </h1>
    </div>
    <i class="fa fa-angle-down down-icon not-on-phone animate__animated animate__heartBeat animate__repeat-3 animate__slower animate__delay-2s"></i>
</div>
<div class="breadcrumbs not-on-phone">
    <a href="<?php echo site_url('home'); ?>">Home</a>
    <p>Testimonials</p>
</div>
<?php
$names = rwmb_meta('name');
$testimonials = rwmb_meta('testimonial');
?>
<div class="card-columns testimonials">
<?php
    foreach($names as $key=>$name){ ?>
    <div class="card testimonial">
        <h2 class="card-title"><?php echo $name; ?></h2>
        <img class="quote" src="<?php echo get_template_directory_uri() ?>/assets/svgs/testimonial-quote.svg" alt="Quote">
        <p class="testimonial-info">
                <?php echo $testimonials[$key]; ?>
            </p>
    </div>
    <?php } ?>           
</div>

<?php get_footer(); ?>