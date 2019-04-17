<?php
get_header();
global $post;
$category = get_posts();
include('misc/carousel.php'); ?>
<div class="container-fluid p-0">
    <div class="d-flex flex-row">
        <div class="bg-light m-0 mr-2 pl-lg-5 pl-md-0 pl-sm-0 post-container pr-lg-3 pr-md-0 pr-sm-0 row w-75">
            <div class="col-12 mt-5">
                <h3 class="front-page-title">CHECK OUT OUR LATEST LESSONS</h3>
            </div>
            <?php $i = 0; ?>
            <?php foreach($category as $post) : setup_postdata($post); ?>
            <?php if($i < 4) : ?>
                <div class="col-md-12 col-lg-6 col-sm-12 mb-5">
                    <div class="card border-0">
                        <img src="<?php echo get_template_directory_uri()?>/img/image-loader.gif" data-src="<?php the_post_thumbnail_url() ?>" alt="Card Image" class="lazyload card-img-top" height="250">
                        <div class="card-body front-page-card-body">
                            <h5 class="front-page-card-title"><?php the_title() ?></h5>
                            <small class="card-date-text-color"><?php echo get_the_date() ?></small>
                            <p class="card-text front-page-card-text"><?php echo get_the_excerpt() ?></p>
                            <a href="<?php the_permalink() ?>" class="btn card-button-link text-white">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php $i++; ?>
            <?php endforeach; ?>
        </div>
        <div class="align-items-center d-flex flex-column mt-5 pl-lg-3 pl-md-0 pl-sm-0 pr-lg-4 pr-sm-0 side-post-container w-25 mr-3">
            <div class="m-2 mt-5 w-100">
                <iframe src="https://www.youtube.com/embed/PHJC4jMndgE" class="w-100" height="300" frameborder="0"></iframe>
            </div>
            <div class="m-2 w-100">
                <div class="d-flex flex-column p-2 bg-custom">
                    <div class="m-1">
                        <h3 class="text-white">ENROLL TODAY</h3>
                    </div>
                    <form action="<?php echo get_site_url() ?>/enroll-now">
                        <div class="m-1 form-group">
                            <input type="email" class="form-control" placeholder="e-mail address" required>
                        </div>
                        <div class="m-1 mt-2 form-group">
                            <button class="btn card-button-link text-white">SIGN ME UP!</button>
                        </div>
                    </form>
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