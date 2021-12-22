<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Portflow - Minimal Portfolio Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="https://template.hasthemes.com/portflow/portflow/apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.11.7.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        
        <?php get_template_part('partials/header'); ?>


        <!-- End Header Style -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url('images/bg/2.jpg') no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">single portfolio</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">single portfolio</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <div class="single-portfolio-area bg__white ptb--100">
            <?php
            $attachment_id = get_post_thumbnail_id( $post->ID);
            $post_thumbnail = wp_get_attachment_url($attachment_id, true, false, true);
            $post_author = get_the_author_meta('display_name', $post->post_author);
            $post_date = date( 'F j, Y', strtotime( $post->post_modified ) );
            $cat_names = get_post_categories($post->ID, 'name');


            ?>

            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="single-portfolio-img">
                            <img src="<?= $post_thumbnail ?>" alt="<?= $post->post_title ?>">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="portfolio-description mrg-sm">
                            <h2><?= $post->post_title ?></h2>
                            <?= $post->post_content ?>


                            <div class="portfolio-info">
                                <ul>
                                    <li><span>Created by:</span><?= $post_author ?></li>
                                    <li><span>Completed on:</span><?= $post_date ?></li>
                                    <li><span>Categories:</span><?= $cat_names ?></li>
                                    <!-- <li><span>Client:</span>Tayeb rayed</li> -->
                                    <!-- <li><span>Skills:</span>HTML5 / WP / CSS3</li> -->
                                    <!-- <li><span>Created by:</span>Hamim Ahmed</li> -->
                                </ul>
                            </div>
                            <!-- <div class="portfolio-social">
                                <ul>
                                    <li>Share: </li>
                                    <li><a href="single-portfolio.html#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="single-portfolio.html#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="single-portfolio.html#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="single-portfolio.html#"><i class="zmdi zmdi-google"></i></a></li>
                                    <li><a href="single-portfolio.html#"><i class="zmdi zmdi-dribbble"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('partials/related'); ?>


        
        <!-- Start Footer Area -->
        <?php get_template_part('partials/footer'); ?>

        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-v1.12.4.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>