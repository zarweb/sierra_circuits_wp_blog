<?php /* Template Name: About */ ?>
<?php get_header(); ?>


<section class="about-section">
    <div class="header-about">
        <div class="text-center">
            <h2>Sierra Circuits, Inc.</h2>
        </div>
    </div>
    <div class="container">
        <div class="row header-box">
            <div class="body-about text-center">
                <div class="col-md-12">
                    <h3>About Our Company</h3>
                </div>
                <div class="col-md-12">
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                        as opposed to using 'Content here, content here', making it look like readable English.
                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                        and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                        Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour,
                        or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                        you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                        making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words,
                        combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                        The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="map-box">
                <div class="col-md-12">
                    <p>1108 West Evelyn Avenue</p>
                    <p>Sunnyvale, CA 94086</p>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7540.218872129173!2d-122.05094874801976!3d37.383410864974756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb6fcc923d533%3A0xf69aaa09692fc6ee!2sSierra+Circuits!5e0!3m2!1sen!2s!4v1513671410744" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="contact-box">
                <div class="col-md-6">
                    <div class="contact-wrapper">
                        <h4>Contact</h4>
                        <p>Fields marked with an <span class="red">*</span>are required</p>
                        <?php echo do_shortcode('[contact-form-7 id="97" title="Contact"]'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-wrapper">
                        <h4>To speak to a Representitive or book a tour of our Facilities call:</h4>
                        <div class="phone-box">
                            <p><b>Toll free: </b> 1-800-763-7503</p>
                            <p><b>Phone: </b> 408-735-7137</p>
                            <p><b>Fax: </b> 408-735-1408</p>
                        </div>
                        <div class="time-box">
                            <h4>Sunnyvale Office Timing: </h4>
                            <p>8 AM to 5 PM Pacific Time, Mon-Fri</p>
                        </div>
                        <div class="location-box">
                            <p><i>Local time in Pacific Timezone now is 11:48 AM</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();


