jQuery(document).ready(function ($) {

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
    autoplay: true,
    items: 2,
    autoplayTimeout: 5000,
    dots: true,
    nav: true,
    navText: [$('.myslides-nav .nav-prev'), $('.myslides-nav .nav-next')],    
    responsive: {
        0: {
            items: 1,
            stagePadding: 0,
            margin: 0,
        },
        600: {
            items: 2,
            stagePadding: 60,
            margin: 63,
        },
        768: {
            items: 3,
            stagePadding: 60,
            margin: 63,
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