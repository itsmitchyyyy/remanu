<?php
get_header();
global $post;
$category = get_posts();
include('misc/carousel.php'); ?>
<div class="container-fluid p-0">
    <div class="d-flex flex-row">
        <div class="bg-light mr-2 row w-75 post-container m-0 bg-light">
            <div class="col-12 mt-5">
                <h3 class="front-page-title">CHECK OUT OUR LATEST LESSONS</h3>
            </div>
            <?php $i = 0; ?>
            <?php foreach($category as $post) : setup_postdata($post); ?>
            <?php if($i < 4) : ?>
                <div class="col-md-12 col-lg-6 col-sm-12 mb-5">
                    <div class="card border-0">
                        <img src="<?php echo get_template_directory_uri()?>/img/image-loader.gif" data-src="<?php the_post_thumbnail_url() ?>" alt="Card Image" class="lazyload card-img-top" height="300">
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
        <?php /* <div class="bg-light d-flex flex-row flex-wrap justify-content-center post-container w-75">
        <div class="d-flex w-100 px-4 pt-5">
            <h3 class="front-page-title">CHECK OUT OUR LATEST LESSONS</h3>
        </div>
        <?php $i = 0; ?>
        <?php foreach($category as $post) : setup_postdata($post); ?>
        <?php if($i < 4) : ?>
            <div class="card card-width-blog mb-5 mr-4 border-0">
                <img src="<?php the_post_thumbnail_url() ?>" alt="Card Image" class="card-img-top" height="200">
                <div class="card-body">
                    <h5 class="front-page-card-title card-title"><?php the_title(); ?></h5>
                    <small class="card-date-text-color"><?php echo get_the_date() ?></small>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn card-button-link text-white">Read More</a>
                </div>
            </div> 
        <?php endif; ?>
        <?php $i++; ?>   
        <?php  endforeach; ?>
        </div> */ ?>
        <div class="align-items-center side-post-container mt-5 d-flex flex-column w-25 ml-2 mr-2">
            <div class="m-2 w-100">
                <iframe src="https://www.youtube.com/embed/PHJC4jMndgE" class="w-100" height="300" frameborder="0"></iframe>
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