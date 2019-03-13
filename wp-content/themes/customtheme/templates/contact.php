<?php /* Template Name: Contact */
get_header();
global $post;
$category = get_posts();
include(get_template_directory().'/misc/carousel.php'); ?>
<div class="container-fluid">
    <div class="d-flex flex-row mt-5 mb-5">
        <div class="d-flex flex-column post-container  w-75 mr-2">
            <div class="d-flex w-100">
                <h3>REACH US FOR ANSWERS</h3>
            </div>
            <div class="d-flex">
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
            </div>
            <div class="d-flex flex-column mt-5">
                <h3>SEND US A MESSAGE</h3>
                <form>
                    <div class="form-group w-50 contact-form-group">
                        <label for="name">NAME</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group w-50 contact-form-group">
                        <label for="company">Company(Optional)</label>
                        <input type="text" name="company" id="company" class="form-control">
                    </div>
                    <div class="form-group w-50 contact-form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group w-50 contact-form-group">
                        <label for="telephone">Telephone(Optional)</label>
                        <input type="text" name="telephone" id="telephone" class="form-control">
                    </div>
                    <div class="form-group w-50 contact-form-group">
                        <label for="comments">Comments</label>
                        <textarea name="comments" id="comments" class="w-100" rows="5"></textarea>
                    </div>
                    <div class="d-flex flex-column">
                        <label>Would You Like To Reciever Our Free Newsletter?</label>
                        <div class="d-flex flex-row contact-form-checkboxes">
                            <div class="align-items-center mr-1 form-check">
                                <input type="radio" class="form-check-input" id="yes" value="Yes" name="option">
                                <label for="yes">Yes</label>
                            </div>
                            <div class="align-items-center ml-1 form-check">
                                <input type="radio" class="form-check-input" id="no" value="No" name="option">
                                <label for="no">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="carousel-caption-btn btn text-white">SEND</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="align-items-center side-post-container d-flex flex-column w-25 ml-3">
            <div class="m-2 w-100">
                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" class="w-100" height="300" frameborder="0"></iframe>
            </div>
            <div class="m-2 w-100">
                <div class="d-flex flex-column p-2 bg-custom">
                    <div class="m-1">
                        <h3 class="text-white">ENROLL TODAY</h3>
                    </div>
                    <div class="m-1 form-group">
                        <form>
                            <input type="email" class="form-control" placeholder="e-mail address">
                        </form>
                    </div>
                    <div class="m-1">
                        <a class="btn card-button-link text-white w-50">SIGN ME UP!</a>
                    </div>
                </div>
            </div>
            <div class="m-2 w-100 border-custom">
                <div class="bg-light border d-flex flex-column p-2">
                    <div class="m-1">
                        <h3 class="text-custom">RECENT LESSONS</h3>
                    </div>
                    <div class="m-1">
                        <ul>
                            <?php foreach($category as $post) : setup_postdata($post); ?>
                                <li><a class="front-page-recent" href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>