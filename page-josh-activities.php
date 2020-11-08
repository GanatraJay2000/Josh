<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner-info">
        <h1 class="page-banner-heading">
            Our Activities
        </h1>
        <h5 class="page-banner-sub-heading">
            Josh Activities
        </h5>
    </div>
    <i class="fa fa-angle-down down-icon not-on-phone animate__animated animate__heartBeat animate__repeat-3 animate__slower animate__delay-2s"></i>
</div>
<div class="breadcrumbs not-on-phone">
    <a href="<?php echo site_url('home'); ?>">Home</a>
    <p>Our Activities - Josh Activities</p>
</div>
<div class="heading">
    <p>
        We feel proud to state with the help of Philanthropic Donors and the Suppliers, we have been able to donate digital hearing aids and proper rehabilitation program to more than 1000+ children and it has made a great difference in life of these children.
    </p>
    <p>
        With our effort and dedication and involvement of teachers and trustees we have been able to make children of the 12 schools wearing 100% digital hearing aids.
    </p>
</div>
<div class="school-names">
    <div>Lions shivaji Park School</div>
    <div>Dhwani School - Bharuch</div>
    <div>KDN Shruti School</div>
    <div>Mulund Rotary school for the deaf</div>
    <div>Vikas Vidhyalaya for the deaf.</div>
    <div>Smt.Tapiben Mohanlal R Mehta Bahera-Amreli</div>
    <div>Pragati vidyalaya for the deaf</div>
    <div>Disha Karnabadhir Vidyalaya</div>
    <div>Rochiram Thadani School</div>
    <div>Sadhana Vidhyalay for the deaf </div>
    <div>Rotary Sanskardham Charitable trust</div>
    <div>Utkarsh Mandal</div>
</div>

<div class="past-activities d-flex flex-md-row-reverse flex-column">
    <div class="col-md-6 past-activities-bg"></div>
    <div class="past-info col-md-6">
        <h2><u>Past Activities</u></h2>
        <p>
            In past twelve years JOSH has also organized various events to encourage these special children:-
        </p>
        <ul>
            <li>
                Elocution competition.
            </li>
            <li>
                Talent contest.
            </li>
            <li>
                Group dance competition.
            </li>
            <li>
                Organized Dandiya Raas with Falguni Pathak along with support of
                Disney Entertainments & Lions Club of Juhu.
            </li>
            <li>
                Felicitation of hearing impaired children who passed SSC & HSC
                examination.
            </li>
            <li>
                Organised a lecture from Mr. Johan, a pilot from Sweden on "World
                Flight For Hearing".
            </li>
            <li>
                Elocution competition in various schools, every 6 months in Mahim,
                Vile Parle & Amreli Schools.
            </li>
            <li>
                Conducted Educational Seminars in various Schools, Lions Clubs &
                Rotary Clubs to create awareness on Hearing Impairment.
            </li>
            <li>
                Awareness Articles in Newspapers, Magazines & Journals.
            </li>
            <li>
                Published book "Chalo Badhirone Saambhalta Kariye" to spread
                awareness on Hearing impairment.
            </li>
            <li>
                Developed Short Films on Awareness for Hearing impairment.
            </li>
            <li>
                Representation at Government level to convey the needs of Hearing
                Impaired children.
            </li>
            <li>
                Provided personalized Education and Career counseling for these
                children.
            </li>
        </ul>
        <p>
            We firmly believe that individual like you can be of great help to us in our mission and we can really create great impact in the lives of hearing impaired children and prove to the world that "Hearing Impairment is no Longer a Handicap".
        </p>
    </div>
</div>
<div class="activity-preview" id="activityPreview">
    <h1 class="activity-heading">Activity Preview</h1>
    <div class="container">
        <div class="wrapper">
            <div class="open-image">
                <img class="image" src="<?php echo home_url(); ?>/wp-content/uploads/2020/11/josh_activities_img1.jpg" alt="beach">
            </div>
            <div class="open-image">
                <img class="image" src="<?php echo home_url(); ?>/wp-content/uploads/2020/11/josh_activities_img3.jpg" alt="beach">
            </div>
            <div class="open-image">
                <img class="image" src="<?php echo home_url(); ?>/wp-content/uploads/2020/11/josh_activities_img2.jpg" alt="beach">
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<script>
    var body = document.body;

    var images = Array.from(document.querySelectorAll(".open-image .image"));
    if (images.length > 0) {
        var modal = document.createElement('div');
        modal.classList = "custom-modal gallery";
        var popup = document.createElement('div');
        popup.classList = "popup";
        var photo = document.createElement('img');
        photo.classList.add('image');
        popup.appendChild(photo);
        modal.appendChild(popup);
        document.body.appendChild(modal);

        var close = document.createElement('button');
        close.classList = "close";
        close.innerHTML = "&times;";
        modal.insertBefore(close, modal.childNodes[0]);
        var prev_div = document.createElement('div');
        prev_div.classList = "slide_nav prev_div";
        var prev = document.createElement('button');
        prev.classList = "prev";
        prev.innerHTML = '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
        prev_div.appendChild(prev);
        modal.appendChild(prev_div);
        var next_div = document.createElement('div');
        next_div.classList = "slide_nav next_div";
        var next = document.createElement('button');
        next.classList = "next";
        next.innerHTML = '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
        next_div.appendChild(next);
        modal.appendChild(next_div);

        var index = 0;
        images.forEach(image => {
            image.addEventListener('click', () => {
                index = images.indexOf(image);
                photo.src = images[index].src;
                toggle();
            });
        });
        next.addEventListener('click', () => {
            index = index + 1;
            if (index >= images.length) index = 0;
            photo.src = images[index].src;
        });
        prev.addEventListener('click', () => {
            index = index - 1;
            if (index < 0) index = images.length - 1;
            photo.src = images[index].src;
        });

        close.onclick = function() {
            toggle();
        };
        window.onclick = function(event) {
            if (event.target == modal) {
                toggle();
            }
        };

        function toggle() {
            modal.classList.toggle('active');
            popup.classList.toggle('active');
            if (body.classList == 'active') {
                setTimeout(function() {
                    body.classList.toggle('active');
                }, 500);
            } else {
                body.classList.toggle('active');
            }
        }
    }
</script>