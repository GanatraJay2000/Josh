<?php get_header(); ?>

<div class="banner slideshow">
    <div class="slideshow-item">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/10/josh_b1.jpg" alt="banner_1">
        <div class="slideshow-text text-white">
            <div>Early detection of Hearing Impairment Helps</div>
        </div>
    </div>
    <div class="slideshow-item">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/10/josh_home_banner_2.jpg" alt="banner_2">
        <div class="slideshow-text text-white">
            <div>Provided Hearing Aid to 1000+ Children</div>
        </div>
    </div>
    <div class="slideshow-item">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/10/hearing-aid.jpg" alt="summer">
        <div class="slideshow-text text-white">
            <div>Helping Hearing Impaired for a Normal Life</div>
        </div>
    </div>
</div>
<div class="my-4">
    <div class="heading">
        <h2 class="mb-5 text-md-center">Welcome to Josh</h2>
        <p>JOSH is a movement founded by eminent ENT surgeon Dr.Jayant Gandhi and Devangi Dalal, a renowned audiologist. We focus on supporting hearing impaired children, with the state-of-the-art medical technologies coupled with rehabilitation program. With proper care and support all such children can, over a peroid of time, begin to gear well enough to respond to the spoken word and better integrate with society.</p>
    </div>
    <div class="our-activities mb-5">
        <img class="hearing-aid" src="<?php echo home_url(); ?>/wp-content/uploads/2020/11/activity_josh.jpg" alt="Hearing Aid">
        <div class="p-4">
            <h2 class="mb-3 text-xs-center text-md-left">Our Activities</h2>
            <p>Create awareness about need of integration of hearing impaired children in normal society.
            </p>
            <p>
                Impose ban on calling these special schools as 'Deaf and Dumb School.
                These Children are hearing impaired, but not dumb. They are as smart as any normal child.
            </p>
            <p>
                Group of NGOs can start adopting these special schools and try to provide them financial help to go for tailor-made digital hearing aids, creation of sound proof rooms, etc.
            </p>
            <p>
                Goverment can support these schools by dispensing proper hearing aids for these children.
            </p>
            <p>
                Large level awarness and appeal to donors are other important areas to help these children make their future better.
            </p>
            <button class="red-btn">Learn More</button>
        </div>
    </div>
    <div class="stats mb-5">
        <div class="stat">
            <h1>100</h1>
            <p>Happy Families</p>
        </div>
        <div class="stat">
            <h1>17</h1>
            <p>Campaign Runs</p>
        </div>
        <div class="stat">
            <h1>5</h1>
            <p>Experienced Staff</p>
        </div>
        <div class="stat">
            <h1>2</h1>
            <p>Awards Won</p>
        </div>
    </div>
               
    <div class="latest-blogs-container">
        <div class="head  mb-md-5 mb-3">
            <h1 class="display-4 text-center">Latest Blogs</h1>
            <a href="<?php echo site_url('blogs') ?>" class="red-a read-more read-all-blogs">Read all Blogs</a>
        </div>
        <div class="latest-blogs">
        <?php
            $blogs = new WP_Query(array(
                'posts_per_page' => 2,
                'order' => 'DESC',
                'meta_key' => 'upload_date',
                'orderby' => 'meta_value_num',
            ));
            while ($blogs->have_posts()) {
                $blogs->the_post();
                $upload_date = rwmb_meta( 'upload_date' );
                $banner_image = rwmb_meta('banner_image', array('size' => 'large'));
            ?> 
            <div class="blog mb-5">
                <?php foreach ($banner_image as $image) { ?>
                    <img class="blog-image" src="<?php echo $image['url'] ?>" alt="" alt="Blog Banner">
                <?php } ?>
                <div class="blog-info">
                    <div class="date"><?php echo $upload_date; ?></div>
                    <h3><?php the_title(); ?></h3>
                    <p>
                        <?php
                        echo wp_trim_words(get_the_content(), 20);
                        ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="red-btn mt-5">Continue Reading</a>
                </div>
            </div>            
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>