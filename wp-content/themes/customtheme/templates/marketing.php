<?php /* Template Name: Marketing */
get_header();
global $post;
$slug = get_category_by_slug('marketing');
$category = get_posts(array('category' => $slug->cat_ID));
include(get_template_directory().'/misc/carousel.php'); ?>
<div class="container-fluid">
    <h3>CHECK OUT OUR LATEST LESSONS</h3>
    <div class="d-flex flex-row">
        <div class="d-flex flex-row post-container flex-wrap justify-content-between w-75 mr-2">
        <?php $i = 0; ?>
        <?php foreach($category as $post) : setup_postdata($post); ?>
        <?php if($i < 4) : ?>
            <div class="card card-width-blog mt-2">
                <img src="<?php the_post_thumbnail_url() ?>" alt="Card Image" class="card-img-top" height="200">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn card-button-link text-white">Read More</a>
                </div>
            </div> 
        <?php endif; ?>
        <?php $i++; ?>   
        <?php  endforeach; ?>
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
                <div class="d-flex flex-column p-2 border">
                    <div class="m-1">
                        <h3 class="text-custom">RECENT LESSONS</h3>
                    </div>
                    <div class="m-1">
                        <ul>
                            <?php foreach($category as $post) : setup_postdata($post); ?>
                                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>