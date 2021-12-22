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

        
        <!--[HEADER]-->
        <?php get_template_part('partials/header'); ?>


        <!-- End Header Style -->
        <!-- Start Feature Product -->
        <?php //get_template_part('partials/hero'); ?>

        
        <!-- End Feature Product -->
        <div class="portfolio-grid-area bg__white pt--80 pb--100">
		    <div class="container">
		        <div class="portfolio-menu-active gutter-btn mb--50">
                    <button class="active" data-filter="*">All works</button>
                    <?php
                        $all_cats = get_all_categories();
                        foreach ($all_cats as $key => $obj) { ?>
                            <button data-filter=".<?= $obj['slug']?>"><?= $obj['name']?></button>
                            <?php
                        }
                    ?>
                </div>
                <div class="portfolio-style">
                    <!--[POSTS]-->
                    <?php get_template_part('partials/posts'); ?>
                </div>
		    </div>
		</div>


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