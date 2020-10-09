<?php
/**
* This is custom category used to view all categories depends on
 * customer request -_-
*/

// todo all is done but the problem from plugin maybe I must costumize url and css
get_header();

// post request
$lang = null;
if(isset($_POST['lang'])){
    $lang = $_POST['lang'];
    require_once get_template_directory() . '/inc/'.$lang.'_categories.php';
    require_once get_template_directory() . '/inc/'.$lang.'_selection.php';
} else{
    require_once get_template_directory() . '/inc/en_selection.php';
    require_once get_template_directory() . '/inc/en_categories.php';
}

require_once get_template_directory() . '/inc/header-pages.php';

if(is_category('services') ){ // check if this is services category or not
    ?>
    <div class="container">
        <h2 class="cat-title smart-tech-shadow">services</h2>
        <form class="text-center" name="custom-lang" action="" method="post">
            <select name="lang" class="lang-select custom-select-lg mb-3" onchange="this.form.submit();">
                <option ><?php echo $ar_selection["select_lang"]; ?></option>
                <option  value="en"><?php echo $ar_selection["english"]; ?></option>
                <option value="ar"><?php echo $ar_selection["arabic"]; ?></option>
            </select>
        </form>
        <div class="row">

            <?php
            $couter = 1;
            foreach ($category as $key => $value){?>
            <div class="col-md-4 col-sm-12">
                <div class="custom-cat  text-center">
                    <img src="<?php echo get_template_directory_uri() . '/images/category_icons/'.$couter .'.svg'; ?>" alt="" width="80">
                    <h5><?php echo $category[$key];?></h5>
                </div>
            </div>
            <?php $couter++; } ?>
        </div>
    </div>
<!--    todo complete category sections -->
<?php

} else if(is_category('خدماتنا')){
    require_once get_template_directory() . '/inc/ar_categories.php';
    ?>
    echo '<h2 class="cat-title smart-tech-shadow">services</h2>';
    <div class="container">
        <div class="row">

            <?php
            $couter = 1;
            foreach ($category as $key => $value){?>
                <div class="col-md-4 col-sm-12">
                    <div class="custom-cat  text-center">
                        <img src="<?php echo get_template_directory_uri() . '/images/category_icons/'.$couter .'.svg'; ?>" alt="" width="80">
                        <h5><?php echo $category[$key];?></h5>
                    </div>
                </div>
                <?php $couter++; } ?>
    </div>
</div>
<?php
}
?>
<?php
//$args = array(
//    'hide_empty'      => false, // this args show all categories even not have posts
//);
//$categories = get_categories($args);
//echo '<div class="container">';
//echo '<div class="row">';
//foreach($categories as $category) {
//
//    $output =  '<div class="col-md-4 col-sm-12">';
//    $output .=  '<div class="custom-cat  text-center">';
//    // show cat image depends on taxonomy image plugin
//    $output .= apply_filters( 'taxonomy-images-queried-term-image', '' );
//    $output .= '<a class="custom-cat-name" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
//    $output .= '</div>';
//    $output .= '</div>';
//    echo $output;
//}
//echo '</div>';
//echo '</div>';
get_footer();
?>

