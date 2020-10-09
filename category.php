<?php get_header();
require_once get_template_directory() . '/inc/header-pages.php';
?>
    <div class="author category">
        <div class="container">
            <!-- start latest posts  -->
            <h2 class="cat-title smart-tech-shadow"><?php single_cat_title(); ?></h2>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="author-posts smart-tech-shadow">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="author-post-thumbnail text-center">
                                    <?php if ( has_post_thumbnail() ): ?>
                                        <?php the_post_thumbnail( '', [
                                            'class' => 'post-img img-thumbnail img-fluid rounded',
                                            'title' => 'Post image'
                                        ] ); ?>
                                    <?php else: ?>
                                        <img class="post-img img-thumbnail img-fluid rounded "
                                             src="<?php echo get_template_directory_uri(); ?>/images/1.jpg"
                                             alt="Post image">
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="author-post-desc">
                                    <small><?php the_time( 'F jS, Y' ); ?><?php the_author_posts_link(); ?>
                                        <h3 class="wp-post-title"><a href="<?php the_permalink(); ?>"
                                                                     title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="entry">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <p class="postmetadata"><?php _e( 'category : ' ); ?><?php the_category( ', ' ); ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endwhile; ?>
                <div class="post-pagination text-center">
                    <?php
                    if ( get_previous_posts_link() ) {
                        previous_posts_link( '<i class="fa fa-angle-left fa-fw fa-4x" ></i>' );
                    } else {
                    } //echo "<span> No Prev</span>";
                    if ( get_next_posts_link() ) {
                        next_posts_link( '<i class="fa fa-angle-right fa-fw fa-4x" ></i>' );
                    } else {
                    }// echo "<span> No Next</span>"; ?>

                </div>
            <?php else: ?>
            <?php endif; ?>
        </div> <!-- end container-->
    </div>
<?php get_footer(); ?>