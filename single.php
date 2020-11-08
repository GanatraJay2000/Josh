<?php get_header();while (have_posts()) {?>
    <div class="page-banner">
    <div class="page-banner-info">
        <h4 class="page-banner-sub-heading d-md-block d-none" style="font-size:32px;">
        Only Indian Audiologist to receive Humanitarian Award by American Academy of Audiology
        </h4>
        <h5 class="page-banner-sub-heading mt-3 d-block d-md-none">
            Blog
        </h5>
    </div>
    <i class="fa fa-angle-down down-icon not-on-phone animate__animated animate__heartBeat animate__repeat-3 animate__slower animate__delay-2s"></i>
</div>
<style>
    .page-banner-sub-heading {
    width:70%;
    margin: 0 auto;
    font-family: "PT Sans";
    font-weight:300;
}
</style>
<div class="breadcrumbs not-on-phone">
    <a href="<?php echo site_url('home'); ?>">Home</a>
    <a href="<?php echo site_url('blogs'); ?>">Blogs</a>
    <p>Audiology</p>
</div>
<div class="mx-md-5 mx-3 mb-5">
<div class="row d-flex justify-content-between">
<div class="col-md-8 ml-md-5">
<?php
    the_post();
    ?>
    <h2 class="blog-title mb-4">Only Indian Audiologist to receive Humanitarian Award by American Academy of Audiology</h2>
    <p>Devangi Dalal, co-founder of Josh Foundation is best known for being the first Indian audiologist to win the Humanitarian award in 2012 by the American Academy of Audiology. She has more than 27 years of experience in the field of audiology and speech therapy.
    </p><p>
Devangi has completed her Bachelor of Science in Audiology & Speech Therapy from Nair Hospital, Mumbai in the year 1991, and started the professional career as an audiologist. Her dream is to establish a State-of-the-Art center to teach public speaking and voice modulation to the hearing impaired, and give them specialized voice and speech therapy, to help integrate them in society.
    </p><p>
Devangi Dalal works with hearing impaired children and persons to help them live a normal life. To achieve this, she follows scientific and proven methods of hearing test and assessment for hearing evaluation. Based on the degree of the person's hearing impairment, the right digital hearing aid is chosen. With the support of philanthropists and leading digital hearing aid manufacturers like Widex Hearing Aids, Josh foundation provides hearing aids for children from lower economic strata of the society.
    </p><p>
Devangi Dalal believes hearing impairment is not a disability. She believes with the right hearing aid and support, hearing impaired persons can live a normal life</p>
    
    <?php
}
?>
</div>
<div class="col-md-3">
<div class="latest-blogs">
    <h2 class="mb-4">Latest Blogs</h2>
    <div class="latest-blog  mb-5">
        <div class="img-container">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/11/press_bg.jpg" alt="Latest Blog">
        </div>
        <div class="blog-info">
        <h5 class="my-2"><?php echo "Only Indian Audiologist to receive Humanitarian Award by American Academy of Audiology" ?></h5>
        <a href="<?php echo "#"; ?>" class="read-more">Read More</a>
        </div>
    </div>
    <div class="latest-blog">
        <div class="img-container">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/11/press_bg.jpg" alt="Latest Blog">
        </div>
        <div class="blog-info">
        <h5 class="my-2"><?php echo "Only Indian Audiologist to receive Humanitarian Award by American Academy of Audiology" ?></h5>
        <a href="<?php echo "#"; ?>" class="read-more">Read More</a>
        </div>
    </div>
</div>
</div>
</div>
</div>

<?php get_footer();  ?>