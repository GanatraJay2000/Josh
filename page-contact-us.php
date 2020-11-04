<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner-info">
        <h1 class="page-banner-heading">
            Contact Us
        </h1>
    </div>
    <i class="fa fa-angle-down down-icon not-on-phone animate__animated animate__heartBeat animate__repeat-3 animate__slower animate__delay-2s"></i>
</div>
<div class="breadcrumbs not-on-phone">
    <a href="<?php echo site_url('home'); ?>">Home</a>
    <p>Contact Us</p>
</div>
<div class="form-wrapper">
    <h1 class="form-title">Get In Touch</h1>
    <p class="form-sub-title">
        Have an Inquiry or some feedback for us?</p>
    <p class="form-sub-title">
        Fill out the form below to contact our team.
    </p>
    <div class="form">
        <?php echo do_shortcode("[formidable id=1]"); ?>
    </div>
</div>
<?php get_footer(); ?>