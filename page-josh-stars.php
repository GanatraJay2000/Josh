<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner-info">
        <h1 class="page-banner-heading">
            Our Activities
        </h1>
        <h5 class="page-banner-sub-heading">
            Josh Stars
        </h5>
    </div>
    <i class="fa fa-angle-down down-icon not-on-phone animate__animated animate__heartBeat animate__repeat-3 animate__slower animate__delay-2s"></i>
</div>
<div class="breadcrumbs not-on-phone">
    <a href="<?php echo site_url('home'); ?>">Home</a>
    <p>Our Activities - Josh Stars</p>
</div>
<?php
$titles = rwmb_meta('title');
$dates = rwmb_meta('date');
$pdfs = rwmb_meta('pdf');
?>
<div class="stars-cards">
    <?php
    foreach($pdfs as $key=>$pdf){ $pdf = array_values($pdf); ?>
    <div class="star-card">
        <a href="#" class="star-card-heading red-a"><?php print_r($titles[$key]); ?></a>
        <small class="star-card-date"><?php print_r($dates[$key]);   ?></small>
        <a href="<?php print_r($pdf[0]['url']); ?>" target="_blank" class="view-pdf">
            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp; View PDF
        </a>
    </div>  
    <?php } ?>  
</div>
<?php get_footer(); ?>