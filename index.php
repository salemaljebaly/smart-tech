<?php get_header(); ?>
    <!-- Slider -->
    <div id="smartTechIndicator" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#smartTechIndicator" data-slide-to="0" class="active"></li>
            <li data-target="#smartTechIndicator" data-slide-to="1"></li>
            <li data-target="#smartTechIndicator" data-slide-to="2"></li>
            <li data-target="#smartTechIndicator" data-slide-to="3"></li>
            <li data-target="#smartTechIndicator" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <span style="background-image: url(<?php echo get_template_directory_uri() . '/images/slider/ayrus-hill-wI9aSTf8Hwo-unsplash.jpg' ?>)"
                     class="d-block w-100">
                </span>
            </div>
            <div class="carousel-item">
                <span  style="background-image: url(<?php echo get_template_directory_uri() . '/images/slider/david-henrichs-72AYEEBJpz4-unsplash.jpg' ?>)"
                     class="d-block w-100" >
                </span>
            </div>
            <div class="carousel-item">
                <span style="background-image: url(<?php echo get_template_directory_uri() . '/images/slider/ian-usher-JPAfSd_acI8-unsplash.jpg' ?>)"
                     class="d-block w-100 third-img-span">
                </span>
            </div>
            <div class="carousel-item">
                <span style="background-image: url(<?php echo get_template_directory_uri() . '/images/slider/camera.jpg' ?>)"
                     class="d-block w-100 third-img-span">
                </span>
            </div>
            <div class="carousel-item">
                <span style="background-image: url(<?php echo get_template_directory_uri() . '/images/slider/switch.jpg' ?>)"
                     class="d-block w-100 third-img-span">
                </span>
            </div>

            <!-- overlay -->
            <div class="overlay">

            </div>
        </div>

        <a class="carousel-control-prev" href="#smartTechIndicator" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#smartTechIndicator" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>


    </div> <!-- Slider -->
    <!-- latest posts -->

    <section class="latest-posts smart-tech-shadow">
        <div class="container">
            <div class="main">
                <span class="latest-post-trend">
                    <h6><i class="fa fa-clock"></i> Latest News</h6>
                </span>
                <div class="row">
                    <?php
                    // ------------------------------------------------------------------------------------------- //
                    // post loops
                    $posts_page = 2; // only get 2 posts
                    $wpQueryArguments = array(
                        'posts_per_page' => $posts_page,
                        //        'tag' => 'اعلان',
                        // if u wanna to display custom type of post just put tag name
                    );
                    // WP_Query  The WordPress Query class.
                    $the_query = new WP_Query($wpQueryArguments);
                    if ($the_query->have_posts()) { // check if there is posts
                        while ($the_query->have_posts()) { // Loop throw posts
                            $the_query->the_post(); // post start
                            ?>
                            <div class="col-sm-12 col-md-6">
                                <a href="<?php the_permalink(); // return link of post to show it in single page
                                ?>">
                                    <div class="row">
                                        <div class="col-5">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail(array(208, 127), ['class' => 'img-responsive post-thumb-img', 'title' => 'Post image']);
                                            } else {
                                                echo '<img src="' . get_template_directory_uri() . '/images/no_thumbnail.svg" class="img-responsive"
                                            title="Post add image">';
                                            }
                                            ?>
                                        </div>
                                        <div class="content col-7">
                                            <i class="fa fa-clock fa-lg"></i>
                                            <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                            <h6><?php the_title(); ?></h6>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <?php
                        }
                    }
                    // ------------------------------------------------------------------------------------------- //
                    ?>
                </div>
            </div>
        </div>
    </section><!-- latest posts -->
    <!-- our services -->
    <section class="services smart-tech-shadow text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/services/laptop.svg' ?>"
                         alt="computers">
                    <h3>Computers</h3>
                </div>
                <div class="col text-center">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/services/Accesseroies.svg'; ?>"
                         alt="accessories">
                    <h3>Accessories</h3>
                </div>
                <div class="col text-center">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/services/security camera.svg'; ?>"
                         alt="security_camera">
                    <h3>Security Camera</h3>
                </div>
                <div class="col text-center">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/services/camera-drone.svg'; ?>"
                         alt="drones">
                    <h3>Drones</h3>
                </div>
            </div>
<!--            <a class="st-btn" href="--><?php //echo bloginfo(url) . '/category/products/' ?><!--">And more</a>-->
        </div>
    </section><!-- our services -->
    <!-- about us  -->
    <section class="about-us text-center">
        <div class="about-image smart-tech-shadow">
            <div class="container">
                <div class="content ">
                    <h2><i class="fa fa-info-circle"></i> About Company</h2>
                    <p>Smart Tech is a Libyan company that was established in 2016 and is headquartered in Radio Street,
                        and the second branch was opened recently in 2020 and it is a company specializing in electronic services,
                        we strive to provide unique security and technical services In our business,
                        we also aspire to be the pioneers at the local level in our field and to achieve the widest reach and expansion
                        in the region, and that our products and services reach all parties, companies, institutions and individuals.</p>
                </div>
                <div class="social-icons">
                    <a href="https://www.facebook.com/MiusrataEl/" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
                    <a href="#"><i class="fab fa-instagram-square fa-3x"></i></a>
                    <a href="#"><i class="fab fa-whatsapp-square fa-3x"></i></a>
                </div>

                <a class="st-btn text-center" href="<?php echo get_bloginfo('url').'/about-us'?>">Read more</a>
            </div>
    </section><!-- about us  -->
    <!-- what our clients says  -->
    <div class="our-clients smart-tech-shadow text-center">
        <h2 class="text-center">Brands</h2>
        <div id="smartTechIndicatorclients" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri() . '/images/brand_logos/1.svg' ?>" >
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri() . '/images/brand_logos/2.svg' ?>" >
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri() . '/images/brand_logos/3.svg' ?>" >
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri() . '/images/brand_logos/4.png' ?>" >
                </div>
            </div>

            <a class="carousel-control-prev" href="#smartTechIndicatorclients" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#smartTechIndicatorclients" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> <!-- what our clients says  -->

    <div class="our-clients distributors smart-tech-shadow text-center">
        <h2 class="text-center">Authorized distributors</h2>
        <img src="<?php echo get_template_directory_uri() . '/images/brand_logos/distributors.png' ?>" >
    </div>
<!--todo add brands here with out carosal-->
<?php get_footer(); ?>