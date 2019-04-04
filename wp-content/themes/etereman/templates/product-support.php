<?php /* Template Name: Product Support */ ?>
<?php get_header(); ?>
<div class="d-flex flex-column">
    <div class="d-flex justify-content-center align-items-center page-support-info-top lazyload" 
        style="background-image: url(<?php echo get_template_directory_uri() ?>/img/image-loader.gif)" data-src="<?php echo get_template_directory_uri() ?>/img/card-1.jpg">
        <div class="page-support-info-top-text d-flex justify-content-center align-items-center">
            <h1>Product Support</h1>
            <span>Above and Beyond Warranty Claims</span>
        </div>
    </div>
    <div class="row page-content-container">
        <div class="col s12 m8 page-support-content-left-container white-bg">
            <div class="page-support-content-left">
                <div class="d-flex flex-column">
                    <h3 class="text-uppercase page-support-content-left-header">The best warranty in the business</h3>
                    <ul class="list-of-benefits">
                        <li>3 Years / Unlimited Mileage</li>
                        <li>Superior Technical Support</li>
                        <li>Immediate Replacements</li>
                        <li>Paid Labor</li>
                        <li>No Hassle Claims</li>
                        <li>Coast-to-Coast Nationwide Coverage</li>
                    </ul>
                </div>
                <div class="d-flex flex-column">
                    <h3 class="text-uppercase page-support-content-left-header">no hassle warranty - we mean it</h3>
                    <span>
                        You may be asking yourself, "How can ETE Reman offer such an outstanding warranty?"
                        At ETE Reman, our dedication to quality control and superior engineering creates
                        absolutely the best manufactured transmissions anywhere. Thus, warranty claims are rare.
                        Do we occasionally get a warranty claim request? Yes, And what happens next may shock you...
                        we actually honor our warranty!
                    </span>
                    <span class="margin-t-1"><b>No hassle Warranty. Really</b></span>
                    <div class="d-flex flex-column page-support-content-left-form margin-t-2">
                        <h4 class="text-uppercase page-support-content-left-form-header">submit your questions</h4>
                        <form>
                            <div class="input-field">
                                <input type="text" id="name">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="email" id="email">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="number" id="telephone">
                                <label for="telephone">Telephone No. (optional)</label>
                            </div>
                            <div class="input-field">
                                <textarea name="comments" class="h-100 materialize-textarea" id="comments" cols="30" rows="4"></textarea>
                                <label for="comments">Questions/Comments</label>
                            </div>
                            <div>
                                <button class="btn waves-effect waves-light default-bg">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s4 page-support-content-right-container">
            <div class="d-flex flex-column page-support-content-right">
                <div class="page-support-content-right-header-image" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/home-trans.png)"></div>
                <h3 class="page-support-content-right-header">Warranty Questions?</h3>
                <span>
                    Want the nitty gritty warranty details? Have questions about our hassle-free warranty?
                    We'd love to hear from  you
                </span>
                <span class="margin-t-1">
                    Contact our Customer Loyalty Team at 800-934-9479 or fill out the form below. And we will
                    gladly answer your warranty questions.
                </span>
            </div>
            <!-- <div class="page-support-content-right-message">
                <button class="page-support-content-right-message-btn" id="need-help">
                    <i class="fa fa-envelope"></i>
                    <span>Need Help?</span>
                </button>
            </div> -->
        </div>
    </div>
    <?php include(get_template_directory().'/misc/chat-box.php') ?>
</div>
<?php get_footer() ?>