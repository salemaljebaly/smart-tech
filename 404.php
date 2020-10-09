<?php get_header();
require_once get_template_directory() . '/inc/header-pages.php';
?>
    <div class="tag-page pages">
        <div class="clearfix"></div>
        <div class="container">
            <div class="single-post not-found smart-tech-shadow">
                        <div class="post-container text-center">
                            <h1><?php _e( 'Page not found', 'smart tech' ); ?></h1>
                            <div class="truck-err">
                                <span> 404 :( </span>
                            </div>
                            <?php get_search_form(); ?>
                        </div>
                </div>
        </div>
    </div>
<?php get_footer(); ?>