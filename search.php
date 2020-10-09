<?php get_header(); ?>
    <div class="single-back-image"
         style="background-image: url(<?php if ( get_header_image() != '' ){ header_image();} else{
             echo get_template_directory_uri() . '/images/slider/ayrus-hill-wI9aSTf8Hwo-unsplash.jpg';
         } ?>);">
        <div class="overlay"></div>
        <div class="st-logo-container">
            <img class="st-logo" src="<?php echo get_template_directory_uri().'/images/icons/white-logo.svg'?>" width="200px">
            <!--            <h3> Smart Tech </h3>-->
        </div>
    </div>
    <div class="author category search-page">
        <div class="container">

            <!-- start latest posts  -->
            <h4 class="cat-title smart-tech-shadow"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h4>

            <div class="side-bar">
                <?php get_search_form(); ?>
            </div>
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
            <?php else: ?>
            <?php endif; ?>
        </div> <!-- end container-->
    </div>
<?php get_footer(); ?>