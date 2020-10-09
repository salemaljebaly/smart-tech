<?php get_header();
    require_once get_template_directory() . '/inc/header-pages.php';
?>

    <div class="single-post">
        <div class="container">

            <div class="main smart-tech-shadow">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                        <?php
                        if(have_posts()){
                            while(have_posts()){
                                the_post();?>
                                <div class="post-info">
                                <span class="single-post-date">
                                    <i class="fa fa-calendar-alt fa-fw"></i><?php the_time('j F , Y'); // date ?></span>
                                    <?php edit_post_link('تعديل المقال <i class="fa fa-edit fa-fw"></i>'); ?>
                                </div>
                                <h2 class="post-title  text-right"><?php the_title(); ?></h2>

                                <div class="post">

                                    <?php the_content(); ?>
                                    <p class="postmetadata"><?php _e( 'category : ' ); ?><?php the_category( ', ' ); ?></p>
                                </div>
                                <?php
                            }

                        }?>
                        <div class="author-info">
                            <div class="row">
                                <div class="col-md-2">
                                    <?php
                                    // get_avatar(ID or email, image size ,'', 'image alt, args)
                                    $avatar_argument = array('class' => 'img-responsive rounded-circle avatar-img');
                                    echo get_avatar(get_the_author_meta('ID'), 90,'', 'User avatar',$avatar_argument); ?>
                                </div>
                                <div class="col-md-10">
                                    <div class="author-desc">
                                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"
                                           class="author-link">
                                            <h4><?php the_author_meta('first_name') ?>
                                                <?php the_author_meta('last_name') ?>
                                            </h4>
                                        </a>

                                        <?php if(get_the_author_meta('description')){ // check if there is description ?>
                                            <p class="desc"><?php the_author_meta('description') // Return description?></p>
                                        <?php    }else { echo 'this user doesn\'t write any thing in desc ';} ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-3 col-sm-12">
                    <div class="side-bar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
                </div>

            </div> <!-- row -->
        </div>

    </div>

    <div class="comment-form">
        <div class="container">

            <?php comments_template(); ?>
        </div>
    </div>
<?php get_footer(); ?>