<?php get_header(); ?>
<style>
    .slideshow {
        position: relative;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
        height: 85vh;
        width: 100vw;
        max-width: 100%;
        margin: 0px auto 0;
    }

    .owl-stage,
    .owl-stage-outer,
    .owl-item {
        width: 100%;
        height: 100%;
    }

    .slideshow-item {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .slideshow-item img {
        width: 100%;
        height: 100%;
    }

    /* .slideshow-item .slideshow-text {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translate(-50%, 0);
            background-color: white;
            padding: 3px 20px;
        } */
    .slideshow-item .slideshow-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60%;
        height: 40%;
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        padding: 3px 20px;
        word-spacing: 5px;
    }

    .text-white {
        color: #fafafa;
        filter: drop-shadow(1px 1px 10px #000000aa);
    }

    .text-black {
        color: #333;
    }

    .slideshow-item.card {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }

    .owl-dots {
        padding: 3px 13px 0px;
        border-radius: 50px;
        position: fixed;
        bottom: -15px;
        left: 10%;
        bottom: 27px;
        background-color: #22222222;
        transform: translate(-50%, 0);
    }

    .owl-dot {
        outline: 0 !important;
        border: 0 !important;
    }

    .owl-dot span {
        background: #fff !important;
    }

    .owl-dot span:hover {
        background: #ccc !important;
    }

    .owl-dot.active span {
        background-color: #ff0044 !important;
    }

    .owl-nav {
        padding-top: 3px;
        position: absolute;
        background-color: transparent;
        bottom: 0;
        left: 5%;
        margin: 0 !important;
    }

    .owl-prev,
    .owl-next {
        border: 0;
        outline: 0;
    }

    .owl-prev button {
        border: 0;
        outline: 0;
        font-size: 30px;
        position: fixed;
        transform: translate(0, -50%);
        bottom: -15px;
        right: 80px;
        background-color: #00000066 !important;
        height: 60px;
        width: 60px;
    }

    .owl-next button {
        border: 0;
        outline: 0;
        font-size: 30px;
        position: fixed;
        transform: translate(0, -50%);
        bottom: -15px;
        right: 10px;
        background-color: #00000066 !important;
        height: 60px;
        width: 60px;
    }

    .owl-nav i {
        color: white;
        filter: drop-shadow(0px 0px 1px #000);
    }

    .slide_no {
        position: absolute;
        top: 0;
        right: 0;
        text-align: center;
        padding: 3px 10px;
        font-size: 16px;
        background-color: #00000022;
        color: white;
    }

    @media screen and (max-width: 800px) {
        .slideshow {
            height: 80vh;
            width: 100vw;
        }

        .slideshow-item .slideshow-text {
            font-size: 16px;
            padding: 5px;
        }
    }

    @media screen and (max-width: 600px) {
        .owl-dots {
            width: 100%;
            border-radius: 0;
            bottom: 0px;
        }

        .slideshow {
            height: 60vh;
            width: 100vw;
        }
    }

    @media screen and (max-width: 500px) {
        .slideshow {
            height: 50vh;
            width: 100vw;
        }
    }
</style>

<div class="banner slideshow">
    <div class="slideshow-item">
        <img src="https://images.unsplash.com/photo-1482192505345-5655af888cc4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1100&q=80" alt="plants">
        <div class="slideshow-text text-white">
            <h1>Jay Ganatra</h1>
            <br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing </p>
        </div>
    </div>
    <div class="slideshow-item">
        <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1953&q=80" alt="snow">
        <div class="slideshow-text">3</div>
    </div>
    <div class="slideshow-item">
        <img src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80" alt="summer">
        <div class="slideshow-text">4</div>
    </div>
    <div class="slideshow-item">
        <img src="https://images.unsplash.com/photo-1418065460487-3e41a6c84dc5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="roses">
        <div class="slideshow-text">5</div>
    </div>
    <div class="slideshow-item">
        <img src="https://images.unsplash.com/reserve/HgZuGu3gSD6db21T3lxm_San%20Zenone.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="sky">
        <div class="slideshow-text">6</div>
    </div>
    <div class="slideshow-item">
        <img src="https://images.unsplash.com/photo-1431512284068-4c4002298068?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1052&q=80" alt="nature">
        <div class="slideshow-text">7</div>
    </div>
    <div class="slideshow-item">
        <img src="https://images.unsplash.com/photo-1422564030440-1ecae6e21f67?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1101&q=80" alt="blossom">
        <div class="slideshow-text">8</div>
    </div>
    <div class="slideshow-item">
        <img src="https://images.unsplash.com/photo-1465189684280-6a8fa9b19a7a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="ice">
        <div class="slideshow-text">9</div>
    </div>
    <div class="slideshow-item">
        <img src="https://images.unsplash.com/photo-1575429293671-933f3a10a401?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1191&q=80" alt="spring">
        <div class="slideshow-text">10</div>
    </div>
</div>
<div class="container my-5">
    Jay
</div>
<script>
    jQuery(document).ready(function($) {

        var slideshows = Array.from(document.querySelectorAll('.slideshow'));
        var carousels = Array.from(document.querySelectorAll('.carousel'));
        slideshows = slideshows.concat(carousels);

        slideshows.forEach(slideshow => {
            slideshow.classList.add("owl-carousel");
            slideshow.classList.add("owl-theme");
        });

        $('.banner').owlCarousel({
            loop: true,
            autoplay: false,
            items: 1,
            autoplayTimeout: 5000,
            dots: true,
            nav: true,
            stagePadding: 00,
            margin: 00,
            navText: [$('.banner-nav .nav-prev'), $('.banner-nav .nav-next')],
            // onInitialized: counter,
            onTranslated: counter,
        });
        $('.myslides').owlCarousel({
            loop: true,
            autoplay: false,
            items: 2,
            autoplayTimeout: 5000,
            dots: true,
            nav: true,
            navText: [$('.myslides-nav .nav-prev'), $('.myslides-nav .nav-next')],
            onInitialized: counter,
            onTranslated: counter,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 0,
                    margin: 0,
                },
                600: {
                    items: 2,
                    stagePadding: 40,
                    margin: 43,
                },
                768: {
                    items: 3,
                    stagePadding: 40,
                    margin: 43,
                }
            },

        });
        slideshows.forEach(slideshow => {
            var next_button = slideshow.querySelector('.owl-nav .owl-next');
            var prev_button = slideshow.querySelector('.owl-nav .owl-prev');
            var prev_btn = document.createElement('button');
            prev_btn.className = "nav-prev";
            prev_btn.innerHTML = '<i class=" fa fa-chevron-left"></i>';
            prev_button.appendChild(prev_btn);
            var next_btn = document.createElement('button');
            next_btn.className = "nav-next";
            next_btn.innerHTML = '<i class=" fa fa-chevron-right"></i>';
            next_button.appendChild(next_btn);

            if (slideshow.classList[1] != 'carousel') {
                var slidenumber = document.createElement('div');
                slidenumber.classList = `slide_no slide_no_${slideshows.indexOf(slideshow)}`;
                slideshow.appendChild(slidenumber);
            }
        });

        function counter(event) {
            var element = event.target;
            if (!event.namespace) {
                return;
            }
            var slides = event.relatedTarget;
            // console.log();
            $(event.target).find('.slide_no').text(slides.relative(slides.current()) + 1 + '/' + slides.items().length);
        }
    })
</script>
<?php get_footer(); ?>