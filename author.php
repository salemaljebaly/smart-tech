<?php get_header();
    require_once get_template_directory() . '/inc/header-pages.php';
?>
    <div class="author author-top">
        <div class="container">
            <div class="author-info">
                <div class="row">
                    <div class="col-md-4">
                        <div class="author-avatar text-center">
                            <?php
                            // get_avatar(ID or email, image size ,'', 'image alt, args)
                            $avatar_argument = array( 'class' => 'img-thumbnail img-fluid avatar-img' );
                            echo get_avatar( get_the_author_meta( 'ID' ), 150, '', 'User avatar', $avatar_argument ); ?>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="author-desc">
                            <h2><?php the_author_meta( 'first_name' ); ?>
                                <?php the_author_meta( 'last_name' ); ?>
                            </h2>
                            <!--	                                        get user first and last name -->
                            </a>

                            <?php if ( get_the_author_meta( 'description' ) ) { // check if there is description ?>
                                <p class="desc"><?php the_author_meta( 'description' ) // Return description?></p>
                            <?php } else {
                                echo 'This user doesn\' has description';
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="author-stat text-center">
                    <div class="stat">
                        <div>Number of Posts <span><?php echo count_user_posts( get_the_author_meta( 'ID' ) ); ?></span>
                        </div>

                    </div>
                    <div class="stat">
                        <div>Number of comments <span><?php
                                $commentcount_args = array(
                                    'user_id' => get_the_author_meta( 'ID' ),
                                    'count'   => true
                                );
                                echo get_comments( $commentcount_args );
                                ?></span></div>

                    </div>
                </div>
            </div>
            <!-- start latest posts  -->
            <?php $posts_number = - 1;
            $wpQueryArgs        = array(
                'author '        => get_the_author_meta( 'ID' ),
                'post_type'      => 'post',
                'order'          => 'DESC',
                'posts_per_page' => $posts_number
            );
            $the_query          = new WP_Query( $wpQueryArgs );
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="author-posts">
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
                <?php endwhile; else: ?>
            <?php endif; ?>
        </div> <!-- end container-->
    </div>
<?php get_footer(); ?>