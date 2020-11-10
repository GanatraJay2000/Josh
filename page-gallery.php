<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner-info">
        <h1 class="page-banner-heading">
            Gallery
        </h1>
    </div>
    <i class="fa fa-angle-down down-icon not-on-phone animate__animated animate__heartBeat animate__repeat-3 animate__slower animate__delay-2s"></i>
</div>
<div class="breadcrumbs not-on-phone">
    <a href="<?php echo site_url('home'); ?>">Home</a>
    <p>Our Activities - Gallery</p>
</div>
<div>
    <div id="ele"></div>
    <div class="sticky-top gallery-tabs-container bg-white shadow">
        <ul class="nav gallery-tabs " id="pills-tab" role="tablist">
            <li class="nav-item gallery-tab " role="presentation">
                <a class="nav-link active  text-dark" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab">Photo Gallery</a>
            </li>
            <li class="nav-item gallery-tab " role="presentation">
                <a class="nav-link text-dark" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab">Web Gallery</a>
            </li>
            <li class="nav-item gallery-tab " role="presentation">
                <a class="nav-link text-dark" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab">Video Gallery</a>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
            <div class="container">
                <div class="wrapper">
                    <?php
                    $folder = "photo_gallery";
                    $dirname = "wp-content/uploads/".$folder."/*.jpg";
                    $images = glob($dirname);
                    foreach ($images as $image) {
                        if (!preg_match('/[0-9]x[0-9]/', $image)) { ?>
                            <div class="modal-open-image">
                                <img class="image" src="<?php echo home_url() . '/' . $image; ?>" alt="beach">
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel">
            <div class="container">
                <div class="wrapper">
                <?php
                    $folder = "web_gallery";
                    $dirname = "wp-content/uploads/".$folder."/*.jpg";
                    $images = glob($dirname);
                    foreach ($images as $image) {
                        if (!preg_match('/[0-9]x[0-9]/', $image)) { ?>
                            <div class="modal-open-image">
                                <img class="image" src="<?php echo home_url() . '/' . $image; ?>" alt="beach">
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel">
            <div class="container">
                <div class="wrapper iframes">
                    <?php
                    $field_id = "youtube_video";
                    $values = rwmb_meta( $field_id );
                    foreach ( $values as $value ) { ?>
                        <div class="modal-open-image iframe">
                        <iframe src="https://www.youtube.com/embed/<?php 
                            echo $value[0]; 
                        ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="outline"></div>
                    </div>
                        <?php
                    }
                    ?>
                    <!-- <div class="modal-open-image iframe">

                        <iframe src="https://www.youtube.com/embed/VJwoSfTOhyM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="outline"></div>
                    </div>
                    
                    <div class="modal-open-image iframe">
                        <iframe src="https://www.youtube.com/embed/VRJmcxCrAOA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="outline"></div>
                    </div>
                    <div class="modal-open-image iframe">
                        <iframe src="https://www.youtube.com/embed/A2FsgKoGD04" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="outline"></div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
<script>
    (function($) {

        $('.gallery-tab a').on('click', function() {
            var elem = document.getElementById("ele");
            elem.scrollIntoView();
        });

    })(jQuery);




    // var id = $(this).attr('data-youtube-id');
    // var autoplay = '?autoplay=1';
    // var related_no = '&rel=0';
    // var src = '//www.youtube.com/embed/'+id+autoplay+related_no;
    //  $("#youtube").attr('src', src);





    //elements
    var body = document.body;
    var buttons = document.querySelectorAll(".open-modal");
    var images = document.querySelectorAll(".modal-open-image");
    console.log(images);

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            var modal_id = "#".concat(button.dataset.modalId);
            var modal = document.querySelector(modal_id);
            var popup = modal.querySelector(".popup");
            toggle();
            var close = document.createElement('button');
            close.classList = "close";
            close.innerHTML = "&times;";
            modal.insertBefore(close, modal.childNodes[0]);
            var popup_close = document.createElement('button');
            popup_close.classList = "close popup_close";
            popup_close.innerHTML = "&times;";
            popup.insertBefore(popup_close, popup.childNodes[0]);

            popup.classList.add("has-scrollbar");
            var span = modal.getElementsByClassName("close")[0];
            span.onclick = function() {
                toggle();
            };
            var popup_span = popup.getElementsByClassName("close")[0];
            popup_span.onclick = function() {
                toggle();
            };
            window.onclick = function(event) {
                if (event.target == modal) {
                    toggle();
                }
            };

            function toggle() {
                body.classList.toggle('active');
                modal.classList.toggle('active');
                popup.classList.toggle('active');
            }
        });
    });


    images.forEach(image => {
        var img = image.firstElementChild;
        var type = img.tagName;
        type = type.toLowerCase();

        var modal = document.createElement('div');
        modal.classList = "custom-modal gallery";

        var extra_classes = image.classList.value;
        if (extra_classes !== 'modal-open-image') {
            extra_classes = extra_classes.replace("modal-open-image ", "");
            modal.classList.add(extra_classes);
        }

        var popup = document.createElement('div');
        popup.classList = "popup";
        var photo = document.createElement(type);
        photo.classList = "modal-".concat(type);
        photo.src = img.src;
        if (type == 'img') {
            photo.alt = img.alt;
        }
        if (type == 'video') {
            photo.setAttribute("controls", "controls");
        }

        popup.appendChild(photo);
        modal.appendChild(popup);
        document.body.appendChild(modal);
        image.addEventListener('click', () => {
            event.preventDefault()
            toggle();
            var close = document.createElement('button');
            close.classList = "close";
            close.innerHTML = "&times;";
            modal.insertBefore(close, modal.childNodes[0]);
            popup.classList.add("has-scrollbar");
            var span = modal.getElementsByClassName("close")[0];
            span.onclick = function() {
                toggle();
            };
            window.onclick = function(event) {
                if (event.target == modal) {
                    toggle();
                }
            };
        });

        function toggle() {
            body.classList.toggle('active');
            modal.classList.toggle('active');
            popup.classList.toggle('active');
        }
    });
</script>