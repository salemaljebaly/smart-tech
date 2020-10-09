<?php
require_once 'class-wp-bootstrap-navwalke.php';
// function file
// st => smart tech
// =====================================================================
/**
 * Register Custom Navigation Walker
 * bootstrap nav class
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalke.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
// =====================================================================
/**
 * Register new menu
 */
function st_register_menu(){
    register_nav_menus( array(
        "smart-tech" => "Navigation bar"
    ) );
}
// add action
add_action('init', 'st_register_menu');
// =====================================================================
/**
 * navigation menu
 */
function st_bootstrap_menu(){
    wp_nav_menu( array(
        "theme_location" => "smart-tech",
        "menu_class"     => "nav navbar-nav",
        "container"      => false,
        "depth"          => 3,
        "walker"         => new WP_Bootstrap_Navwalker(),
        'fallback_cb'    => 'st_default_menu'
    ) );
}
// -------------------------------------------------------------------- //

/**     * Provides a default menu featuring the 'Home' link, if not other menu has been provided.
 *     this menu wil navigate user to set up menu
 */
function st_default_menu() {

    $html = '<ul id="st-default-menu" class="nav navbar-nav">'; // start main menu
    $html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">';
    $html .= '<a href="' . esc_url( home_url() ) . '/wp-admin/nav-menus.php" title="' . __( 'Menu', 'acme' ) . '">';
    $html .= __( 'Menu', 'smart_tech' );
    $html .= '</a>';
    $html .= '</li>';
    $html .= '</ul>'; // end main menu
    echo $html;

} // end Altatawer_default_menu
// =====================================================================
/**
 * Proper way to enqueue scripts and styles.
 */
// =====================================================================
/**
 * smart_tech_add_style used to add style
 */

function st_add_style(){
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');

}
// =====================================================================
/**
 * smart_tech_add_scripts used to add scripts
 */

function st_add_scripts(){
    // take jquery from my files  because Icant take it from WP --
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.js',array(), false, true);
    wp_enqueue_script('propper-js', get_template_directory_uri() . '/js/propper.js',array('jquery'), false, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js',array('jquery'), false, true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.min.js',array('jquery'), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js',array(), false, true);
}
// =====================================================================
/**
* Add action
* Initialize the functions to add styles and scripts
*/
add_action('wp_enqueue_scripts','st_add_style');
add_action('wp_enqueue_scripts','st_add_scripts');
// =====================================================================
/**
 * Feature supported in smart tech theme
 *
 */
// --------------------------------------------------------------------//
// change default logo in login page
function st_custom_login_logo() {
    echo '<style >';
    echo '#login > h1 > a {background-image: url("' . get_template_directory_uri() . '/images/icons/logo.svg");}';
    echo '</style>';
}

add_action( "login_enqueue_scripts", "st_custom_login_logo" );
/**
 * Add a sidebar.
 */
if(function_exists("register_sidebar")){
    register_sidebar(array("name" => "sidebar",
        "before_widget" => "<div class='side-bar'>",
        "after_widget" => "</div>",
        "before_title" => "<h2>",
        "after_title" => "</h2>"
    ));
}
// --------------------------------------------------------------------//
// custom-logo which customer can change Logo easily
add_theme_support( 'smart-tech-logo', array(
    'height'      => 25,
    'width'       => 50,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );
// --------------------------------------------------------------------//
add_theme_support( 'post-thumbnails' );
// -------------------------------------------------------------------- //

// ==================================================================== //
// customize excerpt words length
function customize_except_length( $length ) {
    return 20;
}

// customize excerpt words length
function customize_more( $more ) {
    return " ....";
}
// ==================================================================== //

function crunchify_social_sharing_buttons($content) {
    global $post;
    if(is_singular() || is_home()){

        // Get current page URL
        $crunchifyURL = urlencode(get_permalink());

        // Get current page title
        $crunchifyTitle = str_replace( ' ', '%20', get_the_title());

        // Get Post Thumbnail for pinterest
        $crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
        $googleURL = 'https://plus.google.com/share?url='.$crunchifyURL;
        // $bufferURL = 'https://bufferapp.com/add?url='.$crunchifyURL.'&amp;text='.$crunchifyTitle;
        $whatsappURL = 'whatsapp://send?text='.$crunchifyTitle . ' ' . $crunchifyURL;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$crunchifyURL.'&amp;title='.$crunchifyTitle;

        // Based on popular demand added Pinterest too
        $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;

        // Add sharing button at the end of page/page content
        $content .= '<!-- Crunchify.com social sharing. Get your copy here: http://crunchify.me/1VIxAsz -->';
        $content .= '<div class="crunchify-social">';
        $content .= '<h5 class="text-center">Share it :</h5>' ;
        $content .= '<a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank"><i class="fab fa-twitter fa-fw fa-2x"></i></a></a>';
        $content .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank"><i class="fab fa-facebook fa-fw fa-2x"></i></a>';
        $content .= '<a class="crunchify-link crunchify-whatsapp" href="'.$whatsappURL.'" target="_blank"><i class="fab fa-whatsapp fa-fw fa-2x"></i></a>';
        $content .= '<a class="crunchify-link crunchify-googleplus" href="'.$googleURL.'" target="_blank"><i class="fab fa-google-plus fa-fw fa-2x"></i></a>';
        // $content .= '<a class="crunchify-link crunchify-buffer" href="'.$bufferURL.'" target="_blank">Buffer</a>';
        $content .= '<a class="crunchify-link crunchify-linkedin" href="'.$linkedInURL.'" target="_blank"><i class="fab fa-linkedin fa-fw fa-2x"></i></a>';
        $content .= '<a class="crunchify-link crunchify-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank"><i class="fab fa-pinterest-p fa-fw fa-2x"></i></a>';
        $content .= '</div>';

        return $content;
    }else{
        // if not a post/page then don't include sharing button
        return $content;
    }
};
add_filter( 'the_content', 'crunchify_social_sharing_buttons');
