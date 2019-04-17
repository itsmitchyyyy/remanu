<?php /* Template Name: Enroll Now */ ?>
<?php get_header() ?>
    <div class="container-fluid inside-page-container">
        <div class="d-flex flex-column enroll-now-container pt-5 pb-5">
            <div class="enroll-now-image">
                <img class="lazyload" data-src="<?php echo get_template_directory_uri() ?>/img/enrollnow.jpg" src="<?php echo get_template_directory_uri() ?>/img/image-loader.gif" alt="Enroll Now">
            </div>
            <div class="enroll-now-text-header">
                <span class="mt-4">
                    REMAN U is in session! Get weekly <b>sales</b>, <b>marketing</b>, <b>customer service</b>, 
                    & <b>management updates</b> to help you and your business succeed.
                </span>
                <span class="mt-2">
                    Just provide your info below, then watch your email to confirm you're not a robot.
                </span>
            </div>
            <div class="enroll-now-form mt-4 pb-4">
                <form>
                    <div class="form-group">
                        <label for="email"><b>Email Address</b></label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="firstname"><b>First Name</b></label>
                        <input type="text" class="form-control" id="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname"><b>Last Name</b></label>
                        <input type="text" class="form-control" id="lastname">
                    </div>
                    <div class="form-group">
                        <label for="company"><b>Company</b></label>
                        <input type="text" class="form-control" id="company">
                    </div>
                    <div class="form-group">
                        <button class="carousel-caption-btn btn text-white">Get Ahead!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php get_footer() ?>