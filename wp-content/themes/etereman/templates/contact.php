<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<div class="d-flex flex-column position-relative">
    <div class="d-flex justify-content-center align-items-center contact-info-top lazyload" 
        style="background-image: url(<?php echo get_template_directory_uri() ?>/img/image-loader.gif" data-src="<?php echo get_template_directory_uri() ?>/img/card-1.jpg">
        <div class="contact-info-top-text d-flex justify-content-center align-items-center">
            <h1>contact</h1>
        </div>
    </div>
    <div class="row contact-content-container">
        <div class="col m8 s12 contact-content-left-container white-bg">
            <div class="contact-content-left">
                <div class="d-flex flex-column">
                    <h3 class="text-uppercase contact-content-left-header">Reach us for answers</h3>
                </div>
                <div class="d-flex flex-column">
                    <h3 class="contact-content-left-header">We Look Forward to Hearing From You</h3>
                    <span>
                       Have a Question? Need a Quote? You are at the right place.
                       Fill out the form below and one of our amazing people will contact you.
                    </span>
                    <span class="margin-t-1"><b>Phone: 1-800-934-9479</b></span>
                    <div class="d-flex flex-column contact-content-left-form margin-t-2">
                        <h4 class="text-uppercase contact-content-left-form-header">send us a message</h4>
                        <form>
                            <div class="row">
                                <div class="col m6 s12 input-field">
                                    <label for="name">Name</label>
                                    <input type="text" id="name">
                                </div>
                                <div class="col m6 s12 input-field">
                                    <label for="company">Company (optional)</label>
                                    <input type="text" id="company">
                                </div>
                                <div class="col m6 s12 input-field">
                                    <label for="email">Email</label>
                                    <input type="email" id="email">
                                </div>
                                <div class="col m6 s12 input-field">
                                    <label for="phone">Telephone (optional)</label>
                                    <input type="text" id="phone">
                                </div>
                                <div class="col s12 input-field">
                                    <label for="comments">Comments</label>
                                    <textarea name="comments" class="h-100 materialize-textarea" id="comments" cols="30" rows="4"></textarea>
                                </div>
                                <div class="col s12">
                                    <label>
                                        <input type="checkbox">
                                        <span>Yes, I would like to recieve ETE REMAN free newsletter</span>
                                    </label>
                                </div>
                                <div class="col s12 margin-t-1">
                                    <button class="btn waves-effect waves-light default-bg">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <h3 class="contact-content-left-header">ETE REMAN TESTIMONIALS</h3>
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-wrap contact-content-testimonial-container">
                            <div class="flex-grow-1 contact-content-testimonial justify-content-center">
                                <span>
                                    <q>
                                        ETE has always been very friendly when we call and more importantly they are prompt with their quotes and very knowledgeable
                                        about their products. On time delivery, competitive pricing and quality are important for our center; ETE meet all three of these
                                        requirements every time. We have only ever had one bad unit, and when we did, the warranty was handled VERY FAST and VERY professionally.
                                    </q>
                                </span>
                            </div>
                            <div class="flex-grow-1 justify-content-center">
                                <img class="lazyload contact-content-blank-image" data-src="<?php echo get_template_directory_uri() ?>/img/blank-avatar.png" src="<?php echo get_template_directory_uri() ?>/img/image-loader.gif" alt="" height="100" width="100">
                            </div>
                        </div>
                        <span>David Park - AAMCO Front Royal</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col m4 s12 contact-content-right-container">
            <div class="d-flex flex-column contact-content-right">
                <!-- <button class="contact-content-right-message-btn" id="need-help">
                    <i class="fa fa-envelope"></i>
                    <span>Need Help?</span>
                </button> -->
                <div class="d-flex flex-column">
                    <h3 class="contact-content-right-header">ETE Reman's Remarkable Customer Loyalty Team</h3>
                    <?php for($i = 0; $i < 3; $i++): ?>
                        <div class="d-flex flex-column justify-content-center align-items-center margin-t-2">
                            <img class="lazyload contact-content-blank-image" data-src="<?php echo get_template_directory_uri() ?>/img/blank-avatar.png" src="<?php echo get_template_directory_uri() ?>/img/image-loader.gif" alt="" height="100" width="100">
                            <span>Brud Graham</span>
                            <span>Product Support Spacialist</span>
                            <span>sample@gmail.com</span>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    <?php include(get_template_directory().'/misc/chat-box.php') ?>
</div>
<?php get_footer() ?>